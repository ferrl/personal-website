<?php

namespace App\Services;

use App\Work;
use Illuminate\Support\Collection;

class WorkService
{
    /**
     * Get first instance of resume. In this case
     * is should only have one.
     *
     * @return Work[]|Collection
     */
    public function all()
    {
        return cache()->remember('works.all', 30, function () {
            return Work::query()->orderByDesc('order')->get();
        });
    }
}
