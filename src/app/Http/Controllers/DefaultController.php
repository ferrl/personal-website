<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DefaultController extends Controller
{
    /**
     * Shows personal resume.
     *
     * @return View
     */
    public function show()
    {
        return response()
            ->view('default.show')
            ->header('Cache-control', 'max-age=30');
    }
}
