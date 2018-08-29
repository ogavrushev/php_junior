<?php

namespace Lib\Api;

interface iApi {
    public function get(string $url) : mixed;
}
