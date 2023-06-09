<?php

function has_language_errors ($errors, $needles, $language = false) : bool
{
    return array_reduce(
        $language ? [ $language ] : array_keys( config('settings.languages') ),
        function ($carry, $lang) use ($errors, $needles) {
            return has_errors( $errors, array_map(function ($key) use ($lang, $needles){
                return $key . '_' . $lang;
            }, $needles)) || $carry;
        },
        false
    );
}

function has_errors ($errors, $needles) : bool
{
    info($needles);
    return array_reduce($needles, fn ($carry, $needle) => $errors->has($needle) || $carry, false);
}

function str_starts_with_multiple (string $haystack, array $needles) : bool
{
    $starts_with = false;

    foreach ( $needles as $needle ) $starts_with |= str_starts_with($haystack, $needle);

    return $starts_with;
}
