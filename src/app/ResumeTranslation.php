<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResumeTranslation
 *
 * @property int $id
 * @property string $position
 * @property string $location
 * @property string $contact
 * @property string $specialties
 * @property string $skills
 * @property string $about
 * @property string $locale
 */
class ResumeTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
