<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class klanten
 * @package App\Models
 * @version February 15, 2023, 12:45 am UTC
 *
 * @property string $voornaam
 * @property string $achternaam
 * @property string $geslacht
 * @property string $adres
 * @property string $district
 * @property string $telefoonnummer
 * @property string $email
 */
class klanten extends Model
{
    use SoftDeletes;

    public $table = 'klanten';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'voornaam',
        'achternaam',
        'geslacht',
        'adres',
        'district',
        'telefoonnummer',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'voornaam' => 'string',
        'achternaam' => 'string',
        'geslacht' => 'string',
        'adres' => 'string',
        'district' => 'string',
        'telefoonnummer' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'voornaam' => 'required|string|max:255',
        'achternaam' => 'required|string|max:255',
        'geslacht' => 'required|string|max:255',
        'adres' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'telefoonnummer' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'deleted_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
