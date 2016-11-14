<div class="row-fluid">
<?= $this->Flash->render() ?>
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
             <!-- block -->
             <?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Users'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Add User') ?></div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($user,['id'=>'form_sample_1','class'=>'form-horizontal form-validation','type'=>'file']) ?>
            <fieldset>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="control-group">
                    <label class="control-label" for="name"><?=__('Username')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('username',['class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                    ?>                               
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="name"><?=__('Password')?><span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('password',['class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                    ?>                               
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="description"><?=__('Profile Pic')?><span class="required">*</span></label>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('image',['type'=>'file','class'=>'input-file uniform_on','required'=>true,'label'=>false,'data-required'=>1]);                    
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