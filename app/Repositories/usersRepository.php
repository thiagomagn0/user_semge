<?php

namespace App\Repositories;

use App\Models\users;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class usersRepository
 * @package App\Repositories
 * @version November 8, 2021, 5:28 pm UTC
*/

class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return users::class;
    }
}
