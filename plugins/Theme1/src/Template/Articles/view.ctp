
<div class="row" style="margin-top: 5%;">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item heading"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
        </ul>
    </div>

    <div class="col-md-6 col-xs-10 col-md-push-0 col-xs-push-1">
        <h3><?= h($article->title) ?></h3>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($article->title) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($article->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($article->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($article->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Body') ?></th>
                <td><?= h($article->body) ?></td>
            </tr>
        </table>
    
    </div>
</div>