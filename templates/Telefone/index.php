<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Telefone> $telefone
 */
?>
<div class="telefone index content">
    <?= $this->Html->link(__('New Telefone'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Telefone') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('tipo_contato') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($telefone as $telefone): ?>
                <tr>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                    <td><?= h($telefone->numero) ?></td>
                    <td><?= h($telefone->tipo_contato) ?></td>
                    <td><?= $telefone->hasValue('cliente') ? $this->Html->link($telefone->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $telefone->cliente->id]) : '' ?></td>
                    <td><?= $telefone->hasValue('funcionario') ? $this->Html->link($telefone->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $telefone->funcionario->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $telefone->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefone->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id)]) ?>
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