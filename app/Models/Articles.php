<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class Articles extends Model
{
    use HasFactory;

    public function test(){
        return "Test Ajah";
    }

    public function list_articles(){
        $json = File::get("database/data/articles.json");
        $lists = json_decode($json);
        return $lists;
    }
}
