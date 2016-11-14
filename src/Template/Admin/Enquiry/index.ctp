<div class="row-fluid">
<?= $this->Flash->render() ?>
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="breadcrumb">
                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                    <li>
                        <a href="#">Dashboard</a> <span class="divider">/</span>    
                    </li>
                    <li>
                        <a href="#">Settings</a> <span class="divider">/</span> 
                    </li>
                    <li class="active">Tools</li>
                </ul>
            </div>
        </div>
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
                  echo $this->Html->link('<button class="btn btn-success">Add New<i class="icon-plus icon-white"></i></button>',
                    ["action"=>'add'],
                    ['escape'=>false])
                  ?>                
                  </div>
               </div>                    
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered TableDataClass">
              <thead>
                <tr>
                   <th class="text-center">#</th>
                    <th class="text-center"><?= __('Name') ?></th>
                    <th class="text-center"><?= __('Phone No') ?></th>
                    <th class="text-center"><?= __('Email') ?></th>
                    <th class="text-center"><?= __('created') ?></th>
                    <th class="text-center"><?= __('modified') ?></th>
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
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
                    <?=  $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $enquiry->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;                   
                   <?php
                    echo   $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $enquiry->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);                                    
                    ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<i class="icon-remove"></i>',
                    ['action' => 'delete', $enquiry->id],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete','class'=>'AjaxLink']);
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