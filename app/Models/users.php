<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models
 * @version November 8, 2021, 5:28 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $cpf
 * @property string $birth_date
 * @property integer $phone
 * @property boolean $admin
 * @property boolean $supervisor
 * @property boolean $operator
 * @property string $remember_token
 */

class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'cpf',
        'birth_date',
        'phone',
        'admin',
        'supervisor',
        'operator',
        'remember_token'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'nivel_id' => 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'cpf' => 'string',
        'birth_date'=>'string',
        'phone' =>'integer',
        'admin'=>'boolean',
        'supervisor'=>'boolean',
        'operator'=>'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'cpf' => 'required|string|max:255',
        'birth_date' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'admin' => 'required|boolean',
        'supervisor' => 'required|boolean',
        'operator' => 'required|boolean',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
