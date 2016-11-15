<?php
     $this->Html->addCrumb('Enquiry',['action' => 'index']);
     $this->Html->addCrumb('View Enquiry');
?>
<div class="row-fluid">
    <div class="span12" id="content">
        <div class="row-fluid">
            <div class="block">
                <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= h($enquiry->title) ?></div>
                    <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index'],['escape'=>false,'title'=>__('List Enquiry'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-plus-sign"></i>', ['action' => 'add'],['escape'=>false,'title'=>__('New Enquiry'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $enquiry->id],['escape'=>false,'title'=>__('Edit Enquiry'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                        <?= $this->Form->postLink(
                        '<i class="icon-remove"></i>',
                        ['action' => 'delete', $enquiry->id],
                        ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Enquiry')])
                        ?>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped table-bordered">
                            <tbody> 
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
                                    <th scope="row"><?= __('Query') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($enquiry->query)); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</div>