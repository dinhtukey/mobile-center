<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
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

    public function getStatus(){
        return array_get($this->status,$this->art_active,'[N\A]');
    }
}
