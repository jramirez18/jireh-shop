<?php

namespace App\Models;

use Faker\Provider\ar_SA\Color;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable=['name','product_id'];

    //relacion 1:N INVERSA
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //relacion n:m 
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
