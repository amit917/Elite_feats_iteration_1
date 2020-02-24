<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gurdian[]|\Cake\Collection\CollectionInterface $gurdians
 */
?>
<div class="gurdians index content">
    <?= $this->Html->link(__('New Gurdian'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gurdians') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('First Name') ?></th>
                    <th><?= $this->Paginator->sort('Last Name') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('child_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gurdians as $gurdian): ?>
                <tr>
                    <td><?= $this->Number->format($gurdian->parent_id) ?></td>
                    <td><?= h($gurdian->First Name) ?></td>
                    <td><?= h($gurdian->Last Name) ?></td>
                    <td><?= $this->Number->format($gurdian->phone) ?></td>
                    <td><?= h($gurdian->email) ?></td>
                    <td><?= $this->Number->format($gurdian->child_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gurdian->parent_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gurdian->parent_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gurdian->parent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gurdian->parent_id)]) ?>
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
