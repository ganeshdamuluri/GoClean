<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usersorders extends Model
{
    
    protected $table= users_order;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'user_id','vehicle_type','package','service','mobile_number','Address','vehicle_make','vehicle_model','booking_date','message','created_at','updated_at'

    ];

   
}
