<?php
     $this->Html->addCrumb(__('Users'),['action' => 'index']);
     $this->Html->addCrumb(__('Edit User'));
?>
<div class="row-fluid">
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
            <div class="block">
            <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Edit User') ?></div>
                        <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index', $user->id],['escape'=>false,'title'=>__('index'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;

                        <?= $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $user->id],['escape'=>false,'title'=>__('View'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                     
                        <?= $this->Form->postLink(
                        '<i class="icon-remove"></i>',
                        ['action' => 'delete', $user->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->username),'escape'=>false,'title'=>__('Delete')])
                        ?>
                        </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
<!-- BEGIN FORM-->
                <?= $this->Form->create($user,['id'=>'form_sample_1','class'=>'form-horizontal form-validation','type'=>'file']) ?>
                <fieldset>
               
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    <?= __("You have some form errors. Please check below.");?>
                </div>
                <div class="control-group">
                    <label class="control-label" for="name"><?=__('Username')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('username',['class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                    ?>                               
                    </div>
                </div>
<!--                 <div class="control-group">
                    <label class="control-label" for="name"><?=__('Password')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('password',['class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                    ?>                               
                    </div>
                </div> -->
                <div class="control-group">
                    <label class="control-label" for="description"><?=__('Profile Pic')?></label>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('image',['type'=>'file','class'=>'input-file uniform_on','required'=>false,'label'=>false,'data-required'=>1]);                    
                        ?> <br>                                  
                        <?php
                            if(!empty($user->image))
                                echo  $this->Html->image(h($user->image), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'120px']); 
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" class="post_no"><?=__('Role')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                     echo  $this->Form->input('role', [
                                'options' => ['admin' => 'Admin', 'author' => 'Author'],
                                'class' => 'chzn-select','required'=>true,'label'=>false,'data-required'=>1]);
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