<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'salary', 'status',
    ];


    public function department(){
    	return $this->belongsTo(Department::class);
    }
}
