<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CertificateTranslation
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $locale
 */
class CertificateTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
