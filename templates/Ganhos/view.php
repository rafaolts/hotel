<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ganho $ganho
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ganho'), ['action' => 'edit', $ganho->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ganho'), ['action' => 'delete', $ganho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ganho->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ganhos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ganho'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ganhos view content">
            <h3><?= h($ganho->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hospedagem') ?></th>
                    <td><?= $ganho->hasValue('hospedagem') ? $this->Html->link($ganho->hospedagem->tipo_pagamento, ['controller' => 'Hospedagem', 'action' => 'view', $ganho->hospedagem->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ganho->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Ganho') ?></th>
                    <td><?= $this->Number->format($ganho->valor_ganho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Ganho') ?></th>
                    <td><?= h($ganho->data_ganho) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Financeiro') ?></h4>
                <?php if (!empty($ganho->financeiro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Ganho Id') ?></th>
                            <th><?= __('Gastos Id') ?></th>
                            <th><?= __('Valor Liquido') ?></th>
                            <th><?= __('Mes Fechamento') ?></th>
                            <th><?= __('Data Lancada') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ganho->financeiro as $financeiro) : ?>
                        <tr>
                            <td><?= h($financeiro->id) ?></td>
                            <td><?= h($financeiro->funcionario_id) ?></td>
                            <td><?= h($financeiro->ganho_id) ?></td>
                            <td><?= h($financeiro->gastos_id) ?></td>
                            <td><?= h($financeiro->valor_liquido) ?></td>
                            <td><?= h($financeiro->mes_fechamento) ?></td>
                            <td><?= h($financeiro->data_lancada) ?></td>
                            <td><?= h($financeiro->ano) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Financeiro', 'action' => 'view', $financeiro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Financeiro', 'action' => 'edit', $financeiro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financeiro', 'action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>