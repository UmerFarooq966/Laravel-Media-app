<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $fillable = ['title','description','link','image','publisheddate','category','channel'];
}
