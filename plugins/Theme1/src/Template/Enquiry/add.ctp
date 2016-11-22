
<div class="row" style="margin-top: 5%;">
    <div class="col-md-2 push-left">
        <ul class="side-nav list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?></li>
         </ul>
    </div>
    <div class="col-md-6 col-xs-10 col-xs-10 col-md-push-0 col-xs-push-1">



           <?= $this->Form->create($enquiry) ?>
           <fieldset>
               <legend><?= __('Add Enquiry') ?></legend>
               <?php
                   echo $this->Form->input('name',['class'=>'form form-control']);
                   echo $this->Form->input('phone_no',['class'=>'form form-control']);
                   echo $this->Form->input('email',['class'=>'form form-control']);
                   echo $this->Form->input('query',['class'=>'form form-control']);
               ?>
           </fieldset>
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-4 col-xs-push-4    ','style'=>'margin-top:2%;')) ?>
           <?= $this->Form->end() ?>
    </div>
</div>