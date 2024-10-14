<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Financeiro $financeiro
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 * @var string[]|\Cake\Collection\CollectionInterface $ganhos
 * @var string[]|\Cake\Collection\CollectionInterface $gastos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $financeiro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Financeiro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="financeiro form content">
            <?= $this->Form->create($financeiro) ?>
            <fieldset>
                <legend><?= __('Edit Financeiro') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('ganho_id', ['options' => $ganhos]);
                    echo $this->Form->control('gastos_id', ['options' => $gastos]);
                    echo $this->Form->control('valor_liquido');
                    echo $this->Form->control('mes_fechamento');
                    echo $this->Form->control('data_lancada');
                    echo $this->Form->control('ano');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
