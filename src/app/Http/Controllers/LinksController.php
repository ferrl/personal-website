<?php

namespace App\Http\Controllers;

use App\Link;
use App\LinkEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LinksController extends Controller
{
    /**
     * Redirects to hotlink.
     *
     * @param Request $request
     * @param string $slug
     * @return View
     */
    public function redirect(Request $request, $slug)
    {
        $link = $this->findLinkBySlug($slug);

        $referrer = $request->server('HTTP_REFERER');
        $domain = data_get(parse_url($referrer), 'host');

        LinkEvent::query()->forceCreate([
            'type' => LinkEvent::TYPE_REDIRECT,
            'referrer' => $referrer,
            'domain' => $domain,
            'link_id' => $link->getKey(),
        ]);

        return redirect()->to($link->target);
    }

    /**
     * Find link by it's slug.
     *
     * @param string $slug
     * @return Link|Model
     */
    protected function findLinkBySlug($slug)
    {
        return Link::query()->where('slug', $slug)->firstOrFail();
    }
}
