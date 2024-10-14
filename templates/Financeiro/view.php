<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Financeiro $financeiro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Financeiro'), ['action' => 'edit', $financeiro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Financeiro'), ['action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Financeiro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Financeiro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="financeiro view content">
            <h3><?= h($financeiro->mes_fechamento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $financeiro->hasValue('funcionario') ? $this->Html->link($financeiro->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $financeiro->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganho') ?></th>
                    <td><?= $financeiro->hasValue('ganho') ? $this->Html->link($financeiro->ganho->id, ['controller' => 'Ganhos', 'action' => 'view', $financeiro->ganho->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gasto') ?></th>
                    <td><?= $financeiro->hasValue('gasto') ? $this->Html->link($financeiro->gasto->id, ['controller' => 'Gastos', 'action' => 'view', $financeiro->gasto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mes Fechamento') ?></th>
                    <td><?= h($financeiro->mes_fechamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= h($financeiro->ano) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($financeiro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Liquido') ?></th>
                    <td><?= $this->Number->format($financeiro->valor_liquido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lancada') ?></th>
                    <td><?= h($financeiro->data_lancada) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>