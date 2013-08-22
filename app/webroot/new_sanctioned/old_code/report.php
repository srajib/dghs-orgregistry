<?php
include('lib/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DGHS - Report</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">

<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">  

<!-- Javascript -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>
<script src="./js/bootstrap.js"></script>

<script src="./js/Slate.js"></script>


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script>
function showU(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
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
    document.getElementById("txtH").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","query.php?q="+str,true);
xmlhttp.send();
}
</script>


<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","query4.php?q="+str,true);
xmlhttp.send();
}
</script>



</head>

<body>
 	
  	
<div id="header">
	
	<div class="container">			
		
		<div style="height:100px; width:auto;"><img src="img/logo.png" style="height:80px; width:95px; border:none"><font style="font-family:'Arial Black', Gadget, sans-serif; font-size:25px;position:relative; bottom:15px; color:#CCC">Sanctioned Post Creation</font><br>
<font style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px; left:95px; position:relative; bottom:40px; float:left; color:#CCC">Government of People's Republic of Bangladesh</font><br>
<font style="font-family:Arial, Helvetica, sans-serif; font-size:15px; left:95px; position:relative; bottom:42px;  color:#CCC"><b>Directorate General of Health Services</b></font></div>					
		
		<div id="info">				
			
			
			
			<div id="info-menu">
				
				<div class="info-details">
				
					
					
					<p>
					
						<br>
                        <h4>Welcome to Sanctioned Post Creation.</h4>
						
					</p>
					
				</div> <!-- /.info-details -->
				
				<div class="info-avatar">
					
					
					
				</div> <!-- /.info-avatar -->
				
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
			
			<ul class="nav">
		
				<li class="nav-icon">
					<a href="./">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				
				<li class="dropdown active">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th"></i>
						Menu
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="report.php">Search</a></li>
						<!--<li><a href="./grid.html">Grid Layout</a></li>
						<li><a href="./tables.html">Tables</a></li>
						<li><a href="./widgets.html">Widget Boxes</a></li>
						<li><a href="./charts.html">Charts</a></li>
						<li><a href="./tabs.html">Tabs & Accordion</a></li>
						<li><a href="./buttons.html">Buttons</a></li>-->
					</ul>    				
				</li>
				
		
				
			
			</ul>
			
			
			<ul class="nav pull-right">
		
				<li class="">
					<form class="navbar-search pull-left">
						<input type="text" class="search-query" placeholder="Search">
						<button class="search-btn"><i class="icon-search"></i></button>
					</form>	    				
				</li>
				
			</ul>
			
		</div> <!-- /.nav-collapse -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#nav -->


