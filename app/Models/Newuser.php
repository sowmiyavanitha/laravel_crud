<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newuser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='newusers';
    protected $fillable = ['name','email','gender'];
}
