<?php

namespace App;

use Carbon\Carbon;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificate
 *
 * @property int $id
 * @property Carbon $begin
 * @property Carbon $end
 * @property int $order
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Certificate extends Model
{
    use Translatable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'begin' => 'date',
        'end' => 'date',
    ];

    /**
     * Attributes that should be translated.
     *
     * @var array
     */
    public $translatedAttributes = [
        'title',
        'format',
        'content',
    ];
}
