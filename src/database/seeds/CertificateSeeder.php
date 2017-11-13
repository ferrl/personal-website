<?php

use App\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::query()->forceCreate([
            'begin' => '2016-06-01',
            'order' => 1,
            'en' => [
                'title' => 'Inbound Marketing',
                'content' => '<p>Issued by <a href="'.route('links.redirect', 'ZAJQN5').'" hreflang="pt-BR" target="_blank" rel=nofollow noopener">RD Station</a>.</p>',
            ],
            'pt_BR' => [
                'title' => 'Inbound Marketing',
                'content' => '<p>Emitido por <a href="'.route('links.redirect', 'ZAJQN5').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">RD Station</a>.</p>',
            ],
        ]);

        Certificate::query()->forceCreate([
            'begin' => '2016-07-01',
            'end' => '2018-06-30',
            'order' => 2,
            'en' => [
                'title' => 'Inbound Marketing',
                'content' => '<p>Issued by <a href="'.route('links.redirect', 'HC7maT').'" hreflang="en-US" target="_blank" rel="nofollow noopener">Hubspot Academy</a>.</p>',
            ],
            'pt_BR' => [
                'title' => 'Inbound Marketing',
                'content' => '<p>Emitido por <a href="'.route('links.redirect', 'HC7maT').'" hreflang="en-US" target="_blank" rel="nofollow noopener">Hubspot Academy</a>.</p>',
            ],
        ]);

        Certificate::query()->forceCreate([
            'begin' => '2016-06-01',
            'end' => '2017-11-30',
            'order' => 3,
            'en' => [
                'title' => 'Google Analytics Individual Qualification',
                'content' => '<p>Issued by <a href="'.route('links.redirect', 'T4wQZ2').'" hreflang="en-US" target="_blank" rel="nofollow noopener">Google</a>.</p>',
            ],
            'pt_BR' => [
                'title' => 'Google Analytics Individual Qualification',
                'content' => '<p>Emitido por <a href="'.route('links.redirect', 'T4wQZ2').'" hreflang="en-US" target="_blank" rel="nofollow noopener">Google</a>.</p>',
            ],
        ]);

        Certificate::query()->forceCreate([
            'begin' => '2016-08-01',
            'order' => 4,
            'en' => [
                'title' => 'Leadership Development Program - Middle Management',
                'content' => '<p>Issued by <a href="'.route('links.redirect', 'bo1rfc').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">San Martin & Niklas</a>.</p>',
            ],
            'pt_BR' => [
                'title' => 'Leadership Development Program - Média Gestão',
                'content' => '<p>Emitido por <a href="'.route('links.redirect', 'bo1rfc').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">San Martin & Niklas</a>.</p>',
            ],
        ]);

        Certificate::query()->forceCreate([
            'begin' => '2017-05-01',
            'end' => '2019-04-30',
            'order' => 5,
            'en' => [
                'title' => 'AWS Certified Developer - Associate',
                'content' => '<p>Issued by <a href="'.route('links.redirect', 'Y8Euy0').'" hreflang="en-US" target="_blank" rel="nofollow noopener">Amazon Web Services</a>.</p>',
            ],
            'pt_BR' => [
                'title' => 'AWS Certified Developer - Associate',
                'content' => '<p>Emitido por <a href="'.route('links.redirect', 'Y8Euy0').'" hreflang="en-US" target="_blank" rel="nofollow noopener">Amazon Web Services</a>.</p>',
            ],
        ]);
    }
}
