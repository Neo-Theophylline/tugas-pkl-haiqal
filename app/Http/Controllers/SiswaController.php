<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Clas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Unique;

class SiswaController extends Controller
{


    public function index()
    {
        return view('siswa.index');
    }

    public function create()
    {
        $clases = Clas::all(); // ambil semua data kelas
        return view('siswa.create', compact('clases'));
    }



    public function store(Request $request)
    {
        //validate
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required|unique:users,no_telepon',
        ]);

        $datauser = [
            'clas_id' => $request->kelas,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telepon' => $request->no_handphone,
        ];
        
            $datauser['photo'] = $request->file('photo')->store('images', 'public');

        user::create($datauser);

        return redirect('/');
    }
}
