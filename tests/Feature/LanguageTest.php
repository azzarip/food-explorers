<?php

it('has language page', function () {
    $response = $this->get('/language');

    $response->assertStatus(200);
});
