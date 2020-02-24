<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Athlete[]|\Cake\Collection\CollectionInterface $athletes
 */
?>
<div class="athletes index content">
    <?= $this->Html->link(__('New Athlete'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Athletes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('athlete_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('sports_id') ?></th>
                    <th><?= $this->Paginator->sort('module_id') ?></th>
                    <th><?= $this->Paginator->sort('asses_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($athletes as $athlete): ?>
                <tr>
                    <td><?= $this->Number->format($athlete->athlete_id) ?></td>
                    <td><?= h($athlete->first_name) ?></td>
                    <td><?= h($athlete->last_name) ?></td>
                    <td><?= $this->Number->format($athlete->age) ?></td>
                    <td><?= $this->Number->format($athlete->phone) ?></td>
                    <td><?= h($athlete->email) ?></td>
                    <td><?= $athlete->has('sport') ? $this->Html->link($athlete->sport->Sports_id, ['controller' => 'Sports', 'action' => 'view', $athlete->sport->Sports_id]) : '' ?></td>
                    <td><?= $athlete->has('module') ? $this->Html->link($athlete->module->module_id, ['controller' => 'Modules', 'action' => 'view', $athlete->module->module_id]) : '' ?></td>
                    <td><?= $this->Number->format($athlete->asses_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $athlete->athlete_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $athlete->athlete_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $athlete->athlete_id], ['confirm' => __('Are you sure you want to delete # {0}?', $athlete->athlete_id)]) ?>
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
