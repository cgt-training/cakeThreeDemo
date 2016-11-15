


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
                <th scope="col"><?= $this->Paginator->sort('phone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enquiry as $enquiry): ?>
            <tr>
                <td><?= $this->Number->format($enquiry->id) ?></td>
                <td><?= h($enquiry->name) ?></td>
                <td><?= h($enquiry->phone_no) ?></td>
                <td><?= h($enquiry->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enquiry->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
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






