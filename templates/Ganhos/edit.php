<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ganho $ganho
 * @var string[]|\Cake\Collection\CollectionInterface $hospedagem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ganho->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ganho->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ganhos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ganhos form content">
            <?= $this->Form->create($ganho) ?>
            <fieldset>
                <legend><?= __('Edit Ganho') ?></legend>
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
