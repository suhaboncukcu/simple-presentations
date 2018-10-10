<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presentation $presentation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Presentation'), ['action' => 'edit', $presentation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Presentation'), ['action' => 'delete', $presentation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presentation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Presentations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presentation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Slides'), ['controller' => 'Slides', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slide'), ['controller' => 'Slides', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="presentations view large-9 medium-8 columns content">
    <h3><?= h($presentation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($presentation->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($presentation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($presentation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($presentation->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($presentation->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Slides') ?></h4>
        <?php if (!empty($presentation->slides)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Subtitle') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('Presentation Id') ?></th>
                <th scope="col"><?= __('Template Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($presentation->slides as $slides): ?>
            <tr>
                <td><?= h($slides->id) ?></td>
                <td><?= h($slides->title) ?></td>
                <td><?= h($slides->subtitle) ?></td>
                <td><?= h($slides->description) ?></td>
                <td><?= h($slides->priority) ?></td>
                <td><?= h($slides->presentation_id) ?></td>
                <td><?= h($slides->template_id) ?></td>
                <td><?= h($slides->created) ?></td>
                <td><?= h($slides->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Slides', 'action' => 'view', $slides->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Slides', 'action' => 'edit', $slides->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Slides', 'action' => 'delete', $slides->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slides->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
