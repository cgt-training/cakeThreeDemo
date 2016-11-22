<div class="row" style="margin-top: 5%">
    <nav class="col-md-2" id="actions-sidebar">
        <ul class="side-nav list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        </ul>
    </nav>

    <div class="col-md-6 col-xs-10 col-md-push-0 col-xs-push-1 table-responsive">
        <h3><?= h($user->username)?></h3>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="row"><?= __('Username') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= h($user->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Image') ?></th>
                <td><?= h($user->image) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($user->modified) ?></td>
            </tr>
        </table>

    </div>
</div>