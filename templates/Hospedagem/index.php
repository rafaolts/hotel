<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Hospedagem> $hospedagem
 */
?>
<div class="hospedagem index content">
    <?= $this->Html->link(__('New Hospedagem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hospedagem') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('reserva_id') ?></th>
                    <th><?= $this->Paginator->sort('data_hospedagem') ?></th>
                    <th><?= $this->Paginator->sort('valor_total') ?></th>
                    <th><?= $this->Paginator->sort('tipo_pagamento') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hospedagem as $hospedagem): ?>
                <tr>
                    <td><?= $this->Number->format($hospedagem->id) ?></td>
                    <td><?= $hospedagem->hasValue('funcionario') ? $this->Html->link($hospedagem->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $hospedagem->funcionario->id]) : '' ?></td>
                    <td><?= $hospedagem->hasValue('reserva') ? $this->Html->link($hospedagem->reserva->id, ['controller' => 'Reserva', 'action' => 'view', $hospedagem->reserva->id]) : '' ?></td>
                    <td><?= h($hospedagem->data_hospedagem) ?></td>
                    <td><?= $this->Number->format($hospedagem->valor_total) ?></td>
                    <td><?= h($hospedagem->tipo_pagamento) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hospedagem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hospedagem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>