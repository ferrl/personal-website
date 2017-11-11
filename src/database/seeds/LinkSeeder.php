<?php

use App\Link;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::forceCreate(['slug' => 'sonne', 'target' => 'http://sonne-consulting.com']);
        Link::forceCreate(['slug' => 'aaa', 'target' => 'https://aaa.academy']);
        Link::forceCreate(['slug' => 'aaa-webinar', 'target' => 'https://aaa.academy/webinar']);
        Link::forceCreate(['slug' => 'allan-costa', 'target' => 'http://www.allancosta.com']);
        Link::forceCreate(['slug' => 'arthur-igreja', 'target' => 'http://arthurigreja.com']);
        Link::forceCreate(['slug' => 'ricardo-amorim', 'target' => 'http://ricamconsultoria.com.br']);
        Link::forceCreate(['slug' => 'administradores', 'target' => 'https://www.administradores.com.br']);
        Link::forceCreate(['slug' => 'adm-premium', 'target' => 'https://www.administradores.com.br/premium']);
        Link::forceCreate(['slug' => 'cafe-brasil', 'target' => 'http://www.portalcafebrasil.com.br/todos/podcasts']);
        Link::forceCreate(['slug' => 'cbp-degustacao', 'target' => 'https://cafebrasilpremium.com.br/degustacao/sumario']);
        Link::forceCreate(['slug' => 'inversa', 'target' => 'http://inversapub.com']);
    }
}
