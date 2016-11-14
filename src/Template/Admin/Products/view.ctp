<?php
     $this->Html->addCrumb('Products',['action' => 'index']);
     $this->Html->addCrumb('View Product');
?>
<div class="row-fluid">
    <div class="span12" id="content">
        <div class="row-fluid">
            <div class="block">
                <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= h($product->name) ?></div>
                    <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index'],['escape'=>false,'title'=>__('List Products'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-plus-sign"></i>', ['action' => 'add'],['escape'=>false,'title'=>__('New Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $product->id],['escape'=>false,'title'=>__('Edit Product'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                        <?= $this->Form->postLink(
                        '<i class="icon-remove"></i>',
                        ['action' => 'delete', $product->id],
                        ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Product')])
                        ?>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped table-bordered">
                            <tbody> 
                                <tr>
                                    <th scope="row"><?= __('Name') ?></th>
                                    <td><?= h($product->name) ?></td>
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
                                    <th scope="row"><?= __('Dp') ?></th>
                                    <td>
                                    <?php
                                    if(!empty($product->file))
                                        echo  $this->Html->image(h($product->file), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'120px']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Description') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($product->description)); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</div>