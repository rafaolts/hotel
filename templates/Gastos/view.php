<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gasto $gasto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gasto'), ['action' => 'edit', $gasto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gasto'), ['action' => 'delete', $gasto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gasto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gastos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gasto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="gastos view content">
            <h3><?= h($gasto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $gasto->hasValue('funcionario') ? $this->Html->link($gasto->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $gasto->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $gasto->hasValue('produto') ? $this->Html->link($gasto->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $gasto->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gasto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Gastos') ?></th>
                    <td><?= $this->Number->format($gasto->valor_gastos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Gastos') ?></th>
                    <td><?= h($gasto->data_gastos) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>