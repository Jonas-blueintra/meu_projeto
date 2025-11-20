<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm fixed-top">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand fw-bold" href="#">Salão BellaVida</a>

            <!-- Botão Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <!-- MENU ESQUERDA -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#equipe">Equipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="#avaliacoes">Avaliações</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>

                <!-- MENU DIREITA -->
                <ul class="navbar-nav align-items-center">

                    

                    <!-- Usuário -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center"
                            href="#" role="button" data-bs-toggle="dropdown">

                            <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png"
                                width="35" height="35" class="rounded-circle me-2">

                            <span class="fw-semibold">
                                <?= $this->session->userdata('nome'); ?>
                            </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow">

                            <li class="dropdown-header">Bem vindo!</li>

                            <li><a class="dropdown-item" href="<?= base_url('cliente/perfil'); ?>"><i class="bi bi-person"></i> Perfil</a></li>

                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item text-danger" href="<?= base_url('login/logout'); ?>"><i class="bi bi-box-arrow-right"></i> Sair</a></li>

                        </ul>

                    </li>

                </ul>
            </div>

        </div>
    </nav>