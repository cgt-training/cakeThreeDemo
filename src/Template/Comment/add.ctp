


<div class="row" style="margin-top: 5%;">
    <div class="col-md-2 push-left">
        <ul class="side-nav list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-md-6 col-xs-10 col-xs-10 col-md-push-0 col-xs-push-1">

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
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-4 col-xs-push-4    ','style'=>'margin-top:2%;')) ?>
           <?= $this->Form->end() ?>
    </div>
</div>