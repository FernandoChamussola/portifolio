<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio de <?= esc($nome) ?> - <?= esc($titulo) ?>">
    <title><?= esc($nome) ?> | <?= esc($titulo) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#inicio" class="nav-logo">FC<span>.</span></a>
            <button class="nav-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li><a href="#inicio" class="nav-link">Início</a></li>
                <li><a href="#sobre" class="nav-link">Sobre</a></li>
                <li><a href="#servicos" class="nav-link">Serviços</a></li>
                <li><a href="#stacks" class="nav-link">Stacks</a></li>
                <li><a href="#projetos" class="nav-link">Projetos</a></li>
                <li><a href="#experiencia" class="nav-link">Experiência</a></li>
                <li><a href="#contato" class="nav-link">Contato</a></li>
            </ul>
        </div>
    </nav>

    <!-- Header / Hero -->
    <header id="inicio" class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                Olá, eu sou <span class="typing-text" id="typed-name"></span><span class="cursor">|</span>
            </h1>
            <h2 class="hero-subtitle"><?= esc($titulo) ?></h2>
            <div class="hero-cta">
                <a href="#projetos" class="btn btn-primary">Meus Projetos</a>
                <a href="#contato" class="btn btn-secondary">Contato</a>
            </div>
        </div>
        <a href="#sobre" class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </a>
    </header>

    <!-- Sobre -->
    <section id="sobre" class="section">
        <div class="container">
            <span class="section-tag">SOBRE</span>
            <div class="sobre-header">
                <div class="sobre-image">
                    <img src="<?= base_url('profile.jpg') ?>" alt="Foto de <?= esc($nome) ?>">
                </div>
                <div class="sobre-intro">
                    <h2 class="section-title">Construo experiências digitais modernas e rápidas.</h2>
                    <p class="sobre-name"><?= esc($nome) ?> - <?= esc($titulo) ?></p>
                </div>
            </div>
            <p class="sobre-text"><?= esc($sobre) ?></p>

            <div class="sobre-cards">
                <div class="card">
                    <h3>O que eu faço</h3>
                    <p>Trabalho principalmente com <strong>Next.js</strong> e <strong>Node.js</strong>, criando aplicações completas: UI responsiva, integração com banco de dados, autenticação e deploy.</p>
                    <ul>
                        <li><span class="bullet"></span>Front-end: React/Next.js, UI com foco em UX</li>
                        <li><span class="bullet"></span>Back-end: Node/Express, Django, CodeIgniter, APIs</li>
                        <li><span class="bullet"></span>Processo: Git/GitHub, Scrum/Kanban</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Formação</h3>
                    <p><strong><?= esc($formacao['curso']) ?></strong></p>
                    <p><?= esc($formacao['instituicao']) ?></p>
                    <p class="formacao-info">
                        <span><i class="fas fa-calendar"></i> <?= esc($formacao['inicio']) ?> - <?= esc($formacao['conclusao']) ?></span>
                        <span class="badge"><?= esc($formacao['ano_atual']) ?></span>
                    </p>
                </div>
            </div>

            <div class="sobre-cta card">
                <div class="cta-text">
                    <h3>Vamos conversar?</h3>
                    <p>Me encontre nas redes ou baixe meu CV.</p>
                </div>
                <div class="cta-buttons">
                    <a href="<?= esc($linkedin) ?>" target="_blank" class="btn btn-outline">LinkedIn</a>
                    <a href="<?= esc($github) ?>" target="_blank" class="btn btn-outline">GitHub</a>
                    <a href="<?= esc($instagram) ?>" target="_blank" class="btn btn-outline">Instagram</a>
                    <a href="<?= base_url('cv.docx') ?>" download class="btn btn-primary">Meu CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="servicos" class="section section-alt">
        <div class="container">
            <h2 class="section-title center">Meus <span class="highlight-blue">Serviços</span></h2>
            <p class="section-subtitle">O que posso fazer por você</p>

            <div class="servicos-grid">
                <?php foreach ($servicos as $servico): ?>
                <div class="servico-card">
                    <div class="servico-icon">
                        <?php if ($servico['icon'] === 'code'): ?>
                            <i class="fas fa-code"></i>
                        <?php elseif ($servico['icon'] === 'smartphone'): ?>
                            <i class="fas fa-mobile-alt"></i>
                        <?php elseif ($servico['icon'] === 'server'): ?>
                            <i class="fas fa-server"></i>
                        <?php else: ?>
                            <i class="fas fa-users"></i>
                        <?php endif; ?>
                    </div>
                    <div class="servico-content">
                        <h3><?= esc($servico['titulo']) ?></h3>
                        <p><?= esc($servico['descricao']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stacks -->
    <section id="stacks" class="section">
        <div class="container">
            <h2 class="section-title center">Minhas <span class="highlight-blue">Stacks</span></h2>
            <p class="section-subtitle">Tecnologias que utilizo no meu dia a dia</p>

            <div class="stacks-grid">
                <?php foreach ($stacks as $index => $stack): ?>
                <div class="stack-card" style="--delay: <?= $index * 50 ?>ms">
                    <div class="stack-icon" style="color: <?= esc($stack['cor']) ?>"><?= esc($stack['icon']) ?></div>
                    <span class="stack-name"><?= esc($stack['nome']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projetos -->
    <section id="projetos" class="section section-alt">
        <div class="container">
            <h2 class="section-title center">Meus <span class="highlight-green">Projetos</span></h2>
            <p class="section-subtitle">Alguns dos projetos que desenvolvi ou estou desenvolvendo</p>

            <div class="projetos-grid">
                <?php foreach ($projetos as $index => $projeto): ?>
                <div class="projeto-card" style="--delay: <?= $index * 100 ?>ms">
                    <?php if ($projeto['em_desenvolvimento']): ?>
                        <span class="projeto-badge">Em desenvolvimento</span>
                    <?php endif; ?>
                    <h3 class="projeto-nome"><?= esc($projeto['nome']) ?></h3>
                    <p class="projeto-descricao"><?= esc($projeto['descricao']) ?></p>
                    <div class="projeto-stack">
                        <?php foreach ($projeto['stack'] as $tech): ?>
                            <span class="tech-tag"><?= esc($tech) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <?php if ($projeto['link']): ?>
                    <div class="projeto-links">
                        <a href="<?= esc($projeto['link']) ?>" target="_blank" class="projeto-link">
                            <i class="fas fa-external-link-alt"></i> Ver Site
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experiência -->
    <section id="experiencia" class="section">
        <div class="container">
            <h2 class="section-title center">Minha <span class="highlight-blue">Experiência</span></h2>
            <p class="section-subtitle">Trajetória profissional</p>

            <div class="timeline">
                <?php foreach ($experiencias as $index => $exp): ?>
                <div class="timeline-item <?= $index % 2 === 0 ? 'left' : 'right' ?>" style="--delay: <?= $index * 200 ?>ms">
                    <div class="timeline-dot <?= $exp['atual'] ? 'atual' : '' ?>"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div class="timeline-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div>
                                <h3><?= esc($exp['empresa']) ?></h3>
                                <p class="cargo"><?= esc($exp['cargo']) ?></p>
                            </div>
                        </div>
                        <div class="timeline-meta">
                            <span class="periodo <?= $exp['atual'] ? 'atual' : '' ?>"><?= esc($exp['periodo']) ?></span>
                            <?php if ($exp['atual']): ?>
                                <span class="badge-atual">Atual</span>
                            <?php endif; ?>
                        </div>
                        <p class="timeline-descricao"><?= esc($exp['descricao']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="section section-alt">
        <div class="container">
            <h2 class="section-title center">Entre em <span class="highlight-green">Contato</span></h2>
            <p class="section-subtitle">Vamos conversar sobre seu próximo projeto</p>

            <div class="contato-wrapper">
                <div class="contato-grid">
                    <a href="mailto:<?= esc($email) ?>" class="contato-card">
                        <div class="contato-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email</h3>
                        <p><?= esc($email) ?></p>
                    </a>
                    <a href="tel:<?= esc(str_replace(' ', '', $telefone)) ?>" class="contato-card">
                        <div class="contato-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3>Telefone</h3>
                        <p><?= esc($telefone) ?></p>
                    </a>
                    <div class="contato-card">
                        <div class="contato-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Localização</h3>
                        <p><?= esc($localizacao) ?></p>
                    </div>
                </div>

                <div class="contato-divider">
                    <span>ou</span>
                </div>

                <div class="social-links">
                    <p>Me encontre nas redes sociais</p>
                    <div class="social-icons">
                        <a href="<?= esc($linkedin) ?>" target="_blank" class="social-icon linkedin" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?= esc($github) ?>" target="_blank" class="social-icon github" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="<?= esc($instagram) ?>" target="_blank" class="social-icon instagram" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>Feito com <span class="heart">&hearts;</span> por <?= esc($nome) ?></p>
        <p class="copyright">&copy; <?= date('Y') ?> Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
