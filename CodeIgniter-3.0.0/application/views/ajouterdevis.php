<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>Ajouter un devis</title>
	
	<!-- Icons -->
     <link href="<?php echo base_url('public/fonts/ionicons/css/ionicons.min.css')?>" rel="stylesheet">
     <link href="<?php echo base_url('public/fonts/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

	<!-- Plugins -->
    <link href="<?php echo base_url('public/styles/plugins/c3.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('public/styles/plugins/waves.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('public/styles/plugins/perfect-scrollbar.css')?>" rel="stylesheet">

	
	<!-- Css/Less Stylesheets -->
    <link href="<?php echo base_url('public/styles/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('public/styles/main.min.css')?>" rel="stylesheet">
	


	 
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<body id="app" class="app off-canvas">
	
	<!-- header -->
	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<!-- nav trigger/collapse -->
			<li>
				<a href="javascript:;" class="nav-trigger ion ion-drag"></a>
			</li>
			<!-- #end nav-trigger -->

			<!-- Search box -->
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" action="javascript:;">
						<input type="search" class="form-control" placeholder="Type here for search...">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>	<!-- #end search-box -->

			<!-- site-logo for mobile nav -->
			<li>
				<div class="site-logo visible-xs">
					<a href="javascript:;" class="text-uppercase h3">
						<span class="text">Materia</span>
					</a>
				</div>
			</li> <!-- #end site-logo -->

			<!-- fullscreen -->
			<li class="fullscreen hidden-xs">
				<a href="javascript:;"><i class="ion ion-qr-scanner"></i></a>

			</li>	<!-- #end fullscreen -->

			<!-- notification drop -->
			<li class="notify-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<i class="ion ion-speakerphone"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>

				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new notifications 
						<a href="javascript:;" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-archive left bg-success"></span>
									<div class="desc">
										<strong>App downloaded</strong>
										<p class="small text-muted">1 min ago</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-alert-circled left bg-danger"></span>
									<div class="desc">
										<strong>Application Error</strong>
										<p class="small text-muted">4 hours ago</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-person left bg-info"></span>
									<div class="desc">
										<strong>New User Registered</strong>
										<p class="small text-muted">2 days ago</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</li>	<!-- #end notification drop -->

		</ul>

		<ul class="list-unstyled right-elems">
			<!-- profile drop -->
			<li class="profile-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
                <img src="<?php echo base_url('public/images/admin.jpg')?>" alt="admin-pic">
					
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="javascript:;"><span class="ion ion-person">&nbsp;&nbsp;</span>Profile</a></li>
					<li><a href="javascript:;"><span class="ion ion-settings">&nbsp;&nbsp;</span>Settings</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;"><span class="ion ion-lock-combination">&nbsp;&nbsp;</span>Lock Screen</a></li>
					<li><a href="javascript:;"><span class="ion ion-power">&nbsp;&nbsp;</span>Logout</a></li>
				</ul>
			</li>
			<!-- #end profile-drop -->

			<!-- sidebar contact -->
			<li class="floating-sidebar">
				<a href="javascript:;">
					<i class="ion ion-grid"></i>
				</a>
				<div class="sidebar-wrap" data-perfect-scrollbar>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#sidebar-chat-tab" data-toggle="tab">Chat</a>
						</li>
						<li>
							<a href="#sidebar-info-tab" data-toggle="tab">Info</a>
						</li>
					</ul> <!-- #end nav-tabs -->
					<div class="tab-content">
						<div class="tab-pane active" id="sidebar-chat-tab">
							<div class="chat-tab tab clearfix">
								<h5 class="title mt0 mb20">Online</h5>
								<div class="user-container mb15">
                                
                                <img src="<?php echo base_url('public/images/sample/1.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">John Wick</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;San Franciso, USA</p>

									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/2.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">George K.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;California, USA</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/3.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">Shello Dse.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Berlin, Germany</p>
									</div>
									<span class="ion ion-record avail right away"></span>
								</div>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/4.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">Lucas Tower</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Paris, France</p>
									</div>
									<span class="ion ion-record avail right away"></span>
								</div>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/5.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">Hey Win</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Hongkong, China</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/6.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">Kelvin L.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Moscow, Russia</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<h5 class="title mt0 mb20">Offline</h5>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/7.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">Martin Xx.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;xxx, yyy</p>
									</div>
									<span class="ion ion-record avail right off"></span>
								</div>

								<div class="user-container mb15">
                                <img src="<?php echo base_url('public/images/sample/2.jpg')?>" alt="">
									
									<div class="desc">
										<p class="mb0">Lorem Ipsum</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Virginia, USA</p>
									</div>
									<span class="ion ion-record avail right off"></span>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="sidebar-info-tab">
							<div class="info-tab tab clearfix">
								<h5 class="title mt0 mb20">Work in Progress</h5>
								<ul class="list-unstyled mb15 clearfix">
									<li>
										<div class="clearfix mb10">
											<small class="left">App Upload</small>
											<small class="right">80%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-primary" style="width: 80%;"></div>
										</div>
									</li>
									<li>
										<div class="clearfix mb10">
											<small class="left">Creating Assets</small>
											<small class="right">50%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-danger" style="width: 50%;"></div>
										</div>
									</li>
									<li>
										<div class="clearfix mb10">
											<small class="left">New UI 2.0</small>
											<small class="right">90%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-success" style="width: 90%;"></div>
										</div>
									</li>
								</ul>

								<h5 class="title mt0 mb20">Settings</h5>
								<div class="clearfix mb15">
									<div class="left">
										<p>Show me online</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox" checked> 
												<span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="clearfix mb15">
									<div class="left">
										<p>Notifications</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox"> 
												<span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="clearfix mb15">
									<div class="left">
										<p>Enable History</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox" checked> 
												<span></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- #end tab content -->
				</div> <!-- #end sidebar-wrap -->
			</li>

		</ul>

	</header>
	<!-- #end header -->

	<!-- main-container -->
	<div class="main-container clearfix">
		<!-- main-navigation -->
		<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<!-- site logo -->
				<a href="index.html" class="site-logo text-uppercase">
					<i class="ion ion-disc"></i>
					<span class="text">C.R.M</span>
				</a>
			</div>

			<!-- Site nav (vertical) -->

			<nav class="site-nav clearfix" role="navigation">
				<div class="profile clearfix mb15">
      <img src="<?php echo base_url('public/images/admin.jpg')?>" alt="admin">
				
				  <div class="group">
						<h5 class="name">C.R.M</h5>
					</div>
				</div>
