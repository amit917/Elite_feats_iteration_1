<?php ?>
<div class = "index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class = "panel">
        <h2 class = "text-center">Register</h2>
        <?= $this->Form->create($user);?>
        <label for="male">Account Type </label>
         <?= $this->Form->select('role',
            ['Athlete', 'Coach', 'Parent'],

            [

                'multiple' => false,
                'value' => [1]
            ]);?>
        <?= $this->Form->control('first_name');?>
        <?= $this->Form->control('last_name');?>
        <?= $this->Form->control('email');?>
        <?= $this->Form->control('username');?>
        <?= $this->Form->control('password', array('type'=>'password'));?>
        <?= $this->Form->submit('Register', array('class'=>'button'));?>
        <?= $this->Form->end();?>


    </div>





</div>

