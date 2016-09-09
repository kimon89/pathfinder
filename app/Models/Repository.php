<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents a repository
 */
class Repository extends Model
{
    protected $table = 'repositories';

    public $timestamps = false;

    /**
     * Many to many relationship with users
     * @return [type] [description]
     */
    public function users()
    {
    	return $this->belongsToMany('App\Models\User');
    }
}
