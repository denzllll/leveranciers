<?php

namespace App\Repositories;

use App\Models\klanten;
use App\Repositories\BaseRepository;

/**
 * Class klantenRepository
 * @package App\Repositories
 * @version February 15, 2023, 12:45 am UTC
*/

class klantenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'voornaam',
        'achternaam',
        'geslacht',
        'adres',
        'district',
        'telefoonnummer',
        'email'
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
        return klanten::class;
    }
}
