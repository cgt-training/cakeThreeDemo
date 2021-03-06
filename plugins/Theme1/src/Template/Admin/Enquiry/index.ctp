<?php
     $this->Html->addCrumb(__('Enquiry'));
?>
<div class="row-fluid">
<?= $this->Flash->render() ?>
</div>
<div class="row-fluid">
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left"><?= __('Enquiry') ?></div>            
        </div>
        <div class="block-content collapse in">
            <div class="span12">
               <div class="table-toolbar">
                  <div class="btn-group">
                   <?php
                  echo $this->Html->link(
                    $this->Form->button(__('Add New').' <i class="icon-plus icon-white"></i>',['type'=>'button','class'=>'btn btn-success']),
                    ["action"=>'add'],
                    ['escape'=>false])
                  ?>                  
                  </div>
                  <div class="pull-right">
                      <?php
                        echo $this->Html->link($this->Form->button(__('Reload').' <i class="icon-refresh icon-white"></i>',['type'=>'button','class'=>'btn btn-inverse']),
                          ["action"=>'index'],
                          ['escape'=>false,'class'=>'ajaxRefresh','title'=>__("Reload")]);
                      ?>    
                  </div>
               </div>  
               <div class="table-responsive">                       
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered TableDataClass">
              <thead>
                <tr>
                   <th class="text-center">#</th>
                    <th class="text-center"><?= __('Name') ?></th>
                    <th class="text-center"><?= __('Phone No') ?></th>
                    <th class="text-center"><?= __('Email') ?></th>
<!--                     <th class="text-center"><?= __('created') ?></th>
                    <th class="text-center"><?= __('modified') ?></th> -->
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th class="text-center">#</th>
                    <th class="text-center"><?= __('Name') ?></th>
                    <th class="text-center"><?= __('Phone No') ?></th>
                    <th class="text-center"><?= __('Email') ?></th>
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </tfoot>
              <!-- <tbody>
                <?php $S_no=1;   
                foreach ($enquiry as $enquiry): ?>
                <tr>
                    <td width="5%"><?= $S_no++;?></td>
                    <td><?= h($enquiry->name) ?></td>    
                    <td><?= h($enquiry->phone_no) ?></td>    
                    <td><?= h($enquiry->email) ?></td>    
                    <td><?= h($enquiry->created) ?></td>
                    <td><?= h($enquiry->modified) ?></td>           
                    <td class="actions text-center">                   
                    <?=  $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $enquiry->id],['escape'=>false,'title'=>__('View'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;                   
                   <?php
                    echo   $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $enquiry->id],['escape'=>false,'title'=>__('Edit'),'class'=>'AjaxLink']);                                    
                    ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<i class="icon-remove"></i>',
                    ['action' => 'delete', $enquiry->id],
                    ['confirm' => __('Are you sure?'),'escape'=>false,'title'=>__('Delete'),'class'=>'AjaxLink']);
                   ?>
                    </td>
                </tr>
                <?php endforeach; ?>
               </tbody>
                </table> -->
              </div>
            </div>
        </div>
    </div>
</div>