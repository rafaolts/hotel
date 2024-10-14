<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ganho> $ganhos
 */
?>
<div class="ganhos index content">
    <?= $this->Html->link(__('New Ganho'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ganhos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('hospedagem_id') ?></th>
                    <th><?= $this->Paginator->sort('valor_ganho') ?></th>
                    <th><?= $this->Paginator->sort('data_ganho') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ganhos as $ganho): ?>
                <tr>
                    <td><?= $this->Number->format($ganho->id) ?></td>
                    <td><?= $ganho->hasValue('hospedagem') ? $this->Html->link($ganho->hospedagem->tipo_pagamento, ['controller' => 'Hospedagem', 'action' => 'view', $ganho->hospedagem->id]) : '' ?></td>
                    <td><?= $this->Number->format($ganho->valor_ganho) ?></td>
                    <td><?= h($ganho->data_ganho) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ganho->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ganho->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ganho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ganho->id)]) ?>
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