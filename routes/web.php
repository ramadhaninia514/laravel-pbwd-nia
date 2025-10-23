<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action: function ()  {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['apis','pis','nia','iaa'];
    $jumlah = count ($npm);
    return view('mahasiswa',compact('npm', 'jumlah', 'nama'));
});

Route::get('profil', action: function () {
    $nama = 'nia';
    return view('profil',data: compact('nama'));
     //return view('profil')->with('nama',$nama));
});


