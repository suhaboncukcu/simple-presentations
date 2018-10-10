<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presentation $presentation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Presentations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Slides'), ['controller' => 'Slides', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Slide'), ['controller' => 'Slides', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="presentations form large-9 medium-8 columns content">
    <?= $this->Form->create($presentation) ?>
    <fieldset>
        <legend><?= __('Add Presentation') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
