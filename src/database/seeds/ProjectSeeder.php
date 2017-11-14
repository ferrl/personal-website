<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::query()->forceCreate([
            'begin' => '2016-06-01',
            'end' => '2016-06-30',
            'order' => 2,
            'en' => [
                'title' => 'Administradores Premium - Learning Platform',
                'content' => '<p>As the largest portal about business administration and marketing in Brazil, the <a href="'.route('links.redirect', 'kKyxeH').'" hreflang="pt-BR" target="_blank" rel=nofollow noopener">Administradores</a> has a average of 200k visits per day. The objective of this project was to launch a completely new <a href="'.route('links.redirect', 'x81Dg8').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">learning platform</a> for it\'s premium subscribers.</p>',
            ],
            'pt-BR' => [
                'title' => 'Administradores Premium - Plataforma de Ensino',
                'content' => '<p>Como o mais portal sobre administração de empresas e marketing do Brasil, o <a href="'.route('links.redirect', 'kKyxeH').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Administradores</a> tem uma média de 200 mil visitas por dia. O objetivo do projeto foi de lançar uma <a href="'.route('links.redirect', 'x81Dg8').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">plataforma de ensino</a> completamente nova para seus assinantes premium.</p>',
            ],
        ]);

        Project::query()->forceCreate([
            'begin' => '2017-03-01',
            'end' => '2017-05-31',
            'order' => 3,
            'en' => [
                'title' => 'Café Brasil - Subscription E-commerce Platform',
                'content' => '<p>Café Brasil is one of the most famous brazilian <a href="'.route('links.redirect', 'zzQGjH').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">podcasts</a>. As the first e-commerce with recurring payments I developed, the objective of this project was to launch a new premium platform for the subscribers of the podcast. The core of this project became the center of the SignUp Content <abbr title="Minimum Viable Product">MVP</abbr>.</p><p>You can see some of the contents of the premium platform accessing the <a href="'.route('links.redirect', 'hM5IcV').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">preview page</a>.</p>',
            ],
            'pt-BR' => [
                'title' => 'Café Brasil - Plataforma de Assinatura',
                'content' => '<p>Café Brasil é um dos <a href="'.route('links.redirect', 'zzQGjH').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">podcasts</a> mais ouvidos do Brasil. Sendo a primeira plataforma de pagamentos recorrentes que desenvolvi, o objetivo desse projeto era lançar uma nova plataforma premium para os ouvintes do podcast. O core desse projeto veio a se tornar a parte central do <abbr title="Minimum Viable Product">MVP</abbr> do Signup Content.</p><p>Você pode conferir alguns conteúdos da plataforma premium acessando a <a href="'.route('links.redirect', 'hM5IcV').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">página de degustação</a>.</p>',
            ],
        ]);

        Project::query()->forceCreate([
            'begin' => '2017-01-01',
            'end' => '2017-06-30',
            'order' => 4,
            'en' => [
                'title' => 'Inversa - Subscription E-commerce Platform',
                'content' => '<p>As a extension of the SignUp Content <abbr title="Minimum Viable Product">MVP</abbr>, I\'ve developed a much more complex subscription e-commerce for <a href="'.route('links.redirect', 'FetOVF').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Inversa Publicações</a>. Following a lot of specific business rules, this was the most challenging project I\'ve developed thus far.</p><p>The infrastructure was also challenging, currently there is about 20 web servers active across the globe and 4 workers to handle asynchronous tasks, such as payments, mail sending, notifications and invoicing.</p>',
            ],
            'pt-BR' => [
                'title' => 'Inversa - Plataforma de Assinatura',
                'content' => '<p>Como uma extensão do <abbr title="Minimum Viable Product">MVP</abbr> do Signup Content, eu desenvolvi uma plataforma de assinatura muito mais complexa para <a href="'.route('links.redirect', 'FetOVF').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Inversa Publicações</a>. Seguindo várias regras de negócio muito específicas, esse foi o projeto mais desafiador que desenvolvi até então</p><p>A infraestrutura também foi desafiadora, atualmente temos cerca de 20 servidores em todo o planeta e mais 4 workers para processar tarefas assíncronas, como pagamentos, envio de e-mail, notificações e geração de notas fiscais.</p>',
            ],
        ]);

        Project::query()->forceCreate([
            'begin' => '2017-08-01',
            'end' => '2017-10-31',
            'order' => 5,
            'en' => [
                'title' => 'AAA - Subscription E-commerce Platform',
                'content' => '<p>Using the SignUp Content <abbr title="Minimum Viable Product">MVP</abbr>, I\'ve developed an subscription e-commerce for a group of very influential brazilian speakers: <a href="'.route('links.redirect', '8Ewhzd').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Allan Costa</a>, <a href="'.route('links.redirect', 'YNAxI2').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Arthur Igreja</a> and <a href="'.route('links.redirect', 'NhT6jY').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Ricardo Amorim</a>, the most influential economist in Brazil (Forbes) and #1 LinkedIn Influencer.</p><p>To access the <a href="'.route('links.redirect', 'djj4Uh').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">AAA</a> content, you must subscribe to one of the personal or corporate plans. For free you can watch the <a href="'.route('links.redirect', '1TRkH2').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">launching webinar</a> replay.</p>',
            ],
            'pt-BR' => [
                'title' => 'Inversa - Plataforma de Assinatura',
                'content' => '<p>Utilizando o <abbr title="Minimum Viable Product">MVP</abbr> do SignUp Content, desenvolvi uma plataforma de assinaturas para um grupo de palestrantes: <a href="'.route('links.redirect', '8Ewhzd').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Allan Costa</a>, <a href="'.route('links.redirect', 'YNAxI2').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Arthur Igreja</a> e <a href="'.route('links.redirect', 'NhT6jY').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">Ricardo Amorim</a>, o economista mais influente do Brasil (Forbes) e #1 LinkedIn Influencer.</p><p>Para acessar o  conteúdo do <a href="'.route('links.redirect', 'djj4Uh').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">AAA</a>, você precisa assinar um dos planos pessoais ou corporativos. Gratuitamento você pode assistir a gravação do <a href="'.route('links.redirect', '1TRkH2').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">webinar de lançamento</a>.</p>',
            ],
        ]);

        Project::query()->forceCreate([
            'begin' => '2017-09-01',
            'end' => '2017-11-30',
            'order' => 6,
            'en' => [
                'title' => 'Sonne Consulting - Server Infrastructure',
                'content' => '<p>Sonne has it\'s own proprietary methodology to help it\'s clients achieve better and measurable results. I\'ve worked with them as a consultant to guide the process of enhancing the infrastructure of the company\'s web servers on <abbr title="Amazon Web Services">AWS</abbr>.</p><p>If you wish to know more about the concepts and methodologies developed by Sonne, check out their <a href="'.route('links.redirect', 'YbARaW').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">institutional website</a>.</p>',
            ],
            'pt-BR' => [
                'title' => 'Sonne Consulting - Infraestrutura de Servidores',
                'content' => '<p>A Sonne possui sua metodologia proprietária para ajudas seus clientes a atingir resultados melhores e tangíveis. Trabalhei com eles como consultor para guiar o processo de melhoria da infraestrutura dos servidores web da empresa na <abbr title="Amazon Web Services">AWS</abbr>.</p><p>Se você deseja conhecer mais sobre os conceitos e metodologias desenvolvidos pela Sonne, visite o <a href="'.route('links.redirect', 'YbARaW').'" hreflang="pt-BR" target="_blank" rel="nofollow noopener">site institucional</a>.</p>',
            ],
        ]);
    }
}
