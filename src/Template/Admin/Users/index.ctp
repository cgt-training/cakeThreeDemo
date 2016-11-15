<div class="row-fluid">
<?= $this->Flash->render() ?>
</div>


     <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"><?= __('Users') ?></div>
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
                   <th class="text-center"><?= __('Sno') ?></th>
                    <th class="text-center"><?= __('username') ?></th>
                    <!--class="text-center"ol"><?= $this->Paginator->sort('password') ?></th-->
                    <th class="text-center"><?= __('role') ?></th>
                    <th class="text-center"><?= __('image') ?></th>
                    <!--class="text-center"ol"><?= $this->Paginator->sort('created') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('modified') ?></th-->
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $S_no=1;   
            foreach ($users as $user): ?>
            <tr>
                <td width="5%"><?= $S_no++;?></td>
                <td><?= h($user->username) ?></td>               
                <td><?= h($user->role) ?></td> 
                <td class="text-center" style="height: 60px"><?
                if(!empty($user->image)):
                echo  $this->Html->image(h($user->image), ['alt' => 'CakePHP','class'=>'img-responsive center-block','width'=>'60px']);
                endif; ?>
               </td>            
                <td class="actions text-center">                   
                <?=  $this->Html->link('<i class="icon-eye-open"></i>', ['action' => 'View', $user->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;                   
               <?php
                echo   $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);                                    
                ?>&nbsp;&nbsp;
               <?= $this->Form->postLink(
                '<i class="icon-remove"></i>',
                ['action' => 'delete', $user->id],
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