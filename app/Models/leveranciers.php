<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class leveranciers
 * @package App\Models
 * @version February 15, 2023, 12:46 am UTC
 *
 * @property string $bedrijfsnaam
 * @property string $adres
 * @property string $district
 * @property string $directeur
 * @property string $telefoonnummer
 * @property string $website
 * @property string $deleted_by
 */
class leveranciers extends Model
{
    use SoftDeletes;

    public $table = 'leveranciers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bedrijfsnaam',
        'adres',
        'district',
        'directeur',
        'telefoonnummer',
        'website',
        'deleted_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bedrijfsnaam' => 'string',
        'adres' => 'string',
        'district' => 'string',
        'directeur' => 'string',
        'telefoonnummer' => 'string',
        'website' => 'string',
        'deleted_by' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bedrijfsnaam' => 'required|string|max:255',
        'adres' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'directeur' => 'required|string|max:255',
        'telefoonnummer' => 'required|string|max:255',
        'website' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'deleted_by' => 'nullable|string|max:255'
    ];

    
}
