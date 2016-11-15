<div class="row" style="margin-top: 3%;">
    <nav class="col-md-2" id="actions-sidebar">
        <ul class="side-nav list-group">
            <li class="heading list-group-item"><?= __('Actions') ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>

    <div class="col-md-6 col-xs-10 col-md-push-0 col-xs-push-1">
        <h3><?= h($product->name) ?></h3>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($product->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('File') ?></th>
                <td><?= h($product->file) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($product->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($product->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($product->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"> <?= __('Description') ?></h4></th>
                <td><?= $this->Text->autoParagraph(h($product->description)); ?></td>
            </tr>

    
        </table>

    </div>

</div>