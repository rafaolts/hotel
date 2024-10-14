<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 * @var string[]|\Cake\Collection\CollectionInterface $cliente
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $telefone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Telefone'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefone form content">
            <?= $this->Form->create($telefone) ?>
            <fieldset>
                <legend><?= __('Edit Telefone') ?></legend>
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
