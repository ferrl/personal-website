<?php

namespace App\Services;

use App\Project;
use Illuminate\Support\Collection;

class ProjectService
{
    /**
     * Get all instance of projects developed.
     *
     * @return Project[]|Collection
     */
    public function all()
    {
        return cache()->remember('projects.all.'.config('app.locale'), 30, function () {
            return Project::query()->withTranslation()->orderByDesc('order')->get();
        });
    }
}
