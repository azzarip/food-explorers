<?php

namespace App;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class AzzariApi
{
    protected $request;

    protected $baseUrl;

    public function __construct()
    {
        $this->request = Http::retry(5, 50, function ($exception, $request) {
            return $exception instanceof RequestException && $exception->response->serverError() && $exception->getCode() != 503;
        })
            ->withBasicAuth(config('services.azzari-api.username'), config('services.azzari-api.call_password'))
            ->acceptJson();
        $this->baseUrl = config('services.azzari-api.call_url');
    }

    public static function test()
    {
        $api = new self;

        return $api->call('get', '/up');
    }

    public static function get(string $uri, $data = [])
    {
        $api = new self;

        return $api->call('get', $uri, $data);
    }

    public static function patch(string $uri, array $data = [])
    {
        $api = new self;

        return $api->call('patch', $uri, $data);
    }

    public static function post(string $uri, array $data = [])
    {
        $api = new self;

        return $api->call('post', $uri, $data);
    }

    public function call(string $method, string $uri, array $data = [])
    {
        $uri = trim($uri, '/');

        return $this->request->$method($this->baseUrl.'/'.$uri, $data);
    }
}
