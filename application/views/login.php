<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Sistema</title>
  <base href="<?php echo base_url(); ?>">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body class="bg-primary bg-gradient">

  <div class="container vh-100 d-flex justify-content-center align-items-center" id="mainContainer">
    <div class="card shadow-lg border-0 rounded-4 p-2" style="width: 100%; max-width: 420px;">
      <div class="card-body p-4">

        <div class="text-center mb-4">
          <div
            class="bg-primary bg-gradient rounded-circle d-inline-flex justify-content-center align-items-center icon-glow"
            style="width: 85px; height: 85px;">
            <i class="bi bi-person-fill text-white display-5"></i>
          </div>

          <h3 class="mt-3 fw-bold">Bem-vindo</h3>
          <p class="text-muted">Faça login para continuar</p>
        </div>
        <div class="form">
          <form class="form-ajax" id="loginForm" action="<?php echo base_url('login/validar_login') ?>" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="text" id="login" name="email" class="form-control" placeholder="Digite seu e-mail">
              </div>
            </div>

            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha"
                  required>
                <button class="btn btn-outline-secondary" type="button" id="toggleSenha"><i
                    class="bi bi-eye"></i></button>
              </div>
            </div>

            <!-- BOTÃO LOGIN -->
            <div class="d-grid mb-3">
              <button type="submit" class="btn-login">
                <span class="btn-text">Entrar</span>
                <span class="btn-spinner d-none">
                  <i class="fa fa-spinner fa-spin"></i>
                </span>
              </button>

            </div>

            <!-- BOTÃO ESQUECEU SENHA -->
            <div class="d-flex gap-2">
              <div class="d-grid mb-2 ">
                <a href="<?php echo base_url('login/recuperar_senha') ?>" class="btn  btn-light text-primary   ">
                  <i class="bi bi-key"></i> Esqueceu a senha?
                </a>
              </div>

              <!-- BOTÃO CADASTRAR NOVO USUÁRIO -->
              <div class="d-grid">
                <a href="<?php echo base_url('login/primeiro_acesso'); ?>" class="btn btn-light text-primary">
                  <i class="bi bi-person-plus"></i> Primeiro Acesso
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <?php $this->load->view('links_style_login\links_js') ?>
</body>

</html>