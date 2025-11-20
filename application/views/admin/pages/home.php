<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Salão</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f6f7fb;
            overflow-x: hidden;
        }

        /* MENU LATERAL */
        #sidebar {
            width: 260px;
            height: 100vh;
            background: #111827;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px 0;
            transition: 0.3s;
            z-index: 9999;
        }

        #sidebar a {
            display: block;
            padding: 14px 25px;
            color: #e5e7eb;
            font-size: 15px;
            text-decoration: none;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background: #1f2937;
            padding-left: 35px;
        }

        #sidebar h4 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        /* CONTEÚDO */
        #content {
            margin-left: 260px;
            padding: 30px;
            transition: 0.3s;
        }

        /* CARDS */
        .card-dashboard {
            border: none;
            border-radius: 15px;
            padding: 25px;
            color: #fff;
            transition: 0.3s;
        }

        .card-dashboard:hover {
            transform: translateY(-5px);
        }

        .bg1 {
            background: linear-gradient(135deg, #6366f1, #818cf8);
        }

        .bg2 {
            background: linear-gradient(135deg, #ec4899, #f472b6);
        }

        .bg3 {
            background: linear-gradient(135deg, #10b981, #34d399);
        }

        /* ANIMAÇÃO */
        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* MENU MOBILE */
        #mobile-menu {
            display: none;
            background: #111827;
            padding: 10px 15px;
            z-index: 99999;
            /* Opcional mas recomendado */
            position: relative;
        }

        #mobile-menu button {
            background: none;
            border: none;
            color: #fff;
            font-size: 26px;
        }

        @media(max-width: 768px) {
            #sidebar {
                left: -260px;
            }

            #sidebar.active {
                left: 0;
            }

            #content {
                margin-left: 0;
            }

            #mobile-menu {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- MENU MOBILE -->
    <div id="mobile-menu">
        <button id="openMenu"><i class="bi bi-list"></i></button>
    </div>

    <!-- MENU LATERAL -->
    <div id="sidebar">
        <h4>Admin Salão</h4>
        <a href="#" onclick="loadPage('dashboard')"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="#" onclick="loadPage('servicos')"><i class="bi bi-scissors"></i> Serviços</a>
        <a href="#" onclick="loadPage('agendamentos')"><i class="bi bi-calendar-check"></i> Agendamentos</a>
        <a href="#" onclick="loadPage('clientes')"><i class="bi bi-people"></i> Clientes</a>
        <a href="#" onclick="loadPage('config')"><i class="bi bi-gear"></i> Configurações</a>
        <a href="#"><i class="bi bi-box-arrow-right"></i> Sair</a>
    </div>

    <!-- CONTEÚDO -->
    <div id="content">

        <div id="mainPage" class="fade-in">
            <h2 class="mb-4">Bem-vindo, Administrador!</h2>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card-dashboard bg1 fade-in">
                        <h4>Serviços</h4>
                        <p>Gerencie cortes, tinturas, manicure e mais.</p>
                        <button class="btn btn-light btn-sm" onclick="loadPage('servicos')">Gerenciar</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-dashboard bg2 fade-in">
                        <h4>Agendamentos</h4>
                        <p>Confirme e visualize horários marcados.</p>
                        <button class="btn btn-light btn-sm" onclick="loadPage('agendamentos')">Ver
                            agendamentos</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-dashboard bg3 fade-in">
                        <h4>Clientes</h4>
                        <p>Histórico, cadastro e preferências.</p>
                        <button class="btn btn-light btn-sm" onclick="loadPage('clientes')">Ver clientes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const openMenu = document.getElementById("openMenu");

        openMenu.addEventListener("click", () => {
            sidebar.classList.toggle("active");
        });

        // Carregar páginas internas sem recarregar o site
        function loadPage(page) {
            let html = "";

            switch (page) {

                case "servicos":
                    html = `
                    <h3 class="mb-4 fade-in">Gerenciar Serviços</h3>
                    <button class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Novo Serviço</button>

                    <div class="table-responsive fade-in">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Serviço</th>
                                    <th>Preço</th>
                                    <th>Duração</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Corte Feminino</td>
                                    <td>R$ 45,00</td>
                                    <td>40 min</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Editar</button>
                                        <button class="btn btn-danger btn-sm">Excluir</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manicure</td>
                                    <td>R$ 25,00</td>
                                    <td>25 min</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Editar</button>
                                        <button class="btn btn-danger btn-sm">Excluir</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `;
                    break;

                case "agendamentos":
                    html = `
                    <h3 class="mb-4 fade-in">Agendamentos</h3>

                    <div class="table-responsive fade-in">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Serviço</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ana Souza</td>
                                    <td>Escova</td>
                                    <td>20/11/2025 - 15:00</td>
                                    <td><span class="badge bg-warning">Pendente</span></td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Confirmar</button>
                                        <button class="btn btn-danger btn-sm">Cancelar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>João Silva</td>
                                    <td>Corte Masculino</td>
                                    <td>21/11/2025 - 14:00</td>
                                    <td><span class="badge bg-success">Confirmado</span></td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm">Detalhes</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `;
                    break;

                case "clientes":
                    html = `
                    <h3 class="mb-4 fade-in">Clientes</h3>

                    <div class="table-responsive fade-in">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Último Serviço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aline Fernandes</td>
                                    <td>(11) 99822-1234</td>
                                    <td>Corte + Escova</td>
                                </tr>
                                <tr>
                                    <td>Bruno Santos</td>
                                    <td>(11) 99213-4432</td>
                                    <td>Barba</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `;
                    break;

                case "config":
                    html = `
                    <h3 class="mb-4 fade-in">Configurações</h3>
                    <p class="fade-in">Configurações gerais do salão, horários, usuários e mais.</p>
                `;
                    break;

                default:
                    html = document.getElementById("mainPage").innerHTML;
            }

            document.getElementById("content").innerHTML = `<div id="mainPage">${html}</div>`;
        }
    </script>

</body>

</html>