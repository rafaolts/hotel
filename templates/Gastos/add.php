<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gasto $gasto
 * @var \Cake\Collection\CollectionInterface|string[] $funcionario
 * @var \Cake\Collection\CollectionInterface|string[] $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Gastos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="gastos form content">
            <?= $this->Form->create($gasto) ?>
            <fieldset>
                <legend><?= __('Add Gasto') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('produto_id', ['options' => $produto]);
                    echo $this->Form->control('valor_gastos');
                    echo $this->Form->control('data_gastos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
