<div id="sidebar">
    <div style="text-align:center; ">

        <a href="<?= base_url('admin/perfil') ?>" style="text-decoration:none;">
            <img src="<?= $this->session->userdata('foto') ?>" 
                width="70" height="70" 
                class="rounded-circle mb-2" 
                style="object-fit:cover; border:3px solid #fff; cursor:pointer;">
                <h4 style="color:#fff; font-size:17px;">
            Olá <?= $this->session->userdata('nome'); ?>
        </h4>
        </a>
    </div>

    <a href="#" onclick="loadPage('dashboard')"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="#" onclick="loadPage('servicos')"><i class="bi bi-scissors"></i> Serviços</a>
    <a href="#" onclick="loadPage('agendamento')"><i class="bi bi-calendar-check"></i> Agendamentos</a>
    <a href="#" onclick="loadPage('clientes')"><i class="bi bi-people"></i> Clientes</a>
    <a href="#" onclick="loadPage('configuracao')"><i class="bi bi-gear"></i> Configurações</a>
    <a href="<?= base_url('Login/logout') ?>"><i class="bi bi-box-arrow-right"></i> Sair</a>
</div>
