                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                             <?php
                            echo $this->Html->link('<i class="icon-chevron-right"></i> Dashboard',
                                ['controller'=>'dashboards','action'=>'display'],
                                ['escape'=>false]);
                            ?> 
                        </li>                       
                        <li>
                            <?php
                            echo $this->Html->link('<span class="badge badge-success pull-right">'.$PostsCount.'</span>Blog Posts',
                                ['controller'=>'BlogPosts','action'=>'index'],
                                ['escape'=>false]);
                            ?>                          
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('<i class="icon-chevron-right"></i> Users',
                                ['controller'=>'Users','action'=>'index'],
                                ['escape'=>false]);
                            ?>                          
                        </li>
                        
                        <li>
                            <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
                        </li>                        
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                        </li>                        
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('<i class="icon-chevron-right"></i> Logout',
                                ['controller'=>'Users','action'=>'logout'],
                                ['escape'=>false]);
                            ?> 
                        </li>
                    </ul>