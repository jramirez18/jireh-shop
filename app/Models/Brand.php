<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=['name'];
    
    //VIDEO 10 RELACION ENTRE BRANDS Y PRODUCTS 1:N, le decimos que recupere la relacion con respecto a PRODUCTS
    public function products(){
        return $this->hasMany(Product::class);

    }


    //video 10 3.2 AGREGAMOS RELACION BRANDS CATEGORY RELACION M:N
    public function categories(){
        //especificamos el tipo de rel que queremos recuperar
        return $this->belongsToMany(Category::class);

    }
}
