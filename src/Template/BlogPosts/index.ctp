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
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('post_no') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('flag') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
          </thead>
          <tbody>
                <?php foreach ($blogPosts as $blogPost): ?>
                <tr>
                    <td><?= $this->Number->format($blogPost->id) ?></td>
                    <td><?= h($blogPost->name) ?></td>
                    <td><?= $this->Number->format($blogPost->post_no) ?></td>
                    <td><?= h($blogPost->created) ?></td>
                    <td><?= h($blogPost->modified) ?></td>
                    <td><?= h($blogPost->flag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $blogPost->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blogPost->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?>
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






