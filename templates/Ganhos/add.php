<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ganho $ganho
 * @var \Cake\Collection\CollectionInterface|string[] $hospedagem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ganhos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ganhos form content">
            <?= $this->Form->create($ganho) ?>
            <fieldset>
                <legend><?= __('Add Ganho') ?></legend>
                <?php
                    echo $this->Form->control('hospedagem_id', ['options' => $hospedagem]);
                    echo $this->Form->control('valor_ganho');
                    echo $this->Form->control('data_ganho');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
