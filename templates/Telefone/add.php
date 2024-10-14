<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 * @var \Cake\Collection\CollectionInterface|string[] $cliente
 * @var \Cake\Collection\CollectionInterface|string[] $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Telefone'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefone form content">
            <?= $this->Form->create($telefone) ?>
            <fieldset>
                <legend><?= __('Add Telefone') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('tipo_contato');
                    echo $this->Form->control('cliente_id', ['options' => $cliente, 'empty' => true]);
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
