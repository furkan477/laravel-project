<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table="task";
    protected $fillable=["user_id","task_type","task_description","task_start_date","task_end_date","task_progress","task_status","created_at","updated_at"];
}
