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
                <div class="muted pull-left"><?= __('Blog Posts') ?></div>
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
                    <th scope="col"><?= __('#') ?></th>
                    <th scope="col"><?= __('name') ?></th>
                    <th scope="col"><?= __('post_no') ?></th>
                    <th scope="col"><?= __('created') ?></th>
                    <th scope="col"><?= __('modified') ?></th>
                    <th scope="col"><?= __('flag') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($blogPosts as $blogPost): ?>
                <tr>
                    <td><?= $this->Number->format($blogPost->id) ?></td>
                    <td><?= h($blogPost->name) ?></td>
                    <td><?= $this->Number->format($blogPost->post_no) ?></td>
                    <td><?= h($blogPost->created) ?></td>
                    <td><?= h($blogPost->modified) ?></td>
                    <td><?= h($blogPost->flag) ?></td>
                    <td class="text-center actions">
                        <?= $this->Html->link(__('<i class="icon-eye-open"></i>'), ['action' => 'view', $blogPost->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>
                        <?= $this->Html->link(__('<i class="icon-edit"></i>'), ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>
                        <?= $this->Form->postLink(__('<i class="icon-remove"></i>'), ['action' => 'delete', $blogPost->id], 
                        ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id),'escape'=>false,'title'=>'Delete','class'=>'AjaxLink']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
               </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>

