<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enquiry view large-9 medium-8 columns content">
    <h3><?= h($enquiry->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($enquiry->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone No') ?></th>
            <td><?= h($enquiry->phone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($enquiry->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enquiry->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Query') ?></h4>
        <?= $this->Text->autoParagraph(h($enquiry->query)); ?>
    </div>
</div>
