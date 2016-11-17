<?php
     $this->Html->addCrumb(__('Products'));
?>
<div class="row-fluid">
<?= $this->Flash->render() ?>
</div>
     <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"><?= __('Products') ?></div>
                <div class="pull-right">
                <?php
                  echo $this->Html->link(' <i class="icon-refresh"></i>',
                    ["action"=>'index'],
                    ['escape'=>false,'class'=>'ajaxRefresh','title'=>__("Refresh")]);
                ?>    
               </div>
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
           </div>
              <div class="table-responsive">           
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered TableDataClass">
              <thead>
                <tr>
                   <th class="text-center"><?= __('Sno') ?></th>
                    <th class="text-center"><?= __('name') ?></th>                    
                    <th class="text-center"><?= __('created') ?></th>
                    <th class="text-center"><?= __('modified') ?></th>
                    <th class="text-center"><?= __('Dp') ?></th>
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th class="text-center"><?= __('#') ?></th>
                    <th class="text-center"><?= __('name') ?></th>                    
                    <th class="text-center"><?= __('created') ?></th>
                    <th class="text-center"><?= __('modified') ?></th>
                    <th class="text-center"><?= __('Dp') ?></th>
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </tfoot>
              <tbody>
                <?php $S_no=1;   
            foreach ($products as $product): ?>
            <tr>
                <td width="5%"><?= $S_no++;?></td>
                <td><?= h($product->name) ?></td> 
                <td><?= $this->Time->format(h($product->created) , 'dd-MM-YYYY HH:mm:ss');?></td>
                <td><?= $this->Time->format(h($product->modified) , 'dd-MM-YYYY HH:mm:ss'); ?></td>
                <td><?
                if(!empty($product->file))
                echo  $this->Html->image(h($product->file), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'60px']); ?></td>           
                <td class="actions text-center">                   
                <?=  $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $product->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;                   
               <?php
                echo   $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $product->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);                                    
                ?>&nbsp;&nbsp;
               <?= $this->Form->postLink(
                '<i class="icon-remove"></i>',
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->name),'escape'=>false,'title'=>'Delete','class'=>'AjaxLink']);
               ?>
                </td>
            </tr>
            <?php endforeach; ?>
               </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>