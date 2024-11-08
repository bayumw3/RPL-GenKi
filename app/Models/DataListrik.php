<?php

// app/Models/DataListrik.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataListrik extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'daya_listrik', 'status'];
}
