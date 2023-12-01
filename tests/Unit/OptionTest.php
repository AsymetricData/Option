<?php

use AsymetricData\Option\None;
use AsymetricData\Option\Some;

test('Some is typeof Some', function () {
    expect(new Some('something'))->toBeInstanceOf(Some::class);
});

test('None is typeof None', function () {
    expect(new None('something'))->toBeInstanceOf(None::class);
});

test('unwrap Some returning the correct value', function () {
    expect((new Some('something'))->unwrap())->toBe('something');
});