<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $impression->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $impression->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Impressions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="impressions form large-9 medium-8 columns content">
    <?= $this->Form->create($impression) ?>
    <fieldset>
        <legend><?= __('Edit Impression') ?></legend>
        <?php
            echo $this->Form->control('solicitante');
            echo $this->Form->control('arquivo');
            echo $this->Form->control('num_copias');
            echo $this->Form->control('frente_verso');
            echo $this->Form->control('observacao');
            echo $this->Form->control('status');
            echo $this->Form->control('retorno');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
