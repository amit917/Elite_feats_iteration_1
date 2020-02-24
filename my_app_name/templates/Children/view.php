<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child $child
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Child'), ['action' => 'edit', $child->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Child'), ['action' => 'delete', $child->id], ['confirm' => __('Are you sure you want to delete # {0}?', $child->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Children'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Child'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="children view content">
            <h3><?= h($child->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($child->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($child->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= $child->has('module') ? $this->Html->link($child->module->module_id, ['controller' => 'Modules', 'action' => 'view', $child->module->module_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($child->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($child->Age) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Gurdians') ?></h4>
                <?php if (!empty($child->gurdians)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Child Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($child->gurdians as $gurdians) : ?>
                        <tr>
                            <td><?= h($gurdians->parent_id) ?></td>
                            <td><?= h($gurdians->First Name) ?></td>
                            <td><?= h($gurdians->Last Name) ?></td>
                            <td><?= h($gurdians->phone) ?></td>
                            <td><?= h($gurdians->email) ?></td>
                            <td><?= h($gurdians->child_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Gurdians', 'action' => 'view', $gurdians->parent_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Gurdians', 'action' => 'edit', $gurdians->parent_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gurdians', 'action' => 'delete', $gurdians->parent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gurdians->parent_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
