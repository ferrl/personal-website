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
        Link::forceCreate(['slug' => 'YbARaW', 'target' => 'http://sonne-consulting.com']);
        Link::forceCreate(['slug' => 'djj4Uh', 'target' => 'https://aaa.academy']);
        Link::forceCreate(['slug' => '1TRkH2', 'target' => 'https://aaa.academy/webinar']);
        Link::forceCreate(['slug' => '8Ewhzd', 'target' => 'http://www.allancosta.com']);
        Link::forceCreate(['slug' => 'YNAxI2', 'target' => 'http://arthurigreja.com']);
        Link::forceCreate(['slug' => 'NhT6jY', 'target' => 'http://ricamconsultoria.com.br']);
        Link::forceCreate(['slug' => 'kKyxeH', 'target' => 'https://www.administradores.com.br']);
        Link::forceCreate(['slug' => 'x81Dg8', 'target' => 'https://www.administradores.com.br/premium']);
        Link::forceCreate(['slug' => 'zzQGjH', 'target' => 'http://www.portalcafebrasil.com.br/todos/podcasts']);
        Link::forceCreate(['slug' => 'hM5IcV', 'target' => 'https://cafebrasilpremium.com.br/degustacao/sumario']);
        Link::forceCreate(['slug' => 'FetOVF', 'target' => 'http://inversapub.com']);
        Link::forceCreate(['slug' => 'ZAJQN5', 'target' => 'http://cursos.resultadosdigitais.com.br']);
        Link::forceCreate(['slug' => 'HC7maT', 'target' => 'https://academy.hubspot.com/certification']);
        Link::forceCreate(['slug' => 'T4wQZ2', 'target' => 'https://support.google.com/partners/answer/6089738']);
        Link::forceCreate(['slug' => 'bo1rfc', 'target' => 'http://www.portalsmn.com.br']);
        Link::forceCreate(['slug' => 'Y8Euy0', 'target' => 'https://aws.amazon.com/pt/certification/certified-developer-associate']);
    }
}
