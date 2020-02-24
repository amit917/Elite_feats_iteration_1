<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child[]|\Cake\Collection\CollectionInterface $children
 */
?>
<div class="children index content">
    <?= $this->Html->link(__('New Child'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Children') ?></h3>
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
                <?php foreach ($children as $child): ?>
                <tr>
                    <td><?= $this->Number->format($child->id) ?></td>
                    <td><?= h($child->first_name) ?></td>
                    <td><?= h($child->last_name) ?></td>
                    <td><?= $this->Number->format($child->Age) ?></td>
                    <td><?= $child->has('module') ? $this->Html->link($child->module->module_id, ['controller' => 'Modules', 'action' => 'view', $child->module->module_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $child->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $child->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $child->id], ['confirm' => __('Are you sure you want to delete # {0}?', $child->id)]) ?>
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
