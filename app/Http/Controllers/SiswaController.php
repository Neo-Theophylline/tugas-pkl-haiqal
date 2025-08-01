<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_handphone' => 'required',
        ]);
    
        $datauser = [
            'clas_id' => $request->kelas,
            'photo' => 'photo.jpg',
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telepon' => $request->no_handphone,
        ];

        user::create($datauser);

        return redirect('/');
    }   

}
