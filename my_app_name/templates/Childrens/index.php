<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Children[]|\Cake\Collection\CollectionInterface $childrens
 */
?>
<div class="childrens index content">
    <?= $this->Html->link(__('New Children'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Childrens') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('Age') ?></th>
                    <th><?= $this->Paginator->sort('module_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($childrens as $children): ?>
                <tr>
                    <td><?= $this->Number->format($children->id) ?></td>
                    <td><?= h($children->first_name) ?></td>
                    <td><?= h($children->last_name) ?></td>
                    <td><?= $this->Number->format($children->Age) ?></td>
                    <td><?= $children->has('module') ? $this->Html->link($children->module->module_id, ['controller' => 'Modules', 'action' => 'view', $children->module->module_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $children->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $children->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $children->id], ['confirm' => __('Are you sure you want to delete # {0}?', $children->id)]) ?>
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
