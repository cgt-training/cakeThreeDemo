

<div class="row" style="margin-top: 5%;">
    <div class="col-md-3">
        <ul class="list-group   ">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $blogPost->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]
                )
            ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Blog Posts'), ['action' => 'index']) ?></li>
        </ul>
    </div>

    <div class="col-md-6 col-xs-10 col-xs-10 col-md-push-0 col-xs-push-1">
        <?= $this->Form->create($blogPost) ?>
        <fieldset>
            <legend><?= __('Edit Blog Post') ?></legend>
            <?php
                echo $this->Form->input('name',['class'=>'form-control']);
                echo $this->Form->input('description',['class'=>'form-control']);
                echo $this->Form->input('post_no',['class'=>'form-control']);
                echo $this->Form->input('flag',['class'=>'form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-4 col-xs-push-4    ','style'=>'margin-top:2%;')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>