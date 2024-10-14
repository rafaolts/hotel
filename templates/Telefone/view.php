<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Telefone'), ['action' => 'edit', $telefone->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Telefone'), ['action' => 'delete', $telefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Telefone'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Telefone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefone view content">
            <h3><?= h($telefone->numero) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($telefone->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Contato') ?></th>
                    <td><?= h($telefone->tipo_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $telefone->hasValue('cliente') ? $this->Html->link($telefone->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $telefone->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $telefone->hasValue('funcionario') ? $this->Html->link($telefone->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $telefone->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>