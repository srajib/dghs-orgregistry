<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Organization List | Admin Panel</title>

        <!--Tree View-->
        <link rel="stylesheet" href="<?php echo $this->base; ?>/jquery.treeview.css" />
        <link rel="stylesheet" href="<?php echo $this->base; ?>/screen.css" />

        <script src="<?php echo $this->base; ?>/lib/jquery.js" type="text/javascript"></script>
        <script src="<?php echo $this->base; ?>/lib/jquery.cookie.js" type="text/javascript"></script>
        <script src="<?php echo $this->base; ?>/jquery.treeview.js" type="text/javascript"></script>

        <script type="text/javascript" src="demo.js"></script>
        <!--Tree View-->



        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Styles -->
        <link href="<?php echo $this->base; ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $this->base; ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo $this->base; ?>/css/bootstrap-overrides.css" rel="stylesheet">

        <link href="<?php echo $this->base; ?>/css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

        <link href="<?php echo $this->base; ?>/css/slate.css" rel="stylesheet">
        <link href="<?php echo $this->base; ?>/css/slate-responsive.css" rel="stylesheet">

        <!-- Javascript -->


        <!-- Show Ogranizations -->
        <script type="text/javascript">
            function loadReport()
            {
                var p=document.form1.srch.value;
                var xmlhttp;
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("report").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","orga.php?p="+p,true);
                xmlhttp.send();
            }
        </script>
        <!-- Show Ogranizations -->



        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="header">
            <div class="container">
                <div style="height:100px; width:auto;"><img src="<?php echo $this->base; ?>/img/logo.png" style="height:80px; width:95px; border:none"><font style="font-family:'Arial Black', Gadget, sans-serif; font-size:25px;position:relative; bottom:15px; color:#CCC">Organization Registry Admin Panel</font><br>
                    <font style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px; left:95px; position:relative; bottom:40px; float:left; color:#CCC">Government of People's Republic of Bangladesh</font><br>
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:15px; left:95px; position:relative; bottom:42px;  color:#CCC"><b>Directorate General of Health Services</b></font></div>
                <div id="info">
                    <a href="javascript:;" id="info-trigger">
                        <i class="icon-cog"></i>
                    </a>
                    <div id="info-menu">
                        <div class="info-details">
                            <h4>Welcome, logged in as <font color="orange"><?php //echo $_SESSION['email']; ?></font>.</h4>
                            <p>
                                <br>
                                Click to <a href="logout.php">Logout</a>
                            </p>
                        </div> <!-- /.info-details -->
                    </div> <!-- /#info-menu -->
                </div> <!-- /#info -->
            </div> <!-- /.container -->
        </div> <!-- /#header -->
        <div id="nav">
            <div class="container">
                <a href="javascript:;" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-reorder"></i>
                </a>
                <div class="nav-collapse">
                    <ul class="nav" style="float:left; position:relative">
                        <li class="nav-icon">
                            <a href="./">
                                <i class="icon-home"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="dropdown active">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th"></i>
                                Components
                                <b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="./forms.html">Forms</a></li>
                                <li><a href="./ui-elements.html">UI Elements</a></li>
                                <li><a href="./grid.html">Grid Layout</a></li>
                                <li><a href="./tables.html">Tables</a></li>
                                <li><a href="./widgets.html">Widget Boxes</a></li>
                                <li><a href="./charts.html">Charts</a></li>
                                <li><a href="./tabs.html">Tabs & Accordion</a></li>
                                <li><a href="./buttons.html">Buttons</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-copy"></i>
                                Sample Pages
                                <b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="./invoice.html">Invoice</a></li>
                                <li><a href="./faq.html">FAQ</a></li>
                                <li><a href="./pricing.html">Pricing Plans</a></li>
                                <li><a href="./gallery.html">Image Gallery</a></li>
                                <li><a href="./wizard.html">Wizard</a></li>
                                <li><a href="./reports.html">Reports</a></li>
                                <li><a href="./calendar.html">Calendar</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-external-link"></i>
                                Other Pages
                                <b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="./login.html">Login</a></li>
                                <li><a href="./signup.html">Signup</a></li>
                                <li><a href="./error.html">Error</a></li>
                                <li class="dropdown">
                                    <a href="javascript:;">
                                        Dropdown Menu
                                        <i class="icon-chevron-right sub-menu-caret"></i>
                                    </a>

                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="javascript:;">Dropdown #1</a></li>
                                        <li><a href="javascript:;">Dropdown #2</a></li>
                                        <li><a href="javascript:;">Dropdown #3</a></li>
                                        <li><a href="javascript:;">Dropdown #4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <li class="">
                            <input type="text" class="search-query">
                        </li>
                    </ul>
                </div> <!-- /.nav-collapse -->
            </div> <!-- /.container -->
        </div> <!-- /#nav -->
        <div id="content">
        <div class="container">
            <div id="page-title" class="clearfix">
                <ul class="breadcrumb">
                    <li class="active">
                        <a href="/">Home</a> <span class="divider">/</span>
                    </li>
                </ul>
            </div> <!-- /.page-title -->
            <?php echo $content_for_layout; ?>
            <div id="footer">
                <div class="container">
                    &copy; 2012 MIS, DG Health, all rights reserved.
                </div> <!-- /.container -->
            </div> <!-- /#footer -->
        </div>
    </body>
</html>


