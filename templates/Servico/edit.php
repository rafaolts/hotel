<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico $servico
 * @var string[]|\Cake\Collection\CollectionInterface $hospedagem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Servico'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="servico form content">
            <?= $this->Form->create($servico) ?>
            <fieldset>
                <legend><?= __('Edit Servico') ?></legend>
                <?php
                    echo $this->Form->control('tipo_servico');
                    echo $this->Form->control('valor_servico');
                    echo $this->Form->control('hospedagem._ids', ['options' => $hospedagem]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
