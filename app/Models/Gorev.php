<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gorev extends Model
{
    use HasFactory;
    protected $table="gorev";
    protected $fillable=["title","description","progress","status","start_date","end_date","created_at","updated_at"];
}
