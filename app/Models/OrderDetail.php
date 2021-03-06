<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at', 'updated_at',
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id');
    }
}
