<?php
     $this->Html->addCrumb(' Articles ',['action' => 'index']);
     $this->Html->addCrumb(' Add Article');
?>
<div class="row-fluid">
<?= $this->Flash->render() ?>
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Add Article') ?></div>
                </div>
                <div class="block-content collapse in">
                <div class="span12">
        <!-- BEGIN FORM-->
                <?= $this->Form->create($article,['id'=>'form_sample_1','class'=>'form-horizontal form-validation']) ?>
                <fieldset>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="control-group">
                    <label class="control-label" for="title">Title<span class="required">*</span></label>
                    <div class="controls">
                    <?php
                        echo $this->Form->input('title',['class'=>'span6 m-wrap','required'=>true,'label'=>false,'digits'=>true]);
                    ?>                               
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="body">Body<span class="required">*</span></label>
                    <div class="controls">
                        <?php
                           echo $this->Form->input('body',['class'=>'span6 m-wrap','required'=>true,'label'=>false,'data-required'=>1]);
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