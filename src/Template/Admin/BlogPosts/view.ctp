<div class="row-fluid">
    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="block">
                <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= h($blogPost->name) ?></div>
                    <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index'],['escape'=>false,'title'=>__('List Blog Post'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-plus-sign"></i>', ['action' => 'add'],['escape'=>false,'title'=>__('New Blog Post'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>__('Edit Blog Post'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                        <?= $this->Form->postLink(
                        '<i class="icon-remove"></i>',
                        ['action' => 'delete', $blogPost->id],
                        ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Blog Post')])
                        ?>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped table-bordered TableDataClass">
                            <tbody> 
                                <tr>
                                    <th scope="row"><?= __('Name') ?></th>
                                    <td><?= h($blogPost->name) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Flag') ?></th>
                                    <td><?= h($blogPost->flag) ?></td>
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
                                <tr>
                                    <th scope="row"><?= __('Description') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($blogPost->description)); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</div>