<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Sanctioned Post Report</a>
			  </li>
			 
			</ul>
			
			
		</div> <!-- /.page-title -->
	
		
		
		<div class="row">
			
		   <div class="span12">
	      		
	      		
						
				
				<div class="widget">
	      			
	      			<div class="widget-header">
	      				<h3>Sanction Post View</h3>	      				
      				</div> <!-- /.widget-header -->
					
					<div class="widget-content">
						
							<div class="control-group">
					            <label class="control-label" for="select01">Organization Type</label>
					            <div class="controls">
					              <select id="select01" onChange="showUser(this.value)">
					                <option><-- Select Type --></option>
									<?php
									$sel = mysql_query("SELECT * FROM org_type ORDER BY org_type asc");
									while($rowtype = mysql_fetch_assoc($sel))
									{
									?>
					                    <option value="<?php echo $rowtype['id']; ?>"><?php echo $rowtype['org_type']; ?></option>
									<?php
									}
									?>
					              </select>
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="select01">Organization Name</label>
					            <div class="controls">
								<div id="txtHint">
					              <select id="select01">
					                <option value=""><-- Select Organization Type --></option>
								</select>
								  </div>
					            </div>
					          </div>
						
						
						
								
						<div id="txtH">
						<table class="table table-striped table-bordered table-highlight" id="example" width="800px">
							<thead>
								<tr>
									<th><b>Sanctioned Post ID</b></th>
									<th><b>Designation</b></th>
									<th><b>Type of Post</b></th>
									<th><b>Payscale</b></th>
									<th><b>Class</b></th>
									<th><b>Group Code</b></th>
									<th><b>1st Level</b></th>
									<th><b>2nd Level</b></th>
									<th><b>Sanctioned Post</b></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="9" align="center">No Organization Selected</td>
								</tr>			
							</tbody>
						</table>
						</div>

								</div>
                        
								<!--<div class="tab-pane" id="tab_l2">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
								<div class="tab-pane" id="tab_l3">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>-->
							</div>
						</div>
								
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
					
						<!--</div>
								
					<!--</div> <!-- /widget-content -->
						
				<!--</div> <!-- /widget -->	
						
				
		    <!--</div> <!-- /span6 -->
		    
		    
		    
		    <!--<div class="span6">
	      		
	      		<div class="widget">
	      			
	      			<div class="widget-header">
	      				<h3>Tabs on <em>Bottom</em></h3>	      				
      				</div> <!-- /.widget-header -->
					
					<!--<div class="widget-content">
						
						<div class="tabbable tabs-below">
							<div class="tab-content">
								<div class="tab-pane active" id="tab_b1">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
								<div class="tab-pane" id="tab_b2">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
								<div class="tab-pane" id="tab_b3">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
							</div>
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_b1" data-toggle="tab">Section 1</a></li>
								<li><a href="#tab_b2" data-toggle="tab">Section 2</a></li>
								<li><a href="#tab_b3" data-toggle="tab">Section 3</a></li>
							</ul>
						</div>			
						
						
					</div> <!-- /widget-content -->
						
				<!--</div> <!-- /widget -->	
				
				
				<!--<div class="widget">
	      			
	      			<div class="widget-header">
	      				<h3>Tabs on <em>Right</em></h3>	      				
      				</div> <!-- /.widget-header -->
					
					<!--<div class="widget-content">
						
						<div class="tabbable tabs-right">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_r1" data-toggle="tab">Section 1</a></li>
								<li><a href="#tab_r2" data-toggle="tab">Section 2</a></li>
								<li><a href="#tab_r3" data-toggle="tab">Section 3</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_r1">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
								<div class="tab-pane" id="tab_r2">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
								<div class="tab-pane" id="tab_r3">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
									</p>
								</div>
							</div>
						</div>
						
						
					</div> <!-- /widget-content -->
						
				<!--</div> <!-- /widget -->	
				
		   <!-- </div> <!-- /span6 -->
		    
		    
		    
		    <!--<div class="span12">
		    	
		    	<!--<div class="widget">
					
					<div class="widget-header">
						
						<h3>
							<i class="icon-sort"></i> 
							Basic Accordion
							
						</h3>					
					</div> <!-- /.widget-header -->
					
					<!--<div class="widget-content">
						
						<div class="accordion" id="basic-accordion">
				            <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#basic-accordion" href="#collapseOne">
				                  Collapsible Group Item #1
				                </a>
				              </div>
				              <div id="collapseOne" class="accordion-body in collapse">
				                <div class="accordion-inner">
				                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt.</p>
				                  
				                  <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
				                </div>
				              </div>
				            </div>
				            <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#basic-accordion" href="#collapseTwo">
				                  Collapsible Group Item #2
				                </a>
				              </div>
				              <div id="collapseTwo" class="accordion-body collapse">
				                <div class="accordion-inner">
				                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqu.</p>
				                  
				                  <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
				                </div>
				              </div>
				            </div>
				            <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#basic-accordion" href="#collapseThree">
				                  Collapsible Group Item #3
				                </a>
				              </div>
				              <div id="collapseThree" class="accordion-body collapse">
				                <div class="accordion-inner">
				                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3.</p>
				                  
				                  <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
				                  
				                </div>
				              </div>
				            </div>
				          </div>					
						
					</div> <!-- /.widget-content -->
					
				<!--</div> <!-- /.widget -->
		    	
		    	
		    <!--</div> <!-- /.span12 -->
		    
		    
		    
		    <!--<div class="span12">
		    	
		    	<div class="widget widget-accordion">
					
					<div class="widget-header">
						
						<h3>
							<i class="icon-sort"></i> 
							Widget Accordion
							
						</h3>					
					</div> <!-- /.widget-header -->
					
					<!--<div class="widget-content">
						
						<div class="accordion" id="sample-accordion">

				            <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#sample-accordion" href="#collapseFive">
				                  Collapsible Group Item #2
				                </a>
				                
				                <i class="icon-plus toggle-icon"></i>
				              </div>
				              <div id="collapseFive" class="accordion-body collapse">
				                <div class="accordion-inner">
				                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqu.</p>
				                  
				                  <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
				                </div>
				              </div>
				            </div>
				            <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#sample-accordion" href="#collapseSix">
				                  Collapsible Group Item #3
				                </a>
				                
				                <i class="icon-plus toggle-icon"></i>
				              </div>
				              <div id="collapseSix" class="accordion-body collapse">
				                <div class="accordion-inner">
				                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3.</p>
				                  
				                  <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
				                  
				                </div>
				              </div>
				            </div>
				          </div>
                          
                          
                          <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#sample-accordion" href="#collapseOne">
				                  Collapsible Group Item #3
				                </a>
				                
				                <i class="icon-plus toggle-icon"></i>
				              </div>
				              <div id="collapseSix" class="accordion-body collapse">
				                <div class="accordion-inner">
				                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3.</p>
				                  
				                  <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
				                  
				                </div>
				              </div>
				            </div>
				          </div>								
						
					</div> <!-- /.widget-content --> 
					
				
		    	
		    </div> <!-- /.span12 -->       
		    
		    
		    
		</div> <!-- /row -->
		
        
        
	</div> <!-- /.container -->
	
</div> <!-- /#content -->



<div id="footer">	
		
	<div class="container">
		
		&copy; 2012 Propel UI, all rights reserved.
		
	</div> <!-- /.container -->		
	
</div> <!-- /#footer -->





  </body>
</html>
