<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //definimos los campos que no queremos que se llenen por asignacion masiva
    //definimos una prop de tipo protected, el cual hara el efecto contrario de la prop fillable
    protected $guarded=['id','created_at','updated_at'];//define los campos que queremos deshabilitar

    //1 subcategoria puede tener varios productos -->1:N
    //RELACION 1 A MUCHOS
    public function products(){
        //aca definimos el tipo de relacion
        return $this->hasMany(Product::class);

    }


    //Relacion 1:N inversa 
    //una subcategoria solo va a poder tener una categoria, por eso se coloca en singular
    public function category(){
        return $this->belongsTo(Category::class);//nombre del modelo Category::class

    }




}
