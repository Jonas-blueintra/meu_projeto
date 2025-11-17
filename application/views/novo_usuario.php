<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de Usuário</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">


  <?php $this->load->view('links_style\links_css') ?>
</head>

<body class="body_usuario">

  <div class="card shadow p-4" style="max-width: 550px; width: 100%;">
    <h3 class="text-center mb-3 text-primary"><i class="bi bi-person-plus"></i> Cadastro de Usuário</h3>
    <p class="text-center text-muted mb-4">Preencha os dados abaixo para criar seu acesso.</p>

    <form>

      <!-- NOME -->
      <div class="mb-3">
        <label class="form-label">Nome completo</label>
        <input type="text" class="form-control" placeholder="Digite seu nome">
      </div>

      <!-- EMAIL -->
      <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" placeholder="Digite seu e-mail">
      </div>

      <!-- LOGIN -->
      <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" class="form-control" placeholder="Escolha um login">
      </div>

      <!-- SENHA -->
      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" placeholder="Digite sua senha">
      </div>

      <!-- FOTO -->
      <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" class="form-control">
      </div>

      <!-- SEXO -->
      <div class="mb-3">
        <label class="form-label">Sexo</label>
        <select class="form-select">
          <option value="">Selecione</option>
          <option value="m">Masculino</option>
          <option value="f">Feminino</option>
        </select>
      </div>

      <!-- TELEFONE -->
      <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" placeholder="(00) 00000-0000">
      </div>

      <!-- ENDEREÇO -->
      <div class="mb-3">
        <label class="form-label">Endereço</label>
        <input type="text" class="form-control" placeholder="Rua, número, bairro...">
      </div>

      <!-- BOTÃO -->
      <button class="btn btn-primary w-100 py-2">
        <i class="bi bi-check-circle"></i> Cadastrar
      </button>

    </form>

    <div class="text-center mt-3">
      <a href="<?php echo base_url('home') ?>" class="text-primary">Já tem conta? Fazer login</a>
    </div>

  </div>

</body>
</html>
