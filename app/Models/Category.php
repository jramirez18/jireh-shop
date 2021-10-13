<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //habilitamos la asignacion masiva
    protected $fillable=['name','slug','image','icon'];


    //generar relacion entre tablas

    //relacion de 1:M
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //relacion M:N
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //relacion entre categorias y productos
    //relacion de uno a muchos..a traves de otra rel
    public function products(){
        return $this->hasManyThrough(Product::class,Subcategor::class);
    }
}