<!-- navigation -->
							<ul class="list-unstyled clearfix nav-list mb15">
					<li class="active">
						<a href="index.html">
							<i class="ion ion-monitor"></i>
							<span class="text">Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">Services</span>
							<i class="arrow ion-chevron-left"></i>

						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="servicecon\ajoutService">Ajouter un service</a></li>
							<li><a href="servicecon\modifierService">Modifier un service</a></li>
							<li><a href="servicecon\listedeService">Liste de sercives</a></li>
							<li><a href="servicecon\supprimerService">Supprimer un service </a></li>
							
							
						</ul>
					</li>
<li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">Clients</span>
							<i class="arrow ion-chevron-left"></i>

						</a>
						<ul class="inner-drop list-unstyled">
                       
							<li><a href="clientcont\ajoutClient">Ajouter un Client</a></li>
							<li><a href="clientcont/modifierClientcon">Modifier un Client</a></li>
							<li><a href="clientcont/listedeClient">Liste de Clients</a></li>
							<li><a href="clientcont/supprimerClient">Supprimer un Client </a></li>
							
							
						</ul>
					</li>
                    <li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">Devis</span>
							<i class="arrow ion-chevron-left"></i>

						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="deviscont/ajoutDevis">Ajouter un Devis</a></li>
							<li><a href="deviscont/modifierDeviscont">Modifier un Devis</a></li>
							<li><a href="deviscont/listedeDevis">Liste de devis</a></li>
							<li><a href="deviscont/supprimerDevis">Supprimer un devis </a></li>
							
							
						</ul>
					</li>
                    <li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">Depense</span>
							<i class="arrow ion-chevron-left"></i>

						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="ui.buttons.html">Gestion de depense</a></li>
							<li><a href="ui.typography.html">Rapport depense/recette</a></li>
							<li><a href="ui.typography.html">Imprimer Facture</a></li>
							
							
						</ul>
					</li>
					
					
					
				</ul> <!-- #end navigation -->
			</nav>

			<!-- nav-foot -->
			<footer class="nav-foot">
				<p>2015 &copy; C.R.M</p>
			</footer>

		</aside>
		<!-- #end main-navigation -->

		<!-- content-here -->
		<div class="content-container" id="content">
			<!-- dashboard page -->
			<div class="page page-dashboard">

			  <div class="page-wrap">

			    <div class="row">
                

								
								
								<p 	<div class="form-group">
											<label class="col-md-3 control-label">Devis N° :</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="nom" id="nom">
											</div>
										</div>

 <!-- native select --><br>
<br>

										<div class="form-group">
											<label class="col-md-3 control-label">Clients</label>
											<div class="col-md-3">
												<select class="form-control" name="id_client" id="id_client">
													
													<option value="1">marwa</option>
													<option value="2">ahmed</option>
													<option value="3">salah</option>
													<option value="4">yassmine</option>
													<option value="5">nour</option>
												</select>
											</div>
										</div>
                                        <br>
