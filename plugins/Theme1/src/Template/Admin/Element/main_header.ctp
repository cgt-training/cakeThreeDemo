<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </a>
            <?=$this->Html->link(__("Admin Panel"),['controller' => 'dashboards', 'action' => 'display'],["class"=>"brand"])?>
            <a class="brand" href="#"></a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                    <?php
                   // pr($this->request->Session()->read());
                   
                    $username = $this->request->Session()->read('Auth.Admin.username');
                    $userId = $this->request->Session()->read('Auth.Admin.id');
                    echo $this->Html->link('<i class="icon-user"></i> '.h($username).'<i class="caret"></i>',
                     ['controller' => 'dashboards', 'action' => 'display'],
                     ['role'=>"button", 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown",'escape'=>false]);
                    ?>
                       <ul class="dropdown-menu">
                            <li>
                                <?=  $this->Html->link(__('Profile'),['controller' => 'Users', 'action' => 'View',$userId]); ?>
                            </li>
                            <li class="divider"></li>
                            <li>
                            <?=  $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']); ?>       
                        
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li>
                    <?php echo $this->Html->link(__("Dashboard"),["controller"=>"dashboards","action"=>"display"]);?>
                    </li>
                    <li>
                    <?php echo $this->Html->link(__("Settings"),["controller"=>"settings","action"=>"edit",1]);?>
                   </li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><?= __("Users");?> <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php echo $this->Html->link(__("change_password"),
                                    ['controller'=>'users','action'=>'change_password']);
                                ?>
                            </li>
                            <!-- <li>
                                <a tabindex="-1" href="#">Search</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Permissions</a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>