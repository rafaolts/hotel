<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estoque $estoque
 * @var \Cake\Collection\CollectionInterface|string[] $produto
 * @var \Cake\Collection\CollectionInterface|string[] $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Estoque'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoque form content">
            <?= $this->Form->create($estoque) ?>
            <fieldset>
                <legend><?= __('Add Estoque') ?></legend>
                <?php
                    echo $this->Form->control('produto_id', ['options' => $produto]);
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('data_lancamento', ['empty' => true]);
                    echo $this->Form->control('data_baixa', ['empty' => true]);
                    echo $this->Form->control('tipo_operacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
