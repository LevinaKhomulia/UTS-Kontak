<?php

namespace App\Repositories;

use App\Kontak;

class KontakRepository implements KontakInterface{
    public function create(string $nama, $telepon, $email, $alamat){
        $newKontak = new Kontak;
        $newKontak->nama = $nama;
        $newKontak->telepon = $telepon;
        $newKontak->email = $email;
        $newKontak->alamat = $alamat;
        $newKontak->save();
    } 

    public function all(){
        return Kontak::all();
    }

    public function get(int $id){
        return Kontak::findOrFail($id);
    }

    public function update(int $id, string $nama,  $telepon, $email, $alamat){
        $kontak = Kontak::findOrFail($id);
        $kontak->$nama;
        $kontak->$telepon;
        $kontak->$email;
        $kontak->$alamat;
        $kontak->save();
    }


    public function delete(int $id){
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
    }
    public  function filter(string $filter) {
        return Kontak::where('nama', 'like', '%'.$filter.'%')->get();            
    }
}