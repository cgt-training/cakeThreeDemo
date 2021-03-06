<?php
     $this->Html->addCrumb(__('Products'),['action' => 'index']);
     $this->Html->addCrumb(__('Add Product'));
?>
<div class="row-fluid">
    <?= $this->Flash->render() ?>
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Add Product') ?></div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
        <!-- BEGIN FORM-->
                    <?= $this->Form->create($product,['id'=>'form_sample_1','class'=>'form-horizontal form-validation','type'=>'file']) ?>
                        <fieldset>
                            <div class="alert alert-error hide">
                                <button class="close" data-dismiss="alert"></button>
                                <?= __("You have some form errors. Please check below.");?>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="name"><?=__('name')?><span class="required">*</span></label>
                                <div class="controls">
                                <?php
                                    echo $this->Form->input('name',['class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                                ?>                               
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="description"><?=__('Description')?><span class="required">*</span></label>
                                <div class="controls">
                                    <?php
                                    echo $this->Form->input('description',['class'=>'span6 m-wrap','required'=>true,'label'=>false,'data-required'=>1]);                    
                                    ?>                                   
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="dp"><?=__('Profile Pic')?><span class="required">*</span></label>
                                <div class="controls">
                                    <?php
                                    echo $this->Form->input('dp',['type'=>'file','class'=>'input-file uniform_on','required'=>true,'label'=>false,'data-required'=>1]);                    
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