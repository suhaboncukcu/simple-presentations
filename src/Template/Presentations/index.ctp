<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presentation[]|\Cake\Collection\CollectionInterface $presentations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Presentation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Slides'), ['controller' => 'Slides', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Slide'), ['controller' => 'Slides', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="presentations index large-9 medium-8 columns content">
    <h3><?= __('Presentations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presentations as $presentation): ?>
            <tr>
                <td><?= $this->Number->format($presentation->id) ?></td>
                <td><?= h($presentation->name) ?></td>
                <td><?= h($presentation->created) ?></td>
                <td><?= h($presentation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $presentation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $presentation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $presentation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presentation->id)]) ?>
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
