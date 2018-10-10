<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presentation[] $presentations
 */
?>


<table class="vertical-table">
    <?php foreach($presentations as $presentation): ?>
        <tr>
            <th>
                <?=$this->Html->link(h($presentation->name), [
                        'controller' => 'Presentations',
                        'action' => 'display',
                        'id' => $presentation->id,
                        'plugin' => null
                ], ['target' => '_blank'])?>
            </th>
            <td>
                <table>
                    <?php foreach ($presentation->slides as $slide): ?>
                        <tr>
                            <td>
                                <?=$slide->title?>
                            </td>
                            <td>
                                <?=$slide->subtitle?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    <?php endforeach; ?>
</table>