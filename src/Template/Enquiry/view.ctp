<div class="row" style="margin-top: 5%;">
    

    <nav class="col-md-2" id="actions-sidebar">

        <ul class="side-nav list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
        

    <div class="col-md-6 col-xs-10 col-md-push-0 col-xs-push-1 table-responsive">
        <h3><?= h($enquiry->name) ?></h3>
        <table class="table table-striped table-hover">
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
            <tr>
                <th scope="row"> <?= __('Query') ?></h4></th>
                <td><?= $this->Text->autoParagraph(h($enquiry->query)); ?></td>
            </tr>
        </table>

    </div>

</div>
