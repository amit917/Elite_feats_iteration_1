<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gurdian $gurdian
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gurdian'), ['action' => 'edit', $gurdian->parent_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gurdian'), ['action' => 'delete', $gurdian->parent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gurdian->parent_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gurdians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gurdian'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gurdians view content">
            <h3><?= h($gurdian->parent_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($gurdian->First Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($gurdian->Last Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($gurdian->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Id') ?></th>
                    <td><?= $this->Number->format($gurdian->parent_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($gurdian->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Child Id') ?></th>
                    <td><?= $this->Number->format($gurdian->child_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Gurdians') ?></h4>
                <?php if (!empty($gurdian->child_gurdians)) : ?>
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
                        <?php foreach ($gurdian->child_gurdians as $childGurdians) : ?>
                        <tr>
                            <td><?= h($childGurdians->parent_id) ?></td>
                            <td><?= h($childGurdians->First Name) ?></td>
                            <td><?= h($childGurdians->Last Name) ?></td>
                            <td><?= h($childGurdians->phone) ?></td>
                            <td><?= h($childGurdians->email) ?></td>
                            <td><?= h($childGurdians->child_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Gurdians', 'action' => 'view', $childGurdians->parent_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Gurdians', 'action' => 'edit', $childGurdians->parent_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gurdians', 'action' => 'delete', $childGurdians->parent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $childGurdians->parent_id)]) ?>
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
