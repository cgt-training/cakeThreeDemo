

<div class="row" style="margin-top: 5%;">
    <div class="col-md-2 push-left">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Blog Posts'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-md-10">
       <?= $this->Form->create($blogPost) ?>
       
           <legend><?= __('Add Blog Post') ?></legend>
           <?php
               echo $this->Form->input('name',['class'=>'form-control']);
               echo $this->Form->input('description',['class'=>'form-control']);
               echo $this->Form->input('post_no',['class'=>'form-control']);
               echo $this->Form->input('flag',['class'=>'form-control']);
           ?>
       
       <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left ','style'=>'margin-top:2%;')) ?>
       <?= $this->Form->end() ?>
    </div>
</div>