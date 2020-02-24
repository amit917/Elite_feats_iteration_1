<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Children $children
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Children'), ['action' => 'edit', $children->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Children'), ['action' => 'delete', $children->id], ['confirm' => __('Are you sure you want to delete # {0}?', $children->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Childrens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Children'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="childrens view content">
            <h3><?= h($children->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($children->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($children->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= $children->has('module') ? $this->Html->link($children->module->module_id, ['controller' => 'Modules', 'action' => 'view', $children->module->module_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($children->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($children->Age) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
