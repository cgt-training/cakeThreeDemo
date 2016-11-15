<div class="row" style="margin-top: 2%;">
   
    <div class="col-md-6 col-md-push-3 text-center">
        <?= $this->Form->create($user) ?>
        <fieldset >
            <legend><?= __('Add User') ?></legend>
            <?php
                echo $this->Form->input('username',['class'=>'form form-control']);
                echo $this->Form->input('password',['class'=>'form form-control']);
                echo $this->Form->input('role',['class'=>'form form-control']);
                echo $this->Form->input('image',['class'=>'form form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left ','style'=>'margin-top:2%;')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>


