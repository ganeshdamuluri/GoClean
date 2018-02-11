<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends models
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table= user_roles;
	
    }
