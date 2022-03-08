<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

     /**
     * The nprimary key associated with the table
     * 
     *  @var string 
    */

    protected $primaryKey = "id";
    
    protected $fillable= [
        'type', 
        'description', 
        'movement',
        'picture_path',
        'purchase_date',
        'start_use_date',
        'purchase_price',
        'warranty_expiry_date',
        'degredation_year',
        'current_value_naira',
        'location'
    ];
    

}
