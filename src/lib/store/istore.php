<?php

namespace RateApp\Store;

interface iStore {
    public function get(int $id) : string;
    public function set(int $id, string $data) : bool;
}