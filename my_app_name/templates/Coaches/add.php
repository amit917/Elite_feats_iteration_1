<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Coaches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coaches form content">
            <?= $this->Form->create($coach) ?>
            <fieldset>
                <legend><?= __('Add Coach') ?></legend>
                <?php
                    echo $this->Form->control('First name');
                    echo $this->Form->control('Last name');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('Email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
