<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reserva> $reserva
 */
?>
<div class="reserva index content">
    <?= $this->Html->link(__('New Reserva'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reserva') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('quarto_id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('data_reserva') ?></th>
                    <th><?= $this->Paginator->sort('data_entrada') ?></th>
                    <th><?= $this->Paginator->sort('data_saida') ?></th>
                    <th><?= $this->Paginator->sort('pessoas') ?></th>
                    <th><?= $this->Paginator->sort('criancas') ?></th>
                    <th><?= $this->Paginator->sort('valor_reserva') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reserva as $reserva): ?>
                <tr>
                    <td><?= $this->Number->format($reserva->id) ?></td>
                    <td><?= $reserva->hasValue('cliente') ? $this->Html->link($reserva->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $reserva->cliente->id]) : '' ?></td>
                    <td><?= $reserva->hasValue('quarto') ? $this->Html->link($reserva->quarto->tipo_quarto, ['controller' => 'Quarto', 'action' => 'view', $reserva->quarto->id]) : '' ?></td>
                    <td><?= $reserva->hasValue('funcionario') ? $this->Html->link($reserva->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $reserva->funcionario->id]) : '' ?></td>
                    <td><?= h($reserva->data_reserva) ?></td>
                    <td><?= h($reserva->data_entrada) ?></td>
                    <td><?= h($reserva->data_saida) ?></td>
                    <td><?= $this->Number->format($reserva->pessoas) ?></td>
                    <td><?= $this->Number->format($reserva->criancas) ?></td>
                    <td><?= $this->Number->format($reserva->valor_reserva) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reserva->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reserva->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?>
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