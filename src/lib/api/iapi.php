<?php

namespace RateApp\Lib\Api;

interface iApi {
    public function get(string $url) : ?string;
}
