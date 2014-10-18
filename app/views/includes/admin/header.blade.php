<!-- CONTENT -->
<div class="container2">
<div class="container2 offset-0">
<!-- CONTENT -->
<div class="col-md-12  offset-0">
<!-- LEFT MENU -->
<div class="dashboard-left offset-0 textcenter"> <br/>
  <br/>
  <a href="index.html">{{ HTML::image('travel/images/logo.png','Travel Agency Logo') }}</a><br/>
  <span class="size12 grey lh5">Welcome to the Admin Panel</span><br/>
  <a href="#">{{ HTML::image('travel/images/dash/avatar.jpg','') }}</a><br/>
  <span class="size12 dark">Administrator</span><br/>
  <a href="{{ URL::to('admin/logout') }}">{{ HTML::image('travel/images/dash/logout.png','') }}</a><br/>
  <br/>
  <br/>
  <!-- Nav tabs -->
  <ul class="nav dashboard-tabs">
    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">
      <div class="dash-ct"> <span class="left"></span> <span class="dtxt">Dashboard <b class="lightcaret "></b></span> </div>
      </a>
    </li>
    <li> <a href="{{ URL::to('hotel') }}" >
      <div class="dash-ct"> <span class="pages-icon left"></span> <span class="dtxt">Hotels</span> </div>
      </a></li>
   
    <li> <a href="#appearance" data-toggle="tab">
      <div class="dash-ct"> <span class="appearance-icon left"></span> <span class="dtxt">Appearance</span> </div>
      </a></li>
   <li> <a href="{{ URL::to('user') }}" >
      <div class="dash-ct"> <span class="profile-icon left"></span> <span class="dtxt">Users</span> </div>
      </a></li>
    <li> <a href="#tools" data-toggle="tab">
      <div class="dash-ct"> <span class="tools-icon left"></span> <span class="dtxt">Tools</span> </div>
      </a></li>
    <li> <a href="#settings" data-toggle="tab">
      <div class="dash-ct"> <span class="settings-icon left"></span> <span class="dtxt">Settings</span> </div>
      </a></li>
  </ul>
  <br/>
  <span class="dtxt"> <span class="size12 grey"> Copyright &copy; 2013.<br/>
  leadingedgeinfosolutions.com </span> <br/>
  <br/>
  <br/>
  </span>
  <div class="clearfix"></div>
</div>
<!-- LEFT MENU -->
<div class="dashboard-right  offset-0">
  <!-- Tab panes from left menu -->
  <div class="tab-content5">
   <div class="tab-pane cpadding40 active" id="profile">
					  
						<span class="lato size12 grey">Good Morning <a href="#" class="orange">Administrator</a></span>
						<ul class="d-status">
							<li class="popwidth2"><a href="#" id="notifications" data-content="No new messages...">Notifications<span class="d-not">0</span></a></li>
							<li><a href="#" id="messages" data-content="
							<div class='msgbox offset-0'>
								<img src='../images/dash/avatar3.jpg' alt='' width='30' class='left margright10 roundav'/>
								<span class='opensans size13 dark'>Hello, concgratulations.. </span><br/>
								<span class='opensans size12'>Thank's for this awesome theme</span>
							</div>
							<div class='msgbox2 offset-0'>
								<img src='../images/dash/no-avatar.jpg' alt='' width='30' class='left margright10 roundav'/>
								<span class='opensans size13 dark'>Hello Sir, need customisation </span><br/>
								<span class='opensans size12'>Are you available for freelance work?</span>
							</div>					
							<div class='msgbox offset-0'>
								<img src='../images/dash/avatar2.jpg' alt='' width='30' class='left margright10 roundav'/>
								<span class='opensans size13 dark'>Extramaziordinary</span><br/>
								<span class='opensans size12'>Bought it 5 min ago and i'm loving it</span>
							</div>
							" data-original-title="<span class='dark bold'>Notifications</span>">Messages<span class="d-mes active">3</span></a></li>

							
							<li class="popwidth"><a href="#" id="tasks" data-content="
								<ul class='checklist3'>
									<li>10:00 AM - Update to v2.0 <button type='button' class='close poscls' data-dismiss='alert' aria-hidden='true'>&times;</button></li>
									<li>28.12.13 - Withdrawal - <b>$500.00</b> <button type='button' class='close poscls' data-dismiss='alert' aria-hidden='true'>&times;</button></li>
									<li>Sent Email to <b>dave@gmail.com</b> <button type='button' class='close poscls' data-dismiss='alert' aria-hidden='true'>&times;</button></li>
									<li>Recieved Email from <b>ana@yahoo.com</b><button type='button' class='close poscls' data-dismiss='alert' aria-hidden='true'>&times;</button></li>
									<li>25.12.13 - Sent Christas Newsletter <button type='button' class='close poscls' data-dismiss='alert' aria-hidden='true'>&times;</button></li>
									<li><b>Antony</b> booked 1 room's - New York <button type='button' class='close poscls' data-dismiss='alert' aria-hidden='true'>&times;</button></li>
								</ul>
								<div class='clearfix'></div>
							" >Tasks<span class="d-tas active">6</span></a></li>
						</ul>
						<div class="line2"></div>