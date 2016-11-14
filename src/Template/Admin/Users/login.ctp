<div class="users form">
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <div class="form-group">
        <?= $this->Form->input('username',['class'=>'form-control']); ?>
        </div>
        <div class="form-group">
        <?= $this->Form->input('password',['class'=>'form-control']); ?>
        </div>
         
        <?=  $this->Form->input('remember_me', ['type' => 'checkbox','value'=>'Y','hiddenField' => false]); ?>
        <? echo $this->Form->button(__('Login'),['class'=>'btn btn-primary btn-lg btn-block']);?>
        
    </fieldset>
 
<?= $this->Form->end() ?>
</div>