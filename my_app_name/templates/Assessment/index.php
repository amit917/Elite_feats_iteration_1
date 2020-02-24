<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assessment[]|\Cake\Collection\CollectionInterface $assessment
 */
?>
<div class="assessment index content">
    <?= $this->Html->link(__('New Assessment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Assessment') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('assessment_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assessment as $assessment): ?>
                <tr>
                    <td><?= $this->Number->format($assessment->id) ?></td>
                    <td><?= h($assessment->assessment_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $assessment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assessment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assessment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessment->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
