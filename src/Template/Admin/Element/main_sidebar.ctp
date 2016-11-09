                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="#"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>                       
                        <li>
                            <?php
                            echo $this->Html->link('<i class="icon-chevron-right"></i> Blog Posts',
                                ['controller'=>'BlogPosts','action'=>'index'],
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
                    </ul>