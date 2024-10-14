<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quarto> $quarto
 */
?>
<div class="quarto index content">
    <?= $this->Html->link(__('New Quarto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quarto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_quarto') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('numero_camas') ?></th>
                    <th><?= $this->Paginator->sort('valor_diaria') ?></th>
                    <th><?= $this->Paginator->sort('num_quarto') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quarto as $quarto): ?>
                <tr>
                    <td><?= $this->Number->format($quarto->id) ?></td>
                    <td><?= h($quarto->tipo_quarto) ?></td>
                    <td><?= h($quarto->descricao) ?></td>
                    <td><?= $this->Number->format($quarto->numero_camas) ?></td>
                    <td><?= $this->Number->format($quarto->valor_diaria) ?></td>
                    <td><?= $this->Number->format($quarto->num_quarto) ?></td>
                    <td><?= h($quarto->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quarto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quarto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quarto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quarto->id)]) ?>
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