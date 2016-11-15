


<div class="row" style="margin-top: 5%;">
    <div class="col-md-2 push-left">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-md-10">

       <?= $this->Form->create($comment) ?>
           <fieldset>
               <legend><?= __('Add Comment') ?></legend>
               <?php
                   echo $this->Form->input('s_no',['class'=>'form form-control']);
                   echo $this->Form->input('u_name',['class'=>'form-control']);
                   echo $this->Form->input('c_title',['class'=>'form-control']);
                   echo $this->Form->input('comment',['class'=>'form-control']);
               ?>
           </fieldset>
           <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left ','style'=>'margin-top:2%;')) ?>
           <?= $this->Form->end() ?>
    </div>
</div>