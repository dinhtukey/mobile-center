<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'prod_id';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    const FEATURED_PUBLIC = 1;
    const FEATURED_PRIVATE = 0;
    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'badge-success'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'badge-warning'
        ]
    ];
    protected $featured = [
        1 => [
            'name' => 'Nổi bật',
            'class' => 'badge-success'
        ],
        0 => [
            'name' => 'Không',
            'class' => 'badge-warning'
        ]
    ];
    public function getStatus(){
        return array_get($this->status,$this->prod_active,'[N\A]');
    }
    public function getFeatured(){
        return array_get($this->featured,$this->prod_featured,'[N\A]');
    }
    public function category(){
        return $this->belongsTo(Category::class,'prod_cate');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'prod_brand');
    }
}
