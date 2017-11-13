<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkTranslation
 *
 * @property int $id
 * @property string $job_title
 * @property string $company
 * @property string $content
 * @property string $locale
 */
class WorkTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
