<div style="margin-top: 5%;">
    <nav class="col-md-3" id="actions-sidebar">
        <ul class="side-nav list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $user->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
                )
            ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
        </ul>
    </nav>
        <div class="col-md-6 col-xs-10 col-xs-10 col-md-push-0 col-xs-push-1">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Edit User') ?></legend>
            <?php
                echo $this->Form->input('username',['class'=>'form-control']);
                echo $this->Form->input('password',['class'=>'form-control']);
                echo $this->Form->input('role',['class'=>'form-control']);
                echo $this->Form->input('image',['class'=>'form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary left col-md-2 col-md-push-0 col-xs-4 col-xs-push-4    ','style'=>'margin-top:2%;')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>