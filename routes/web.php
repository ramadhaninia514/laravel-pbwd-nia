<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action: function ()  {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profil', action: function () {
    $nama = 'nia';
    return view('profil',data: compact('nama'));
     //return view('profil')->with('nama',$nama));
});

Route::get('array',function(){
    for ($i=0; $i <= 5; $i++) {
        echo 'Hello world ' . $i . 'x<br>';
    }
}); 
