<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkTranslation
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $locale
 */
class ProjectTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
