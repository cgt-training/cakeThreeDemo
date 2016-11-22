<?php
     $this->Html->addCrumb(__('Settings'));
?>
<div class="row-fluid">
<?= $this->Flash->render() ?>
</div>
<div class="row-fluid">
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left"><?= __('Settings') ?></div>
           
        </div>
        <div class="block-content collapse in">
            <div class="span12">
               <div class="table-toolbar">
                  <div class="btn-group">
                  <?php
                  echo $this->Html->link(
                    $this->Form->button(__('Edit').' <i class="icon-pencil icon-white"></i>',['type'=>'button','class'=>'btn btn-primary']),
                    ["action"=>'edit', $settings->id],
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
                    <th class="text-center"><?= __('layout_name') ?></th>
                    <th class="text-center"><?= __('language') ?></th>
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $S_no=1;   
                //pr($settings);
                //foreach ($settings as $setting): 
                ?>
                <tr>
                    <td width="5%"><?= $S_no++;?></td>
                    <td><?= h($settings->layout_name) ?></td>    
                    <td><?= h($settings->language) ?></td>     
                    <td class="actions text-center">                   
                    <?=  $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $settings->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;                   
                   <?php
                    echo   $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $settings->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);                                    
                    ?>&nbsp;&nbsp;                   
                    </td>
                </tr>
                <?php 
                //endforeach; ?>
               </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>