<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
class User extends Model implements Transformable
{
    use TransformableTrait;


    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'role',
        'description',
        'birth_date',
        'phone',
        'address',
        'avatar',
        'created_by',
        'created_at',
        'updated_at',
    ];

    /**
     * get role of user
     *
     */
    public function role()
    {
        return $this->belongsTo('App\Entities\Role', 'role', 'id');
    }
}
