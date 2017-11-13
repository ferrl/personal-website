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
                'position' => 'Full-Stack Developer',
                'location' => 'Natal, Brazil',
                'contact' => '<p>Contact me for availability, rates or collaboration. You can reach me at my <a href="mailto:me@ferrl.io">e-mail</a> or <a href="skype:lucasferreira_113">skype</a>. I will usually take one day to reply.</p>',
                'specialties' => '<p class="font-weight-bold">- Software Architecture<br>- System Operations<br>- Amazon Web Services<br>- Laravel Framework<br>- VueJS Framework</p>',
                'skills' => '<p>WordPress, ES6, Ruby on Rails, Project Management, Leadership, Search Engine Optimization.</p>',
                'about' => '<p>23yo full-stack developer. I have more than 6 years of experience as a front-end and back-end developer. In the last couple years I\'ve been specializing in Leadership, System Operations and DevOps.</p>',
            ],
            'pt_BR' => [
                'position' => 'Desenvolvedor Full-Stack',
                'location' => 'Natal, Brasil',
                'contact' => '<p>Consulte-me sobre disponibilidade e orçamentos. Você pode me encontrar no <a href="mailto:me@ferrl.io">e-mail</a> ou <a href="skype:lucasferreira_113">skype</a>. Normalmente levarei no máximo 1 dia para responder.</p>',
                'specialties' => '<p class="font-weight-bold">- Arquitetura de Software<br>- System Operations<br>- Amazon Web Services<br>- Laravel Framework<br>- VueJS Framework</p>',
                'skills' => '<p>WordPress, ES6, Ruby on Rails, Project Management, Leadership, Search Engine Optimization.</p>',
                'about' => '<p>Desenvolvedor full-stack de 23 anos. Possuo mais de 6 anos de experiência como desenvolvedor front-end e back-end. Nos últimos dois anos venho me especializando em Liderança, System Operations e DevOps.</p>',
            ],
        ]);
    }
}
