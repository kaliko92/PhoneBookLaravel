<?php

namespace App\Models;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    use HasFactory;

    protected $table = 'contactType';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'icon'];
    
   
}