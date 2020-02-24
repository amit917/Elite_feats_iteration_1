<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Athlete $athlete
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Athlete'), ['action' => 'edit', $athlete->athlete_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Athlete'), ['action' => 'delete', $athlete->athlete_id], ['confirm' => __('Are you sure you want to delete # {0}?', $athlete->athlete_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Athletes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Athlete'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="athletes view content">
            <h3><?= h($athlete->athlete_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($athlete->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($athlete->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($athlete->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sport') ?></th>
                    <td><?= $athlete->has('sport') ? $this->Html->link($athlete->sport->Sports_id, ['controller' => 'Sports', 'action' => 'view', $athlete->sport->Sports_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= $athlete->has('module') ? $this->Html->link($athlete->module->module_id, ['controller' => 'Modules', 'action' => 'view', $athlete->module->module_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Athlete Id') ?></th>
                    <td><?= $this->Number->format($athlete->athlete_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($athlete->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($athlete->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Asses Id') ?></th>
                    <td><?= $this->Number->format($athlete->asses_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
