<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gasto> $gastos
 */
?>
<div class="gastos index content">
    <?= $this->Html->link(__('New Gasto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gastos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th><?= $this->Paginator->sort('valor_gastos') ?></th>
                    <th><?= $this->Paginator->sort('data_gastos') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gastos as $gasto): ?>
                <tr>
                    <td><?= $this->Number->format($gasto->id) ?></td>
                    <td><?= $gasto->hasValue('funcionario') ? $this->Html->link($gasto->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $gasto->funcionario->id]) : '' ?></td>
                    <td><?= $gasto->hasValue('produto') ? $this->Html->link($gasto->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $gasto->produto->id]) : '' ?></td>
                    <td><?= $this->Number->format($gasto->valor_gastos) ?></td>
                    <td><?= h($gasto->data_gastos) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gasto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gasto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gasto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gasto->id)]) ?>
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