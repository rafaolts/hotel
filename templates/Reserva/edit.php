<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserva $reserva
 * @var string[]|\Cake\Collection\CollectionInterface $cliente
 * @var string[]|\Cake\Collection\CollectionInterface $quarto
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reserva->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reserva'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reserva form content">
            <?= $this->Form->create($reserva) ?>
            <fieldset>
                <legend><?= __('Edit Reserva') ?></legend>
                <?php
                    echo $this->Form->control('cliente_id', ['options' => $cliente]);
                    echo $this->Form->control('quarto_id', ['options' => $quarto]);
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario, 'empty' => true]);
                    echo $this->Form->control('data_reserva');
                    echo $this->Form->control('data_entrada');
                    echo $this->Form->control('data_saida');
                    echo $this->Form->control('pessoas');
                    echo $this->Form->control('criancas');
                    echo $this->Form->control('valor_reserva');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
