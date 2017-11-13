<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class LinkEvent
 *
 * @property int $id
 * @property string $slug
 * @property string $referrer
 * @property string $referrer_domain
 * @property array $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Link $link
 */
class LinkEvent extends Model
{
    /**
     * Hit one redirect.
     */
    const TYPE_REDIRECT = 'redirect';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'json',
    ];

    /**
     * Represents a database relationship.
     *
     * @return BelongsTo
     */
    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}
