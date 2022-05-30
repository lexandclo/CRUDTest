<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productCategory()
    {
        return $this->hasOne(Category::class);
    }
    public function getCat(){
        $cat = Category::where('id', $this->category_id)->first();
        if($cat){
        return $cat->name;
        } else {
            return 'No category found!!';
        }
    }
}
