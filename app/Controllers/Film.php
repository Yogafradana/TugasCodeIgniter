<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//Langkah Pertama
use App\Models\FilmModel;

class Film extends BaseController
{

    //langkah ke dua membuat properti
    protected $film;

    //langkah ke tiga membuat fungsi construct unutk inisiasi clas model
    public function __construct(){

        //step 4
        $this->film = new FilmModel();

    }

    public function index()
    {
        // Untuk Menampilkan ke view
        $data['data_film'] = $this->film->getFilm();

        //arahkan ke view
        return view("film/index", $data);
    }

    public function all(){
        $data['semuafilm'] = $this->film->getAllData();
        return view("film/semuafilm", $data);
    }

    public function byid(){
        dd($this->film->getDataById(3));
    }

    public function databy(){
        dd($this->film->getDataBy("Horror"));
    }

    public function order(){
        dd($this->film->getOrderBy());
    }

    public function limit(){
        dd($this->film->getLimit());
    }
}
