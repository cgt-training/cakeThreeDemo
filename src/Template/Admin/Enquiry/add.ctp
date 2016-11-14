<div class="row-fluid">
    <?= $this->Flash->render() ?>
    <div class="span12" id="content">
         <!-- validation -->
        <div class="row-fluid">
             <!-- block -->
             <?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Enquiry'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __('Add Enquiry') ?></div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <!-- BEGIN FORM-->
                        <?= $this->Form->create($enquiry,['id'=>'form_sample_1','class'=>'form-horizontal form-validation']) ?>
                        <fieldset>
                            <div class="alert alert-error hide">
                                <button class="close" data-dismiss="alert"></button>
                                You have some form errors. Please check below.
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="name">Name<span class="required">*</span></label>
                                <div class="controls">
                                <?php
                                    echo $this->Form->input('name',['class'=>'span6 m-wrap','required'=>true,'label'=>false]);
                                ?>                               
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="phone_no">Phone No<span class="required">*</span></label>
                                <div class="controls">
                                    <?php
                                       echo $this->Form->input('phone_no',['class'=>'span6 m-wrap','required'=>true,'label'=>false,'number'=>true]);
                                    ?> 
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="email">Email<span class="required">*</span></label>
                                <div class="controls">
                                    <?php
                                       echo $this->Form->input('email',['class'=>'span6 m-wrap','required'=>true,'label'=>false,'email'=>true]);
                                    ?> 
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="query">Query<span class="required">*</span></label>
                                <div class="controls">
                                    <?php
                                       echo $this->Form->input('query',['class'=>'span6 m-wrap','required'=>true,'label'=>false,'data-required'=>1]);
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