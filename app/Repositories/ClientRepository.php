<?php

namespace App\Repositories;

use App\Models\Client;
use InfyOm\Generator\Common\BaseRepository;

class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "name",
		"lastname",
		"dni",
		"cuit",
		"phone"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Client::class;
    }
}
