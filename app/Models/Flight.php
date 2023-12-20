<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table ="flights";
    protected $fillable=["user_id","from_where","to_where","adult","child","baby","student","departure_date","arrival_date","created_at","updated_at"];
    
}
