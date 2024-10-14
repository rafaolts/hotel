<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Servico> $servico
 */
?>
<div class="servico index content">
    <?= $this->Html->link(__('New Servico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Servico') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_servico') ?></th>
                    <th><?= $this->Paginator->sort('valor_servico') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servico as $servico): ?>
                <tr>
                    <td><?= $this->Number->format($servico->id) ?></td>
                    <td><?= h($servico->tipo_servico) ?></td>
                    <td><?= $this->Number->format($servico->valor_servico) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $servico->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servico->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id)]) ?>
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