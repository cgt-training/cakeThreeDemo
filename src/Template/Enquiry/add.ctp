<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enquiry form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Add Enquiry') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone_no');
            echo $this->Form->input('email');
            echo $this->Form->input('query');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>





<div class="row" style="margin-top: 5%;">
    <div class="col-md-2 push-left">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?></li>
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
           <?= $this->Form->button(__('Submit')) ?>
           <?= $this->Form->end() ?>
    </div>
</div>