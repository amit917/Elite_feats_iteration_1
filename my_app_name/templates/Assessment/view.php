<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assessment $assessment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assessment'), ['action' => 'edit', $assessment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assessment'), ['action' => 'delete', $assessment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assessment'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assessment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessment view content">
            <h3><?= h($assessment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Assessment Name') ?></th>
                    <td><?= h($assessment->assessment_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assessment->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
