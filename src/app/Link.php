<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Link class.
 *
 * @property int $id
 * @property string $slug
 * @property string $target
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property LinkEvent[]|Collection $link_events
 */
class Link extends Model
{
    /**
     * Represents a database relationship.
     *
     * @return HasMany
     */
    public function linkEvents()
    {
        return $this->hasMany(LinkEvent::class);
    }
}
