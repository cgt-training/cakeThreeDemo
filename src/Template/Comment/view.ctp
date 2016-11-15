    <div class="row" style="margin-top:3%;">
    <nav class="col-md-2" id="actions-sidebar">
        <ul class="list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->pid]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->pid)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
    <div class="col-md-6 col-xs-10 col-md-push-0 col-xs-push-1">
        <h3><?= h($comment->pid) ?></h3>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="row"><?= __('U Name') ?></th>
                <td><?= h($comment->u_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('C Title') ?></th>
                <td><?= h($comment->c_title) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('S No') ?></th>
                <td><?= $this->Number->format($comment->s_no) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Pid') ?></th>
                <td><?= $this->Number->format($comment->pid) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Comment') ?></th>
                <td><?= $this->Number->format($comment->comment) ?></td>
            </tr>
        </table>
     
    </div>

</div>