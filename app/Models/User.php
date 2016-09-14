<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents a user.
 */
class User extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    /**
     * Many to many relationship with repositories.
     *
     * @return [type] [description]
     */
    public function repositories()
    {
        return $this->belongsToMany('App\Models\Repository');
    }
}
