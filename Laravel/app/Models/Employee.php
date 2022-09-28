<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $fillable = [
      'emp_name',
      'emp_add',
      'emp_phone',
      'emp_email',
      'emp_salary'
    ];
}
