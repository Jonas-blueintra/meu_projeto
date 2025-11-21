<div class="servicos-container">
    <h3 class="mb-4 fade-in">Gerenciar Serviços</h3>

    <button class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Novo Serviço
    </button>

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
            <?php $result = $this->Servicos_model->todos_servicos();
            $Arrays_servicos['servicos'] = $result->data;
            ?>
            <tbody>
                <?php foreach ($Arrays_servicos as $array_1_servico):
                    foreach ($array_1_servico as $s):
                        ?>
                        <tr>
                            <td><?= $s->nome ?></td>
                            <td>R$ <?= number_format($s->valor, 2, ',', '.') ?></td>
                            <td><?= $s->duracao ?? '--' ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                    <?php endforeach; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>