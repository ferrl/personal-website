<?php

use App\Resume;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resume::query()->forceCreate([
            'name' => 'Lucas Ferreira',
            'birth_date' => Carbon::createFromDate(1994, 03, 21),
            'en' => [
                'position' => 'Full Stack Developer',
                'location' => 'Natal, RN - Brazil',
                'contact' => '<p>Contact me for availability, rates or collaboration. You can reach me at my <a href="mailto:me@ferrl.io">e-mail</a> or <a href="skype:lucasferreira_113">skype</a>. I usually take one day to reply.</p>',
                'specialties' => '<p class="font-weight-bold">- Software Architecture<br>- System Operations<br>- Amazon Web Services<br>- Laravel Framework<br>- VueJS Framework</p>',
                'skills' => '<p>WordPress, ES6, Ruby on Rails, Project Management, Leadership, Search Engine Optimization.</p>',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at, aut deleniti ea enim excepturi fugiat maiores odit qui quisquam rerum, sapiente sed sequi sint soluta totam, ut vel vitae!</p>',
            ],
            'pt_BR' => [
                'position' => 'Desenvolvedor Full Stack',
                'location' => 'Natal, RN - Brasil',
                'contact' => '<p>Consulte-me sobre disponibilidadee  orçamentos. Você pode me encontrar no <a href="mailto:me@ferrl.io">e-mail</a> ou <a href="skype:lucasferreira_113">skype</a>. Normalmente devo levar no máximo 1 dia para responder.</p>',
                'specialties' => '<p class="font-weight-bold">- Arquitetura de Software<br>- System Operations<br>- Amazon Web Services<br>- Laravel Framework<br>- VueJS Framework</p>',
                'skills' => '<p>WordPress, ES6, Ruby on Rails, Project Management, Leadership, Search Engine Optimization.</p>',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at, aut deleniti ea enim excepturi fugiat maiores odit qui quisquam rerum, sapiente sed sequi sint soluta totam, ut vel vitae!</p>',
            ],
        ]);
    }
}
