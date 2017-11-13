<?php

use App\Work;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Work::query()->forceCreate([
            'begin' => '2012-02-01',
            'end' => '2013-02-28',
            'order' => 1,
            'en' => [
                'job_title' => 'Internship',
                'company' => 'Mármore LTDA',
                'content' => '<p>During the internship, with the help of a coworker, I\'ve developed a software using ASP.NET, Firebird Database and Bootstrap 2, that keeps track of the production progress in all stages of the factory\'s operations. Besides that I worked giving maintenance to legacy systems.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Estágio',
                'company' => 'Mármore LTDA',
                'content' => '<p>Durante o período de estágio, com a ajuda de um colega de trabalho, Desenvolvi um software utilizando ASP.NET, Banco de Dados Firebird e Bootstrap 2, que mantem registro do progresso de produção em todos os estágios da fábrica. Além disso, eu trabalhava com a manutenção de sistemas legados.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2013-04-01',
            'end' => '2013-10-31',
            'order' => 2,
            'en' => [
                'job_title' => 'Web Developer',
                'company' => 'KKi',
                'content' => '<p>A digital agency focused on developing institutional websites and low complexity software. Worked as a full-stack developer, using PHP, Wordpress, CodeIgniter, Bootstrap 3 and jQuery.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Desenvolvedor Web',
                'company' => 'KKi',
                'content' => '<p>Uma agência digital focada em desenvolver sites institucionais e sistemas de baixa complexidade. Trabalhei como desenvolvedor full-stck, utilizando PHP, Wordpress, CodeIgniter, Bootstrap 3 e jQuery.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2013-11-01',
            'end' => '2014-04-30',
            'order' => 3,
            'en' => [
                'job_title' => 'Web Developer',
                'company' => 'DZ3',
                'content' => '<p>A digital agency focused on developing institutional websites. Worked as a full-stack developer, using PHP, Wordpress, Bootstrap 3 and jQuery.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Desenvolvedor Web',
                'company' => 'DZ3',
                'content' => '<p>Uma agência digital focada em desenvolver sites institucionais. Trabalhei como desenvolvedor full-stack, utilizando PHP, Wordpress, Bootstrap 3 e jQuery.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2014-05-01',
            'end' => '2014-12-31',
            'order' => 4,
            'en' => [
                'job_title' => 'Software Developer',
                'company' => 'Klipbox',
                'content' => '<p>Participated in an startup acceleration program by Gema Ventures in São Paulo - Brazil, launching the Klipbox product. Worked with Ruby on Rails developer for the main application and Python for the crawler. Learned a lot about entrepreneurship, digital marketing and software development.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Desenvolvedor',
                'company' => 'Klipbox',
                'content' => '<p>Participei do programa de aceleração de statups da Gema Ventures em São Paulo - Brasil, lançando o produto Klipbox. Trabalhei com Ruby on Rails para a aplicação principal e Python para o crawler. Aprendi bastante sobre empreendedorismo, marketing digital e desenvolvimento de software.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2015-02-01',
            'end' => '2015-05-31',
            'order' => 5,
            'en' => [
                'job_title' => 'Internship',
                'company' => 'Mobister',
                'content' => '<p>Worked alongside great software developers and learned how to develop scalable software using PHP with Zend Framework and PostgreSQL, and how to deploy it to the company\'s dedicated and virtual private servers.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Estágio',
                'company' => 'Mobister',
                'content' => '<p>Trabalhei ao lado de excelentes desenvolvedores e aprendi como desenvolver softwares escaláveis utilizando PHP com Zend Framework e PostgreSQL, e como subir aplicações para os servidores da empresa.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2015-06-01',
            'end' => '2015-11-31',
            'order' => 6,
            'en' => [
                'job_title' => 'Software Developer',
                'company' => 'Mobister',
                'content' => '<p>After the internship, I was hired to work as a member of the development team. Worked as a full-stack developer in several projects using the technologies learned as a intern.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Desenvolvedor',
                'company' => 'Mobister',
                'content' => '<p>Depois do estágio, eu fui contratado para a equipe de desenvolvimento. Trabalhei como desenvolvedor full-stack em muitos projetos utilizando as tecnologias que aprendi durante o estágio.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2015-12-01',
            'end' => '2016-12-31',
            'order' => 7,
            'en' => [
                'job_title' => 'Lead Software Developer',
                'company' => 'Mobister',
                'content' => '<p>Worked as lead developer for the company\'s biggest clients, leading the development team in the projects for these clients. I also helped to define the process for the company\'s new service of <abbr title="Information Technology">IT</abbr> Outsourcing.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Lider de Desenvolvedor',
                'company' => 'Mobister',
                'content' => '<p>Trabalhei como lider de desenvolvimento para as maiores contas da empresa, liderando o time de desenvolvimento nos projetos desses clientes. Também ajudei a definir o processo para o novo serviço da empresa de Outsourcing de <abbr title="Tecnologia da Informação">TI</abbr>.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2017-01-01',
            'end' => '2017-05-31',
            'order' => 8,
            'en' => [
                'job_title' => 'IT Manager',
                'company' => 'Mobister',
                'content' => '<p>After almost two years working as a full-stack developer and assuming more responsibilities within the company, I was promoted to <abbr title="Information Technology">IT</abbr> Manager, responsible for managing the Developers and <abbr title="User Experience">UX</abbr> Designers team.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Gerente de TI',
                'company' => 'Mobister',
                'content' => '<p>Depois de quase dois anos trabalhando como desenvolvedor full-stack e assumindo mais responsabilidades na empresa, eu fui promovido a Gerente de <abbr title="Tecnologia da Informação">TI</abbr>, responsável por gerenciar as equipes de Desenvolvedores e <abbr title="User Experience">UX</abbr> Designers.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2017-01-01',
            'order' => 9,
            'en' => [
                'job_title' => 'Software Developer',
                'company' => 'SignUp Content',
                'content' => '<p>As <abbr title="Information Technology">IT</abbr> Manager at Mobister, I\'ve developed the <abbr title="Minimum Viable Product">MVP</abbr> of a <abbr title="Software as a Service">SASS</abbr> platform for monetizing content through recurring payments. After validating the business model, we\'ve launched the SignUp Content startup.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Desenvolvedor',
                'company' => 'SignUp Content',
                'content' => '<p>Como Gerente de <abbr title="Tecnologia da Informação">TI</abbr> da Mobister, eu desenvolvi o <abbr title="Minimum Viable Product">MVP</abbr> de uma plataforma <abbr title="Software as a Service">SASS</abbr> para monetização de conteúdo através de pagamentos recorrentes. Após validar o modelo de negócios, nós lançamos o SignUp Content.</p>',
            ],
        ]);

        Work::query()->forceCreate([
            'begin' => '2017-06-01',
            'order' => 10,
            'en' => [
                'job_title' => 'IT Manager',
                'company' => 'Rits Tecnologia',
                'content' => '<p>Now focusing only on medium and high complexity <abbr title="Information Technology">IT</abbr> Projects, we have relaunched the Rits brand as a company of the Mobister group and are working to further strengthen the Developers and <abbr title="User Experience">UX</abbr> Designers team.</p>',
            ],
            'pt_BR' => [
                'job_title' => 'Desenvolvedor',
                'company' => 'Rits Tecnologia',
                'content' => '<p>Agora focando apenas em projetos de <abbr title="Tecnologia da Informação">TI</abbr> de média e alta complexidades, nós relançamos a marca Rits como uma empresa do grupo Mobister e estamos trabalhando para fortelecer ainda mais as equipes de Desenvolvedores e <abbr title="User Experience">UX</abbr> Designers.</p>',
            ],
        ]);
    }
}
