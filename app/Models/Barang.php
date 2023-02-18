<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\ApiBarangController;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'tbl-barang';
    protected $guarded = [''];
}
