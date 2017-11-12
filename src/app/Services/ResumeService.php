<?php

namespace App\Services;

use App\Resume;

class ResumeService
{
    /**
     * Get first instance of resume. In this case
     * is should only have one.
     *
     * @return Resume
     */
    public function first()
    {
        return cache()->remember('resumes.first', 30, function () {
            return Resume::query()->first();
        });
    }
}
