<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['categorie_id','name','unit_price','qty_stock'];

    public function category(){
        return $this->belongTo(Category::class);
    }
}
