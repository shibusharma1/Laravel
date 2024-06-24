<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primarykey = 'student_id';
    public function getProgram()
    {
        return $this->belongsTo('App\Models\Program','program_id');
    }
}
