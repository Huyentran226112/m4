<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhsach extends Model
{
    use HasFactory;
    protected $table = 'danhsach';
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
