<?php

use Azzarip\Teavel\Models\Contact;

beforeEach(function () {
    $this->contact = Contact::factory()->create();
    $this->actingAs($this->contact);
});

it('requires name', function () {
    $this->dpost('/suggest', 'my', [
        'wrong_key' => '::value::',
    ])->assertSessionHasErrors('name');
});

it('creates suggests in db and cache value', function () {
    $this->dpost('/suggest', 'my', [
        'name' => 'Name',
        'url' => 'url',
        'text' => 'text'
    ])->assertRedirect();
    $this->assertDatabaseHas('suggests', [
        'contact_id' => $this->contact->id,
        'text' => "Name\nurl\ntext"
    ]);
    expect(cache('suggest.' . $this->contact->id))->toBeTrue();
});
