
<div class="row" style="margin-top: 5%;">
    <div class="col-md-2 push-left">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-md-10">
        <?= $this->Form->create($article) ?>
        
            <legend><?= __('Add Article') ?></legend>
            <?php
                echo $this->Form->input('title',['class'=>'form-control']);
                echo $this->Form->input('body',['class'=>'form-control']);
            ?>
                <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left ','style'=>'margin-top:2%;')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>