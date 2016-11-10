<?php
use Cake\I18n\Date;
?>
 <!-- Content Header (Page header) --> 
  <h1>
                        Dashboard
                        <small>Control panel</small>
                      </h1>
                     <div class="row-fluid">

                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Blog Posts</div>
                                    <div class="pull-right"><span class="badge badge-info"><?= h($PostsCount)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><?=__("Title");?></th>
                                                <th><?=__("Created");?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         if(isset($Posts)):
                                          $Sno=1;
                                        foreach($Posts as $PostArr):
                                         $datetime1 = new Date($PostArr->created);
                                         $date = new Date();
                                         $DateDiff =  date_diff($datetime1,$date);
                                          ?>
                                        <tr>
                                            <td><?=$Sno++;?></td>
                                            <td><?=$PostArr->name;?></td>
                                            <td><?=$DateDiff->format('%d days')?> Ago</td>
                                        </tr>                                      
                                          <?php
                                        endforeach;
                                      endif;
                                      ?>                                      
                                        </tbody>
                                    </table>
                                     <div class="box-footer clearfix no-border">
                                    <?= 
                                       $this->Html->link(
                                       $this->Form->button('<i class="fa fa-plus"></i> View All', ['type' => 'button','class'=>'btn btn-default pull-right']),
                                       ["controller"=>'BlogPosts','action'=>'index'],
                                       ['escape' => false]
                                    );
                                     ?>
                                     </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Users</div>
                                    <div class="pull-right"><span class="badge badge-info"><?= h($UsersCount)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><?=__("Username");?></th>
                                                <th><?=__("Created");?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         if(isset($Users)):
                                          $Sno=1;
                                        foreach($Users as $UsersArr):
                                         $datetime1 = new Date($UsersArr->created);
                                         $date = new Date();
                                         $DateDiff =  date_diff($datetime1,$date);
                                          ?>
                                        <tr>
                                            <td><?=$Sno++;?></td>
                                            <td><?=$UsersArr->username;?></td>
                                            <td><?=$DateDiff->format('%d days')?> Ago</td>
                                        </tr>                                      
                                          <?php
                                        endforeach;
                                      endif;
                                      ?>                                      
                                        </tbody>
                                    </table>
                                    <div class="box-footer clearfix no-border">
                                    <?= 
                                       $this->Html->link(
                                       $this->Form->button('<i class="fa fa-plus"></i> View All', ['type' => 'button','class'=>'btn btn-default pull-right']),
                                       ["controller"=>'users','action'=>'index'],
                                       ['escape' => false]
                                    );
                                     ?>
                                     </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>    