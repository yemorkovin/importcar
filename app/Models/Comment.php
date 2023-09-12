<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['id', 'name', 'email', 'comment', 'id_post' , 'created_at', 'updated_at'];
    protected  $guarded = ['id'];
    //public $timestamps = false;
}
