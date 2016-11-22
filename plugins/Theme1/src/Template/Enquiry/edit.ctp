<div class="row" style="margin-top: 5%;">
    <nav class="col-md-3" id="actions-sidebar">
        <ul class="list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $enquiry->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]
                )
            ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="col-md-6 col-xs-10 col-xs-10 col-md-push-0 col-xs-push-1">
        <?= $this->Form->create($enquiry) ?>
        <fieldset>
            <legend><?= __('Edit Enquiry') ?></legend>
            <?php
                echo $this->Form->input('name',['class'=>'form form-control']);
                echo $this->Form->input('phone_no',['class'=>'form form-control']);
                echo $this->Form->input('email',['class'=>'form form-control']);
                echo $this->Form->input('query',['class'=>'form form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-2 col-xs-push-5    ','style'=>'margin-top:2%;')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>