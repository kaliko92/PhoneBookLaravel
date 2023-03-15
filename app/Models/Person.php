<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';
    public $timestamps = false;
    protected $fillable = ['id', 'name'];
    
    public function Contacts()
    {
        return $this->hasMany('App\Models\Contact', 'personId', 'id');
    }

}