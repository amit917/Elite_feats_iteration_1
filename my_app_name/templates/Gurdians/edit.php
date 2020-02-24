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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gurdian->parent_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gurdian->parent_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gurdians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gurdians form content">
            <?= $this->Form->create($gurdian) ?>
            <fieldset>
                <legend><?= __('Edit Gurdian') ?></legend>
                <?php
                    echo $this->Form->control('First Name');
                    echo $this->Form->control('Last Name');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('child_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
