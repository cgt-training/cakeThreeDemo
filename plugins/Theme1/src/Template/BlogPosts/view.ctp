<div class="row" style="margin-top: 3%;color:#F00">
    <nav class="col-md-2" id="actions-sidebar">
        <ul class="list-group">
            <li class="list-group-item heading"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('Edit Blog Post'), ['action' => 'edit', $blogPost->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete Blog Post'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Blog Posts'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Blog Post'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
    <div class="col-md-6 col-xs-10 col-md-push-0 col-xs-push-1">
        <h3><?= h($blogPost->name) ?></h3>
        <table class="table table-striped table-hover table-responsive">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($blogPost->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Flag') ?></th>
                <td><?= h($blogPost->flag) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($blogPost->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Post No') ?></th>
                <td><?= $this->Number->format($blogPost->post_no) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($blogPost->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($blogPost->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Description') ?></th>
                <td><?= h($blogPost->description) ?></td>
            </tr>
        </table>

    </div>

</div>