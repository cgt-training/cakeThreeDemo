<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Blog Post'), ['action' => 'edit', $blogPost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blog Post'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blog Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blogPosts view large-9 medium-8 columns content">
    <h3><?= h($blogPost->name) ?></h3>
    <table class="vertical-table">
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
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($blogPost->description)); ?>
    </div>
</div>
