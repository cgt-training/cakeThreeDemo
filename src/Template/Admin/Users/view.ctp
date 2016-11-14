<?php
     $this->Html->addCrumb('Users',['action' => 'index']);
     $this->Html->addCrumb('View User');
?>
<div class="row-fluid">
    <div class="span12" id="content">
        <div class="row-fluid">
            <div class="block">
                <?= $this->Flash->render() ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><?= h($user->name) ?></div>
                    <div class="muted pull-right">
                        <?= $this->Html->link('<i class="icon-list"></i>', ['action' => 'index'],['escape'=>false,'title'=>__('List Users'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-plus-sign"></i>', ['action' => 'add'],['escape'=>false,'title'=>__('New User'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                        <?= $this->Html->link('<i class="icon-edit"></i>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>__('Edit User'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                        <?= $this->Form->postLink(
                        '<i class="icon-remove"></i>',
                        ['action' => 'delete', $user->id],
                        ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete User')])
                        ?>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped table-bordered">
                            <tbody> 
                                <tr>
                                    <th scope="row"><?= __('Username') ?></th>
                                    <td><?= h($user->username); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Password') ?></th>
                                    <td><?= h($user->password); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Role') ?></th>
                                    <td><?= h($user->role); ?></td>
                                </tr>
                                 <tr>
                                    <th scope="row"><?= __('Image') ?></th>
                                    <td>
                                    <?php
                                    if(!empty($user->image))
                                        echo  $this->Html->image(h($user->image), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'120px']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Created') ?></th>
                                    <td><?= h($user->created) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Modified') ?></th>
                                    <td><?= h($user->modified) ?></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</div>