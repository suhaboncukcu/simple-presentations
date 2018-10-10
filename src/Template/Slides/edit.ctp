<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slide $slide
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $slide->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Presentations'), ['controller' => 'Presentations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Presentation'), ['controller' => 'Presentations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Templates'), ['controller' => 'Templates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template'), ['controller' => 'Templates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="slides form large-9 medium-8 columns content">
    <?= $this->Form->create($slide) ?>
    <fieldset>
        <legend><?= __('Edit Slide') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('description');
            echo $this->Form->control('priority');
            echo $this->Form->control('presentation_id', ['options' => $presentations]);
            echo $this->Form->control('template_id', ['options' => $templates]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
