<?php
     $this->Html->addCrumb('Articles',['action' => 'index']);
     $this->Html->addCrumb('View Article');
?>
<div class="row-fluid">
    <div class="span12" id="content">
        <div class="row-fluid">
            <div class="block">
                <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= h($article->title) ?></div>
                    <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index'],['escape'=>false,'title'=>__('List Article'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-plus-sign"></i>', ['action' => 'add'],['escape'=>false,'title'=>__('New Article'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $article->id],['escape'=>false,'title'=>__('Edit Article'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                        <?= $this->Form->postLink(
                        '<i class="icon-remove"></i>',
                        ['action' => 'delete', $article->id],
                        ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Article')])
                        ?>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                    <div class="table-responsive">     
                        <table class="table table-striped TableDataClass">
                            <tbody> 
                                <tr>
                                    <th scope="row"><?= __('Title') ?></th>
                                    <td><?= h($article->title) ?></td>
                                </tr>                              
                                <tr>
                                    <th scope="row"><?= __('Created') ?></th>
                                    <td><?= h($article->created) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Modified') ?></th>
                                    <td><?= h($article->modified) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Body') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($article->body)); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</div>