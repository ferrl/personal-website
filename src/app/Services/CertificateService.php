<?php

namespace App\Services;

use App\Certificate;
use Illuminate\Support\Collection;

class CertificateService
{
    /**
     * Get all instance of certificates valid.
     *
     * @return Certificate[]|Collection
     */
    public function all()
    {
        return cache()->remember('certificates.all', 30, function () {
            return Certificate::query()->withTranslation()->orderByDesc('order')->get();
        });
    }
}
