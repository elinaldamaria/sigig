<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Impression'), ['action' => 'edit', $impression->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Impression'), ['action' => 'delete', $impression->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impression->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Impressions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Impression'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="impressions view large-9 medium-8 columns content">
    <h3><?= h($impression->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($impression->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($impression->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solicitante') ?></th>
            <td><?= $this->Number->format($impression->solicitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arquivo') ?></th>
            <td><?= $this->Number->format($impression->arquivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Copias') ?></th>
            <td><?= $this->Number->format($impression->num_copias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($impression->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($impression->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frente Verso') ?></th>
            <td><?= $impression->frente_verso ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($impression->observacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Retorno') ?></h4>
        <?= $this->Text->autoParagraph(h($impression->retorno)); ?>
    </div>
</div>
