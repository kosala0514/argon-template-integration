<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'status',
        'image_id',
    ];

    public function image(){
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function allActive(){
        return $this->where('status', 1)->get();
    }

    public function filter(array $data){
        $products = $this->where('status', 1);

        if ($data['min_price'] || $data['max_price']) {
            if ($data['min_price'] && $data['max_price']) {
                $products->whereBetween('price',[$data['min_price'], $data['max_price']]);
            }
            if ($data['min_price'] && !$data['max_price']) {
                $products->where('price','>=',$data['min_price']);
            }
            if (!$data['min_price'] && $data['max_price']) {
                $products->where('price','<=', $data['max_price']);
            }
        }
        return $products->paginate(2);
    }
}
