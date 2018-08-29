<?php

namespace RateApp\Lib;

interface iApi {
    public function get(string $url) : mixed;
}
