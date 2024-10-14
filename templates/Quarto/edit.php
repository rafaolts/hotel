<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quarto $quarto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quarto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quarto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Quarto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="quarto form content">
            <?= $this->Form->create($quarto) ?>
            <fieldset>
                <legend><?= __('Edit Quarto') ?></legend>
                <?php
                    echo $this->Form->control('tipo_quarto');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('numero_camas');
                    echo $this->Form->control('valor_diaria');
                    echo $this->Form->control('num_quarto');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
