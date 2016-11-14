<div class="row-fluid">
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
            <div class="block">
            <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Change Password') ?></div>
                        <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index', $user->id],['escape'=>false,'title'=>'index','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
<!-- BEGIN FORM-->
                <?= $this->Form->create($user,['class'=>'form-horizontal form-validation']) ?> 
                <fieldset>
               
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="control-group">
                    <label class="control-label" for="old_password"><?=__('Old password')?><span class="required">*</span></label>
                    <div class="controls">
                    <?= $this->Form->input('old_password',['type' => 'password' , 'class'=>'span6 m-wrap','required'=>true,'label'=>false]);?>                                                 
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password1"><?=__('New Password')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('password1',['type' => 'password' ,'class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                    ?>                               
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password2"><?=__('Confirm Password')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('password2',['type' => 'password' ,'class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                    ?>                               
                    </div>
                </div>                       
                <div class="form-actions">
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                <?= $this->Form->button(__('Reset'),['type'=>'reset','class'=>'btn']) ?>
                </div>
            </fieldset>               
                         <?= $this->Form->end() ?>
        <!-- END FORM-->
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>