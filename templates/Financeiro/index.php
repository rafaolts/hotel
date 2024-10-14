<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Financeiro> $financeiro
 */
?>
<div class="financeiro index content">
    <?= $this->Html->link(__('New Financeiro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Financeiro') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('ganho_id') ?></th>
                    <th><?= $this->Paginator->sort('gastos_id') ?></th>
                    <th><?= $this->Paginator->sort('valor_liquido') ?></th>
                    <th><?= $this->Paginator->sort('mes_fechamento') ?></th>
                    <th><?= $this->Paginator->sort('data_lancada') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($financeiro as $financeiro): ?>
                <tr>
                    <td><?= $this->Number->format($financeiro->id) ?></td>
                    <td><?= $financeiro->hasValue('funcionario') ? $this->Html->link($financeiro->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $financeiro->funcionario->id]) : '' ?></td>
                    <td><?= $financeiro->hasValue('ganho') ? $this->Html->link($financeiro->ganho->id, ['controller' => 'Ganhos', 'action' => 'view', $financeiro->ganho->id]) : '' ?></td>
                    <td><?= $financeiro->hasValue('gasto') ? $this->Html->link($financeiro->gasto->id, ['controller' => 'Gastos', 'action' => 'view', $financeiro->gasto->id]) : '' ?></td>
                    <td><?= $this->Number->format($financeiro->valor_liquido) ?></td>
                    <td><?= h($financeiro->mes_fechamento) ?></td>
                    <td><?= h($financeiro->data_lancada) ?></td>
                    <td><?= h($financeiro->ano) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $financeiro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $financeiro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id)]) ?>
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