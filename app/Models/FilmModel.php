<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{

    protected $table = 'film';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowFields = [];

   public function getFilm(){
    $data =[
        [
            "nama_film" => "Sewu Dino",
            "genre" => "horor",
            "duration" => "1 jam 43 menit"
        ],
        [
            "nama_film" => "Weak Heroes",
            "genre" => "Action",
            "duration" => "44 mennit"
        ],
        [
            "nama_film" => "Terrifier",
            "genre" => "Action",
            "duration" => "Psikopat"
        ],
        [
            "nama_film" => "Naruto",
            "genre" => "Anime",
            "duration" => "2 jam 4 menit"
        ],
        [
            "nama_film" => "Azab",
            "genre" => "drama",
            "duration" => "2 jam"
        ]
    ];

    return $data;

   }

    public function getAllData(){
       return $this->findAll();
    }

    public function getDataById($id){
        return $this->find($id);
    }

    public function getDataBy($data){
        return $this->where('genre', $data)->findAll();
    }

    public function getOrderBy(){
        return $this->orderBy('created_at','desc')->findAll();
    }

    public function getLimit(){
        return $this->limit(10)->findAll();
    }
}
