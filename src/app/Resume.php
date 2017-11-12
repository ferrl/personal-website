<?php

namespace App;

use Carbon\Carbon;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resume
 *
 * @property int $id
 * @property string $name
 * @property Carbon $birth_date
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read string $position
 * @property-read string $location
 * @property-read string $contact
 * @property-read string $specialties
 * @property-read string $skills
 * @property-read string $about
 */
class Resume extends Model
{
    use Translatable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'birth_date' => 'date',
    ];

    /**
     * Attributes that should be translated.
     *
     * @var array
     */
    public $translatedAttributes = [
        'position',
        'location',
        'contact',
        'specialties',
        'skills',
        'about',
    ];
}
