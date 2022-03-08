<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    /**
     * The nprimary key associated with the table
     * 
     *  @var string 
    */


    // protected $fillable['name', 'category'];
    
    protected $guarded = [];
}
