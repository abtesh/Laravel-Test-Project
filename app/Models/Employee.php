<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
   
    public $fillable = ['name', 'DOB', 'gender', 'salary'];
}
