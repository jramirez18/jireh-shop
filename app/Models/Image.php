<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable=['url','imageable_id', 'imageable_type'];

    public function imageable(){
        return $this->morphTo();//Esto indica que trabajaremos con una relacion polimorfica
    }

    //ahora nos dirigimos al modelo Product, el cual relacionaremos con el modelo Image
    
}
