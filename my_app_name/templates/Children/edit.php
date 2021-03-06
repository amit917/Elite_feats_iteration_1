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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $child->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $child->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Children'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="children form content">
            <?= $this->Form->create($child) ?>
            <fieldset>
                <legend><?= __('Edit Child') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('Age');
                    echo $this->Form->control('module_id', ['options' => $modules, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
