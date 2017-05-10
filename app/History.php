<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
     protected $fillable = ['address','lat','lng'];
}
