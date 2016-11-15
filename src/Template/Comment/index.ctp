

<div class="">
    <nav class="col-md-2 col-xs-12" id="actions-sidebar" style="margin-top: 5%;">
        <ul class="side-nav">
            <li class="heading"><h4><?= __('Actions') ?></h4></li>
            <li><h4><?= $this->Html->link(__('New Blog Post'), ['action' => 'add']) ?></h4></li>
        </ul>
    </nav>
      
        <div class="table-responsive col-md-10 col-xs-12">    
                <h3><?= __('Blog Posts') ?></h3>
      
        <table class="table">
           <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('s_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('u_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comment as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->s_no) ?></td>
                <td><?= $this->Number->format($comment->pid) ?></td>
                <td><?= h($comment->u_name) ?></td>
                <td><?= h($comment->c_title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->pid)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>

        <div class="paginator col-md-12 col-xs-12 text-center">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>






