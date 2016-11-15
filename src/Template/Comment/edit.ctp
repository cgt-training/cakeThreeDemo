    <div class="row" style="margin-top: 3%;">
    <nav class="col-md-3" id="actions-sidebar">
        <ul class="list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $comment->pid],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $comment->pid)]
                )
            ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="col-md-6 col-xs-10 col-xs-10 col-md-push-0 col-xs-push-1">
        <?= $this->Form->create($comment) ?>
        <fieldset>
            <legend><?= __('Edit Comment') ?></legend>
            <?php
                echo $this->Form->input('s_no',['class'=>'form form-control']);
                echo $this->Form->input('u_name',['class'=>'form form-control']);
                echo $this->Form->input('c_title',['class'=>'form form-control']);
                echo $this->Form->input('comment',['class'=>'form form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-4 col-xs-push-4    ','style'=>'margin-top:2%;')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>