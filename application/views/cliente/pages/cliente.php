<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão BellaVida - Home</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <?php $this->load->view('links_paginas/link_cliente_home') ?>
   
    <style>
      

        /* HERO */
      
    </style>
</head>

<body class="body_cliente_home">

    <!-- menu -->
   <?php $this->load->view('cliente/includes/menu'); 
   ?>


    <!-- HERO -->
    <section class="hero">
        <div>
            <h1 class="display-3 fw-bold">Realce Sua Beleza</h1>
            <p class="lead mt-3">Transformação, estilo e bem-estar em um único lugar</p>
            <a href="#servicos" class="btn btn-light btn-lg mt-4 shadow">Agendar Agora</a>
        </div>
    </section>

    <!-- SERVIÇOS -->
    <section id="servicos" class="container py-5">
        <h2 class="text-center fw-bold mb-5 fade-up">Serviços & Preços</h2>

        <!-- CARROSSEL -->
        <div id="carouselServicos" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/3993449/pexels-photo-3993449.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/3993460/pexels-photo-3993460.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/3993448/pexels-photo-3993448.jpeg" class="d-block w-100">
                </div>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-4 fade-up">
                <div class="card service-card p-3">
                    <img src="https://images.pexels.com/photos/3993449/pexels-photo-3993449.jpeg" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="fw-bold">Corte Feminino</h5>
                        <p class="text-muted">R$ 60,00</p>
                        <a class="btn btn-primary w-100">Reservar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fade-up">
                <div class="card service-card p-3">
                    <img src="https://images.pexels.com/photos/853427/pexels-photo-853427.jpeg" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="fw-bold">Escova + Hidratação</h5>
                        <p class="text-muted">R$ 90,00</p>
                        <a class="btn btn-primary w-100">Reservar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fade-up">
                <div class="card service-card p-3">
                    <img src="https://images.pexels.com/photos/3992872/pexels-photo-3992872.jpeg" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="fw-bold">Coloração</h5>
                        <p class="text-muted">R$ 150,00</p>
                        <a class="btn btn-primary w-100">Reservar</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- EQUIPE -->
    <section id="equipe" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 fade-up">Nossa Equipe</h2>

            <div class="row g-4">

                <div class="col-md-4 fade-up">
                    <div class="card text-center p-3">
                        <img src="https://images.pexels.com/photos/3992872/pexels-photo-3992872.jpeg"
                            class="rounded-circle mx-auto" style="width: 150px; height: 150px;">
                        <h5 class="mt-3">Mariana Silva</h5>
                        <p>Especialista em Corte & Cor</p>
                    </div>
                </div>

                <div class="col-md-4 fade-up">
                    <div class="card text-center p-3">
                        <img src="https://images.pexels.com/photos/3993448/pexels-photo-3993448.jpeg"
                            class="rounded-circle mx-auto" style="width: 150px; height: 150px;">
                        <h5 class="mt-3">Carla Moura</h5>
                        <p>Designer de Sobrancelhas</p>
                    </div>
                </div>

                <div class="col-md-4 fade-up">
                    <div class="card text-center p-3">
                        <img src="https://images.pexels.com/photos/3993460/pexels-photo-3993460.jpeg"
                            class="rounded-circle mx-auto" style="width: 150px; height: 150px;">
                        <h5 class="mt-3">Aline Rocha</h5>
                        <p>Maquiadora Profissional</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AVALIAÇÕES -->
    <section id="avaliacoes" class="container py-5">
        <h2 class="text-center fw-bold mb-5 fade-up">Avaliações</h2>

        <div class="row g-4">

            <div class="col-md-4 fade-up">
                <div class="card p-3">
                    <p>⭐⭐⭐⭐⭐</p>
                    Excelente atendimento! Fiquei maravilhosa!
                </div>
            </div>

            <div class="col-md-4 fade-up">
                <div class="card p-3">
                    <p>⭐⭐⭐⭐⭐</p>
                    Ótimos profissionais, recomendo demais!
                </div>
            </div>

            <div class="col-md-4 fade-up">
                <div class="card p-3">
                    <p>⭐⭐⭐⭐⭐</p>
                    Ambiente agradável e serviço impecável!
                </div>
            </div>

        </div>
    </section>

    <!-- CONTATO -->
   <?php $this->load->view('cliente/includes/footer') ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Fade efeito
        const fadeElements = document.querySelectorAll('.fade-up');
        function fadeCheck() {
            fadeElements.forEach(el => {
                if (el.getBoundingClientRect().top < window.innerHeight - 60) {
                    el.classList.add('show');
                }
            });
        }
        window.addEventListener('scroll', fadeCheck);
        fadeCheck();

        // Dark Mode
        document.getElementById('toggleDark').addEventListener('click', function () {
            document.body.classList.toggle('dark');
            let icon = this.querySelector("i");

            if (document.body.classList.contains("dark")) {
                icon.classList.replace("bi-moon-stars", "bi-brightness-high");
                this.classList.replace("btn-outline-light", "btn-light");
            } else {
                icon.classList.replace("bi-brightness-high", "bi-moon-stars");
                this.classList.replace("btn-light", "btn-outline-light");
            }
        });
    </script>

</body>

</html>
