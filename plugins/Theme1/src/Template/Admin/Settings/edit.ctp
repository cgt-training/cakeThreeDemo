<?php
     $this->Html->addCrumb(__('Settings'),['action' => 'index']);
     $this->Html->addCrumb(__('Edit Setting'));
?>
<div class="row-fluid">
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
            <div class="block">
            <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Edit Settings') ?></div>
                        <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index', $setting->id],['escape'=>false,'title'=>__('index'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $setting->id],['escape'=>false,'title'=>__('View'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;                     
                        </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
<!-- BEGIN FORM-->
                        <?= $this->Form->create($setting,['id'=>'form_sample_1','class'=>'form-horizontal form-validation']) ?>
                                <fieldset>
                                    <div class="alert alert-error hide">
                                        <button class="close" data-dismiss="alert"></button>
                                        <?= __("You have some form errors. Please check below.");?>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="layout_name"><?=__("layout_name");?><span class="required">*</span></label>
                                        <div class="controls">
                                        <?php
                                        echo $this->Form->input('layout_name',[
                                            'options' => ['layoutFirst' => 'layoutFirst', 'layoutSecond' => 'layoutSecond'],
                                            'class' => 'chzn-select','required'=>true,'label'=>false
                                            ]);
                                        ?>                               
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="language"><?=__("language");?><span class="required">*</span></label>
                                        <div class="controls">
                                            <?php
                                        echo $this->Form->input('language',[
                                            'options' => ['en_US' => 'en_US', 'en_HN' => 'en_HN'],
                                            'class' => 'chzn-select','required'=>true,'label'=>false
                                            ]);
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