<br>

	<div class="clearfix right">
											<button class="btn btn-primary mr5 waves-effect" type="submit" id="submitForm" onClick="showform()">+</button>
										
										</div>

                                       
                                        <br>

<br>

                                        
								<!-- invoice table -->
								<table class="table table-bordered invoice-table mb30" name="tableau" id="tableau">
									<thead>
										<tr>
											<th>Service</th>
											<th>Quantite</th>
											<th>Prix HT</th>
											<th>Total</th>
										</tr>
									</thead>

									<tbody>
										
									</tbody>
								</table>
								<!-- #end invoice table -->


								<div class="clearfix text-right total-sum mb30">
									<h3 class="text-uppercase text-bold">Total</h3>
									
								</div>
							

							</div>

						</div> <!-- Invoice End -->
					</div> <!-- #end row -->

				</div> <!-- #end page-wrap -->

			</div>

		</div> 
		<!-- #end content-here -->

	</div> <!-- #end main-container -->

					

					

							

				 
				</div> 
				<!-- #end page-wrap -->
			</div>
			<!-- #end dashboard page -->
		</div>

	</div> <!-- #end main-container -->
    
    
    <!-- dashboard header -->
						<div class="col-md-12" id="formul" style="display:none;">
						  <div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Ajouter un devis</div>
								<div class="panel-body">
									<form role="form" class="form-horizontal" action="javascript:;"> <!-- form horizontal acts as a row -->
										<!-- normal control -->
										<div class="form-group">
											<label class="col-md-3 control-label">Service:</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="service" id="service">
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label class="col-md-3 control-label">Prix:</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="prix" id="prix">
											</div>
										</div>
                                          <div class="form-group">
											<label class="col-md-3 control-label">Quantite:</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="qte" id="qte">
											</div>
										</div>
                                         

										<!-- button addon -->
										<div class="form-group">
	
											<div class="col-md-9">
											  <div class="input-group">
												<div class="input-group-btn">
														
												  </div>
												</div>
											</div>	
										</div>
										
										<div class="clearfix right">
											<button class="btn btn-primary mr5 waves-effect" type="submit" id="submitForm" onClick="ajouter(document.getElementById('tableau'), document.getElementById('service').value, document.getElementById('prix').value, document.getElementById('qte').value);">OK</button>
											<button class="btn btn-default waves-effect">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>
                      
					

					

							

				 
				</div> 

	<!-- theme settings -->
	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Nav Horizontal</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navHorizontal"> 
								<span>&nbsp;</span> 
							</label>
						</div>
						
						
					</li>
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="fixedHeader"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="navFull"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #end theme settings -->


	

	<!-- Dev only -->
	<!-- Vendors -->

	
	
<script src="<?php echo base_url('public/scripts/vendors.js')?>"></script>	
<script src="<?php echo base_url('public/scripts/plugins/d3.min.js')?>"></script>
<script src="<?php echo base_url('scripts/plugins/c3.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/plugins/screenfull.js')?>"></script>
<script src="<?php echo base_url('public/scripts/plugins/perfect-scrollbar.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/plugins/waves.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/plugins/jquery.sparkline.min.js')?>"></script> 
<script src="<?php echo base_url('public/scripts/plugins/jquery.easypiechart.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/plugins/bootstrap-rating.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/app.js')?>"></script>
<script src="<?php echo base_url('public/scripts/index.init.js')?>"></script>

<script src="<?php echo base_url('public/scripts/vendors/jquery.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/vendors/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('public/scripts/dev/less.min.js')?>"></script>

</body>
</html>
<script>
function showform()
{
 $("#formul").show();
}
function ajouter(elmt, value1,value2,value3) {
	/*var service=document.getElementById(service).value; 
	var prix=document.getElementById(prix).value;
	var qte=document.getElementById(qte).value;*/
	



    var tr = document.createElement('tr');
    elmt.appendChild(tr);
   // for (var i = 0; i < 100; i++) {
    var td = document.createElement('td');
    tr.appendChild(td);
    var tdText = document.createTextNode(value1);
    td.appendChild(tdText);
	 var td = document.createElement('td');
    tr.appendChild(td);
	 var tdText = document.createTextNode(value2);
    td.appendChild(tdText);
	 var td = document.createElement('td');
    tr.appendChild(td);
	 var tdText = document.createTextNode(value3);
    td.appendChild(tdText);
	
	
	
	
		
/*var addr=new table(service,prix,qte);
		form.table.table[form.table.table.length]=addr;*/
	}
	function totale()
	{
	}
</script>