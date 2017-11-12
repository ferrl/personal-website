<?php

namespace App\Services;

use App\Work;
use Illuminate\Support\Collection;

class WorkService
{
    /**
     * Get all instance of work experience.
     *
     * @return Work[]|Collection
     */
    public function all()
    {
        return cache()->remember('works.all', 30, function () {
            return Work::query()->withTranslation()->orderByDesc('order')->get();
        });
    }
}
