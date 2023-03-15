<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // kết nối đến hệ quản trị cơ sở dũ liệu
    protected $connection = 'mysql';
    // khai báo tên bảng model lm vc
    protected $table = 'categories';
    //khai bao khpa chinh
    protected $primaryKey = 'id';
    // khai báo bang ko có CREATED_AT va UPDATED_AT
    // public $incrementing = false;
    // thay thế cho CREATED_AT
    const CREATED_AT = 'creation_date';
    // thay thế cho UPDATED_AT
    const UPDATED_AT = 'updated_date';
}
