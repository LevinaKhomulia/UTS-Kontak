<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak as KontakModel;
use App\Repositories\KontakRepository;

class Kontak extends Controller 
{
    private $kontakRepo;

    public function __construct(KontakRepository $repo){
        $this->kontakRepo = $repo;
    }

    public function index(){
        $kontaks = $this->kontakRepo->all();
        return view('kontak.index', 
            ['kontaks' => $kontaks]);
    }

    public function new_form(){
        return view('kontak.new');
    }


    public function save(Request $request){
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $this->kontakRepo->create($nama, $telepon, $email, $alamat);
        return redirect(route('kontakIndex'));
    }

    public function detail(int $id){
        $kontak = $this->kontakRepo->get($id);
        if($kontak == null){
            abort(404);
        }
        return view('kontak.detail',
            ['kontak' => $kontak]);
    }

    public function edit(int $id){
        $kontak = KontakModel::findOrFail($id);
        return view('kontak.edit', 
            ['kontak' => $kontak]);
    }

    public function update(Request $request, int $id){
        $kontak = KontakModel::findOrFail($id);
        $kontak->nama = $request->input('nama');
        $kontak->telepon = $request->input('telepon');
        $kontak->email = $request->input('email');
        $kontak->alamat = $request->input('alamat');
        $kontak->save();
        return redirect(route('kontakIndex'));
    }

    public function delete(int $id) {
        $kontak = KontakModel::findOrFail($id);
        $kontak->delete();
        return redirect(route('kontakIndex'));
    }

    public  function filter(Request $request) {
        $search = $request->filter;
        $kontaks = $this->kontakRepo->filter($search);
        return view('kontak.index', ['kontaks'=>$kontaks]);
    }
}
