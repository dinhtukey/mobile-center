<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'brand_id';
    protected $guarded = [''];

    const ACTIVE_PUBLIC = 1;
    const ACTIVE_PRIVATE = 0;

    protected $active = [
        1 => [
            'name' => 'Public',
            'class' => 'badge-success'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'badge-warning'
        ]
    ];
    public function getActive() {
        return array_get($this->active,$this->brand_active,'[N\A]');
    }
}
