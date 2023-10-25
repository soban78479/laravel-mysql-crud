<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'roll_no',
        'gender',
        'dob',
        'email',
        'phone_no',
        'country',
        'subject',
        'comment',
    ];
}
