   <!-- /navbar -->

   <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="/"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                        <li><a href="/userinfo/create"><i class="menu-icon icon-bullhorn"></i>Add Student </a>
                        </li>
                        <li><a href="/quiz/index"><i class="menu-icon icon-inbox"></i>Manage Quiz <b class="label green pull-right">
                            11</b> </a></li>
                        <li><a href="/question/create"><i class="menu-icon icon-tasks"></i>Add Question <b class="label orange pull-right">
                            19</b> </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    
                    
                    <ul class="widget widget-menu unstyled">
                        <li><a href="/question/index"><i class="menu-icon icon-bold"></i> Manage Question </a></li>
                        <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                        <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                        <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                        <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>More Pages </a>
                            <ul id="togglePages" class="collapse unstyled">
                                <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                            </ul>
                        </li>
                     
                            
                 
                        <form method="POST" action="/admin/logout">
                                        @csrf
                                    <li><a href="#"><button type="submit"><i class="icon-signout"></i>Logout</button></a></li>
                                </form>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>
         