<?php
     $this->Html->addCrumb(__('Settings'),['action' => 'index']);
     $this->Html->addCrumb(__('View Setting'));
?>
<div class="row-fluid">
    <div class="span12" id="content">
        <div class="row-fluid">
            <div class="block">
                <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= __("Settings") ?></div>
                    <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index'],['escape'=>false,'title'=>__('List Setting'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $setting->id],['escape'=>false,'title'=>__('Edit Setting'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;

                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                    <div class="table-responsive">     
                        <table class="table table-striped table-bordered">
                            <tbody> 
                                <tr>
                                    <th scope="row"><?= __('layout_name') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($setting->layout_name)); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('language') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($setting->language)); ?></td>
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