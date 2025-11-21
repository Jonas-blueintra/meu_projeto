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
    <!-- <style>

body {
    background: linear-gradient(135deg, #6366f1, #ec4899, #10b981, #818cf8);
    background-size: 350% 350%;
    animation: gradientMove 14s ease infinite;
    overflow-x: hidden;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

#sidebar {
    width: 260px;
    height: 100vh;
    background: rgba(17, 24, 39, 0.75);
    backdrop-filter: blur(12px);
    position: fixed;
    left: 0;
    top: 0;
    padding: 20px 0;
    transition: 0.3s;
    border-right: 1px solid rgba(255,255,255,0.18);
    z-index: 9999;
}

#sidebar a {
    display: block;
    padding: 14px 25px;
    color: #f3f4f6;
    font-size: 15px;
    text-decoration: none;
    transition: 0.3s;
}

#sidebar a:hover {
    background: rgba(255,255,255,0.10);
    padding-left: 35px;
}

#sidebar h4 {
    color: #fff;
    text-align: center;
    margin-bottom: 30px;
}

#content {
    margin-left: 260px;
    padding: 30px;
    transition: 0.3s;
}

.card-dashboard {
    border: none;
    border-radius: 16px;
    padding: 25px;
    color: #fff;
    transition: 0.3s;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.card-dashboard:hover {
    transform: translateY(-6px);
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
#mobile-menu {
    display: none;
    background: rgba(17, 24, 39, 0.85);
    padding: 10px 15px;
    z-index: 99999;
    position: relative;
    backdrop-filter: blur(10px);
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

</style> -->

</head>

<body>

    <!-- MENU MOBILE -->
    <div id="mobile-menu">
        <button id="openMenu"><i class="bi bi-list"></i></button>
    </div>

    <!-- MENU LATERAL -->
   <?php $this->load->view('admin/includes/menu'); ?>
   

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
                        <button class="btn btn-light btn-sm" onclick="loadPage('agendamento')">Ver
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

        
        function loadPage(page) {
            fetch("<?= base_url('admin/home/page/'); ?>" + page)

        .then(response => response.text())
        .then(data => {
            document.getElementById("content").innerHTML = `
                <div id="mainPage" class="fade-in">${data}</div>
            `;
        })
        .catch(err => console.error("Erro ao carregar página:", err));
}

    </script>

</body>

</html>