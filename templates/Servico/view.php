<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico $servico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Servico'), ['action' => 'edit', $servico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Servico'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Servico'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Servico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="servico view content">
            <h3><?= h($servico->tipo_servico) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Servico') ?></th>
                    <td><?= h($servico->tipo_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($servico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Servico') ?></th>
                    <td><?= $this->Number->format($servico->valor_servico) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Hospedagem') ?></h4>
                <?php if (!empty($servico->hospedagem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Reserva Id') ?></th>
                            <th><?= __('Data Hospedagem') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Tipo Pagamento') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($servico->hospedagem as $hospedagem) : ?>
                        <tr>
                            <td><?= h($hospedagem->id) ?></td>
                            <td><?= h($hospedagem->funcionario_id) ?></td>
                            <td><?= h($hospedagem->reserva_id) ?></td>
                            <td><?= h($hospedagem->data_hospedagem) ?></td>
                            <td><?= h($hospedagem->valor_total) ?></td>
                            <td><?= h($hospedagem->tipo_pagamento) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Hospedagem', 'action' => 'view', $hospedagem->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Hospedagem', 'action' => 'edit', $hospedagem->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hospedagem', 'action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id)]) ?>
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