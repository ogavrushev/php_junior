<?php

namespace RateApp\Lib\Store;

interface iStore {
    /**
     * Get data from store
     */
    public function get(string $key) : ?string;
    
    /**
     * Set data to store
     */
    public function set(string $key, string $data) : bool;
}