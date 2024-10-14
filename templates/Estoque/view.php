<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estoque $estoque
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estoque'), ['action' => 'edit', $estoque->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estoque'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estoque'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estoque'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoque view content">
            <h3><?= h($estoque->tipo_operacao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $estoque->hasValue('produto') ? $this->Html->link($estoque->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $estoque->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $estoque->hasValue('funcionario') ? $this->Html->link($estoque->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $estoque->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Operacao') ?></th>
                    <td><?= h($estoque->tipo_operacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($estoque->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($estoque->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lancamento') ?></th>
                    <td><?= h($estoque->data_lancamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Baixa') ?></th>
                    <td><?= h($estoque->data_baixa) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>