<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <div class="row">
    <div class="col-md-6 col-xs-10 col-md-push-4     col-xs-push-1">
    		    	
    		        <h1 align="center"><?= __('Login') ?></h1>
    		        <div class="">
    		        <?= $this->Form->input('username',['class'=>'form-control']); ?>
    		        </div>
    		        <div class="form-group">
    		        <?= $this->Form->input('password',['class'=>'form-control']); ?>
    		        </div>
    		        <?php
    		                   echo $this->Form->input('remember_me',['type'=>'checkbox','value'=>'Y'] ) 
    		?> 
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-4 col-xs-push-4    ','style'=>'margin-top:2%;')) ?>

    	</div>
    </div>
<?= $this->Form->end() ?>
</div>