<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kontak extends Controller
{
    public function index(){
        $kontaks = $this->kontakRepo->all();
        return ['kontaks' => $kontaks];
    } 
}
