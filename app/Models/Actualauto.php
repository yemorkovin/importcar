<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualauto extends Model
{
    use HasFactory;
    protected $table = 'actual_auto';
    protected $fillable = ['id', 'img', 'title', 'price_evropa', 'price_russia', 'created_at', 'updated_at'];
    protected  $guarded = ['id'];
    //public $timestamps = false;
}
