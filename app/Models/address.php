<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use SoftDeletes;

    public $table = 'address';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'street',
        'complement',
        'number',
        'city',
        'state',
        'country',
        'zip_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id'=>'integer',
        'street'=>'string',
        'complement'=>'string',
        'number'=>'integer',
        'city'=>'string',
        'state'=>'string',
        'country'=>'string',
        'zip_code'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'street' => 'required|string|max:255',
        'complement' => 'required|string|max:255',
        'number' => 'required|integer',
        'city' => 'nullable|string|max:100',
        'state' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'zip_code' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
