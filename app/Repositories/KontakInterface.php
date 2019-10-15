<?php

namespace App\Repositories;

use App\Kontak;

interface KontakInterface{
    public function create(string $nama, $telepon, $email, $alamat);
    public function all();
    public function get(int $id);
    public function update(int $id, string $nama, $telepon, $email, $alamat);
    public function delete(int $id);
} 