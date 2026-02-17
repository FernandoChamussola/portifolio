<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'nome' => 'Fernando Chamussola',
            'titulo' => 'Desenvolvedor Full Stack',
            'email' => 'fernandochamussola@gmail.com',
            'telefone' => '+258 855075735',
            'localizacao' => 'Beira, Sofala - Moçambique',
            'github' => 'https://github.com/fernandochamussola',
            'linkedin' => 'https://www.linkedin.com/in/fernando-chamussola-996087356/',
            'instagram' => 'https://www.instagram.com/fernandoandre701?igsh=MXg1MTA4azNqOHIydQ%3D%3D',

            'sobre' => 'Estudante finalista de Engenharia Informática na UniZambeze, com sólida base técnica em desenvolvimento de software, sistemas distribuídos, redes de computadores e bases de dados. Experiência prática em projetos académicos e pessoais, com foco em desenvolvimento web moderno, sistemas de gestão e integração de serviços.',

            'stacks' => [
                ['nome' => 'TypeScript', 'cor' => '#3178c6', 'icon' => 'TS'],
                ['nome' => 'JavaScript', 'cor' => '#f7df1e', 'icon' => 'JS'],
                ['nome' => 'React', 'cor' => '#61dafb', 'icon' => 'Re'],
                ['nome' => 'Next.js', 'cor' => '#ffffff', 'icon' => 'Nx'],
                ['nome' => 'Node.js', 'cor' => '#68a063', 'icon' => 'No'],
                ['nome' => 'Express', 'cor' => '#ffffff', 'icon' => 'Ex'],
                ['nome' => 'Django', 'cor' => '#092e20', 'icon' => 'Dj'],
                ['nome' => 'CodeIgniter', 'cor' => '#ee4623', 'icon' => 'CI'],
                ['nome' => 'PHP', 'cor' => '#777bb4', 'icon' => 'Ph'],
                ['nome' => 'Java', 'cor' => '#007396', 'icon' => 'Ja'],
                ['nome' => 'Python', 'cor' => '#3776ab', 'icon' => 'Py'],
                ['nome' => 'PostgreSQL', 'cor' => '#336791', 'icon' => 'Pg'],
                ['nome' => 'MySQL', 'cor' => '#4479a1', 'icon' => 'My'],
                ['nome' => 'MongoDB', 'cor' => '#47a248', 'icon' => 'Mg'],
                ['nome' => 'Git', 'cor' => '#f05032', 'icon' => 'Gt'],
                ['nome' => 'Docker', 'cor' => '#2496ed', 'icon' => 'Dk'],
            ],

            'servicos' => [
                [
                    'titulo' => 'Desenvolvimento Web',
                    'descricao' => 'Criação de sites e aplicações web modernas, responsivas e otimizadas para performance usando as melhores tecnologias do mercado.',
                    'icon' => 'code'
                ],
                [
                    'titulo' => 'Desenvolvimento Mobile',
                    'descricao' => 'Desenvolvimento de aplicativos para iOS e Android com interfaces intuitivas e experiência de usuário excepcional.',
                    'icon' => 'smartphone'
                ],
                [
                    'titulo' => 'APIs & Backend',
                    'descricao' => 'Criação de APIs RESTful robustas, integrações com serviços externos e arquitetura de sistemas escaláveis.',
                    'icon' => 'server'
                ],
                [
                    'titulo' => 'Consultoria',
                    'descricao' => 'Consultoria técnica para escolha de tecnologias, arquitetura de software e melhores práticas de desenvolvimento.',
                    'icon' => 'users'
                ],
            ],

            'projetos' => [
                [
                    'nome' => 'DebtTracker',
                    'descricao' => 'Sistema de gestão financeira para microcréditos',
                    'stack' => ['Next.js', 'Node.js', 'Express', 'PostgreSQL'],
                    'link' => 'https://systemagt.duckdns.org',
                    'em_desenvolvimento' => false
                ],
                [
                    'nome' => 'UniZambeze',
                    'descricao' => 'Site oficial da universidade (em equipe)',
                    'stack' => ['CodeIgniter 4', 'MySQL'],
                    'link' => null,
                    'em_desenvolvimento' => true
                ],
                [
                    'nome' => 'Agência AJR',
                    'descricao' => 'Site de apresentação e contratação de serviços',
                    'stack' => ['Next.js'],
                    'link' => 'https://agenciaajr.com/',
                    'em_desenvolvimento' => false
                ],
                [
                    'nome' => 'MusicMoz',
                    'descricao' => 'Plataforma para venda de músicas',
                    'stack' => ['CodeIgniter 4', 'MySQL'],
                    'link' => null,
                    'em_desenvolvimento' => true
                ],
                [
                    'nome' => 'FastBuild',
                    'descricao' => 'CLI para inicialização de projetos full-stack',
                    'stack' => ['Node.js', 'CLI'],
                    'link' => 'https://fastbuild.lovable.app/',
                    'em_desenvolvimento' => false
                ],
            ],

            'experiencias' => [
                [
                    'empresa' => 'Universidade UniZambeze',
                    'cargo' => 'Desenvolvedor',
                    'periodo' => 'Nov 2025 - Presente',
                    'descricao' => 'Desenvolvimento do site oficial da universidade em colaboração com uma equipe multidisciplinar.',
                    'atual' => true
                ],
                [
                    'empresa' => 'Agência AJR',
                    'cargo' => 'Desenvolvedor',
                    'periodo' => '2025 - 2026',
                    'descricao' => 'Desenvolvimento de sistemas internos e externos, incluindo sites institucionais e aplicações web.',
                    'atual' => false
                ],
            ],

            'formacao' => [
                'curso' => 'Licenciatura em Engenharia Informática',
                'instituicao' => 'Universidade Zambeze - UniZambeze',
                'inicio' => '2023',
                'conclusao' => '2027',
                'ano_atual' => '4º Ano'
            ]
        ];

        return view('portfolio', $data);
    }

    public function downloadCV()
    {
        return $this->response->download(FCPATH . 'cv.docx', null);
    }
}
