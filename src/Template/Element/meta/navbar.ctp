<!-- Navigation -->
<?php
	$session = $this->request->session();
	$user_data = $session->read('Auth.User');	
	if(!empty($user_data)) {	
?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="#">
			<?php echo $this->Html->image('/webroot/img/location.png',['height' => '30', 'width' => '30']); ?>
			Student Tracker
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<?php		
				$list = [];
				foreach ($menu as $menuItem) {
					$list[] = '
						<a class="nav-link" href="#">
							<i class="fa fa-fw '.$menuItem->menu_icon.'"></i>
							<span class="nav-link-text">'.$menuItem->menu_name. '</span>
						</a>
					';
				}
				echo $this->Html->nestedList($list, 
					['class' => 'navbar-nav navbar-sidenav', 'id' => 'exampleAccordion'],
					['class' => 'nav-item','data-toggle' => "tooltip",'data-placement' => 'right']
				);
			?>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-envelope"></i>
						<span class="d-lg-none">Messages
							<span class="badge badge-pill badge-primary">12 New</span>
						</span>
						<span class="new-indicator text-primary d-none d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
							<span class="number">12</span>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="messagesDropdown">
						<h6 class="dropdown-header">New Messages:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>Jane Smith</strong>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>John Doe</strong>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item small" href="#">
							View all messages
						</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-bell"></i>
						<span class="d-lg-none">Alerts
							<span class="badge badge-pill badge-warning">6 New</span>
						</span>
						<span class="new-indicator text-warning d-none d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
							<span class="number">6</span>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
						<h6 class="dropdown-header">New Alerts:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
								<i class="fa fa-long-arrow-up"></i>
								Status Update</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-danger">
								<strong>
								<i class="fa fa-long-arrow-down"></i>
								Status Update</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item small" href="#">
							View all alerts
						</a>
					</div>
				</li>
				<li class="nav-item">
					<form class="form-inline my-2 my-lg-0 mr-lg-2">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<strong>
							<?php 
								echo $user_data['username'];
							?>
						</strong>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
						<h6 class="dropdown-header"><?= $user_data['username'].' '.$user_data['lastname'];?></h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
									<i class="fa fa-user"></i>
									Profile
								</strong>
							</span>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-danger">
								<strong>
									<i class="fa fa-cog"></i>
									Settings
								</strong>
							</span>
						</a>
					</div>
				</li>
				<li class="nav-item">
					<?php 
						echo $this->Html->link(
							$this->Html->tag('i', '', ['class' => 'fa fa-fw fa-sign-out']) . "Logout",
							[],
							['class' => 'nav-link', 'data-toggle' => 'modal', 'data-target' => '#exampleModal','escape' => false]
						);
					?>
				</li>
			</ul>
		</div>
	</nav>
<?php } ?>