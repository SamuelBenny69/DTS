<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengajarController extends Controller
{
    //
    public function daftarPengajar()
    {
        return 'Form pendaftaran pengajar mahasiswa';
    }
    public function tablePengajar()
    {
        return 'Table data pengajar mahasiswa';
    }

    public function blogPenajar()
    {
        return 'halamn blog mahasiswa';
    }
}
