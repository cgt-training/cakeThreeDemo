<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
    <li>
         <?php
        echo $this->Html->link('<i class="icon-home"></i> Dashboard',
            ['controller'=>'dashboards','action'=>'display'],
            ['escape'=>false]);
        ?> 
    </li>                       
    <li>
        <?php
        echo $this->Html->link('<span class="badge badge-success pull-right">'.$PostsCount.'</span>
            <i class="icon-briefcase"></i> Blog Posts',
            ['controller'=>'BlogPosts','action'=>'index'],
            ['escape'=>false]);
        ?>                          
    </li>
    <li>
        <?php
        echo $this->Html->link('<span class="badge badge-success pull-right">'.$UsersCount.'</span> <i class="icon-user"></i> Users',
            ['controller'=>'Users','action'=>'index'],
            ['escape'=>false]);
        ?>                          
    </li>
    <li>
        <?php
        echo $this->Html->link('<span class="badge badge-success pull-right">'.$ArticlesCount.'</span> <i class="icon-font"></i> Articles',
            ['controller'=>'articles','action'=>'index'],
            ['escape'=>false]);
        ?>                          
    </li>
    <li>
        <?php
        echo $this->Html->link('<span class="badge badge-success pull-right">'.$EnquiryCount.'</span> 
            <i class="icon-question-sign"></i> Enquiry',
            ['controller'=>'enquiry','action'=>'index'],
            ['escape'=>false]);
        ?>                          
    </li>
<!--       <li>
        <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
    </li>                        
    <li>
        <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
    </li>                        
    <li>
        <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
    </li> -->
    <li>
        <?php
        echo $this->Html->link('<i class="icon-off"></i> Logout',
            ['controller'=>'Users','action'=>'logout'],
            ['escape'=>false]);
        ?> 
    </li>
</ul>