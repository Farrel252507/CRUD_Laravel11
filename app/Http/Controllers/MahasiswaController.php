<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
  public function index()
  {
     $mahasiswas = Mahasiswa::all();
     return view('index',['mahasiswa'=> $mahasiswas]);
  }

  public function create()
  {
      return view('form-pendaftaran');
  }

  public function store(Request $request)
  {
      $validateData = $request->validate([
          'nim'           => 'required|size:8',
          'nama'          => 'required|min:3|max:50',
          'jenis_kelamin' => 'required|in:P,L',
          'jurusan'       => 'required',
          'alamat'        => '',
      ]);

      dump($validateData);
  }
}
