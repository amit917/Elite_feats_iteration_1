<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coach'), ['action' => 'edit', $coach->coach_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coach'), ['action' => 'delete', $coach->coach_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->coach_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coaches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coach'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coaches view content">
            <h3><?= h($coach->coach_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($coach->First name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($coach->Last name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($coach->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coach Id') ?></th>
                    <td><?= $this->Number->format($coach->coach_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($coach->phone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
