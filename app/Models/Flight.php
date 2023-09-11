<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table="flight";
    protected $fillable=["user_id","nereden","nereye","gidis_tarihi","gelis_tarihi","progress","status","created_at","updated_at"];
}
