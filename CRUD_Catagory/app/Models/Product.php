<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['categorie_id','name','unit_price','qty_in_stock'];

    public function category(){
        return $this->belongsTo(Category::class,'categorie_id');
    }

    public static $rules = [
        'categorie_id'=>'required',
        'name'=>'required',
        'unit_price'=>'required|numeric',
        'qty_in_stock'=>'required|numeric'
    ];
}

