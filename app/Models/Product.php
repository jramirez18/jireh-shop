<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //definimos que campos no queremos que se asignem por asignacion masiva, lo hacemos asi porque son menos que la asignacion
    protected $guarded=['id','created_at','updated_at'];

    //relacion 1:N
    public function sizes(){
        return  $this->hasMany(Size::class);
    }

    //relacion 1:N inversa
    public function brans(){
        return $this->belongsTo(Brand::class);
    }

    //relacion inversa
    public function subcategory(){
        return $this->belongsTo(Category::class);
    }

    //relacion n:M
    public function colors(){
        return $this->hasMany(Color::class);
    }

    //relacion 1:N polimorfica
    public function images(){
        return $this->morphMany(Image::class,'imageable');

    }

}
