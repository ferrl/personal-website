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
        return view('default.show');
    }
}
