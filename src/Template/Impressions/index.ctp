<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Impression'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="impressions index large-9 medium-8 columns content">
    <h3><?= __('Impressions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solicitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arquivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_copias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frente_verso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($impressions as $impression): ?>
            <tr>
                <td><?= $this->Number->format($impression->id) ?></td>
                <td><?= $this->Number->format($impression->solicitante) ?></td>
                <td><?= $this->Number->format($impression->arquivo) ?></td>
                <td><?= $this->Number->format($impression->num_copias) ?></td>
                <td><?= h($impression->frente_verso) ?></td>
                <td><?= h($impression->status) ?></td>
                <td><?= h($impression->created) ?></td>
                <td><?= h($impression->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $impression->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $impression->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $impression->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impression->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
