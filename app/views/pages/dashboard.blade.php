@extends('layouts.master')
 
@section('title') Hotels @stop
 
@section('content')
<div class="dashboard-right  offset-0">
  <!-- Tab panes from left menu -->
  <div class="tab-content5">
    <!-- TAB 1 -->
    <div class="tab-pane cpadding40 active" id="profile"> <span class="lato size12 grey">Good Morning <a href="#" class="orange">Administrator</a></span>
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
      <div class="alert alert-warning fade in margtop20">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong>Notification!</strong> Best check yo self, you're not looking too good. </div>
      <div class="row">
        <div class="col-md-3">
          <div class="dbox-visitors">
            <div class="orangebox"> <a href="#"><img src="../images/dash/icon-visits.png" alt=""/></a> </div>
            <span class="size11 mt-5">Today’s visitors</span><br/>
            <span class="countvisitors lato size24"></span>
            <div class="clearfix"></div>
            <div class="dboxarrow"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="dbox-visitors">
            <div class="cyanbox"> <a href="#"><img src="../images/dash/icon-revenue.png" alt=""/></a> </div>
            <span class="size11 mt-5">This month’s revenue</span><br/>
            <span class="lato size24">$<span class="countrevenue"></span></span>
            <div class="clearfix"></div>
            <div class="dboxarrow"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="dbox-visitors">
            <div class="greenbox"> <a href="#"><img src="../images/dash/icon-email.png" alt=""/></a> </div>
            <span class="size11 mt-5">Mail</span><br/>
            <span class="countemail lato size24">1</span>
            <div class="clearfix"></div>
            <div class="dboxarrow"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="dbox-visitors">
            <div class="darkbox"> <a href="#"><img src="../images/dash/icon-bookings.png" alt=""/></a> </div>
            <span class="size11 mt-5">Bookings</span><br/>
            <span class="countbookings lato size24">56</span>
            <div class="clearfix"></div>
            <div class="dboxarrow"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <br/>
      <span class="lato size18">Traffic</span> <br/>
      <br/>
      <ul class="visitsboolets mt10 left margleft15">
        <li class="size14 mt-3 dark">Visits</li>
        <li><span class="blue"></span><a href="#">Search Traffic</a></li>
        <li><span class="red"></span><a href="#">Referral Traffic</a></li>
        <li><span class="green"></span><a href="#">Direct Traffic</a></li>
        <li><span class="yellow"></span><a href="#">Campaigns</a></li>
        <li><span class="grey"></span><a href="#">Today’s traffic</a></li>
      </ul>
      <ul class="pagination right">
        <li class="active"><a href="#">Day</a></li>
        <li><a href="#">Week</a></li>
        <li><a href="#">Month</a></li>
      </ul>
      <div class="clearfix"></div>
      <br/>
      <div class="bgstats">
        <div class="visitsnr"> 4,000<br/>
          3,000<br/>
          2,000<br/>
          1,000 </div>
        <ul class="mdates">
          <li>Aug 15</li>
          <li>Aug 22</li>
          <li>Aug 29</li>
          <li>Sep 5</li>
        </ul>
        <span class="stats">1,4,4,7,5,9,10</span> </div>
      <br/>
      <div class="clearfix"></div>
      <br/>
      <span class="lato size18">Today’s visits</span>
      <div class="clearfix"></div>
      <div class="col-md-6 stats2container ohidden  offset-0"> <span class="stats2"></span> </div>
      <div class="col-md-6">
        <script type="text/javascript" src="../assets/js/jquery.easy-pie-chart.js"></script>
        <div class="chartcontainer">
          <div class="wh33percent left">
            <div class="chart" data-percent="69"><span class="countbouncerate">69</span>%</div>
            <div class="chartext">Bounce Rate</div>
          </div>
          <div class="wh33percent left textcenter">
            <div class="chart2 center" data-percent="81"><span class="countnewvisits">81</span>%</div>
            <div class="chartext center">New Visits</div>
          </div>
          <div class="wh33percent left textright">
            <div class="chart3 right" data-percent="33"><span class="countsearchtrafic">33</span>%</div>
            <div class="clearfix"></div>
            <div class="chartext right">Search Traffic</div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <br/>
      <div class="line2"></div>
      <br/>
      <div class="col-md-6 offset-0"> <span class="lato size18">8,173 people visited this site</span><br/>
        <br/>
        <div class="col-md-12 peoplevisits offset-0">
          <div class="col-md-4">Visits<br/>
            <span class="size18 dark">10,090</span><br/>
            <span class="cvisits"></span></div>
          <div class="col-md-4">Unique Visitors<br/>
            <span class="size18 dark">8,173</span><br/>
            <span class="cvisits"></span></div>
          <div class="col-md-4">Previews<br/>
            <span class="size18 dark">16,462</span><br/>
            <span class="cpreview"></span></div>
          <div class="clearfix"></div>
          <br/>
          <div class="col-md-4">Pages / Visit<br/>
            <span class="size18 dark">1.63</span><br/>
            <span class="cvisits2"></span></div>
          <div class="col-md-4">Avg. Visit Duration<br/>
            <span class="size18 dark">00:01:39</span><br/>
            <span class="cvisits2"></span></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 offset-0">
        <div class="col-md-12 pdfix">
          <div class="col-md-6 offset-0">
            <div class="pdfix"> <span class="lato size18">Visits by Browser</span><br/>
              <br/>
              <div class="table-responsive">
                <table class="table">
                  <tr class="active">
                    <td>Chrome</td>
                    <td class="textright lblue">5,633</td>
                  </tr>
                  <tr class="">
                    <td>Firefox</td>
                    <td class="textright lblue">3,274</td>
                  </tr>
                  <tr class="active">
                    <td>Safari</td>
                    <td class="textright lblue">756</td>
                  </tr>
                  <tr class="">
                    <td>Internet Explorer</td>
                    <td class="textright lblue">354</td>
                  </tr>
                  <tr class="active">
                    <td>Opera</td>
                    <td class="textright lblue">105</td>
                  </tr>
                </table>
              </div>
              <a href="#" class="lato size12 lblue right">More info</a> </div>
          </div>
          <div class="col-md-6 offset-0">
            <div class="pdfix"> <span class="lato size18">Mobile overview</span><br/>
              <br/>
              <div class="table-responsive">
                <table class="table">
                  <tr class="active">
                    <td>Desktop</td>
                    <td class="textright green">10,047</td>
                  </tr>
                  <tr class="">
                    <td>Mobile</td>
                    <td class="textright green">110</td>
                  </tr>
                  <tr class="active">
                    <td>Tablet</td>
                    <td class="textright green">86</td>
                  </tr>
                </table>
              </div>
              <a href="#" class="lato size12 lblue right">More info</a> </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <br/>
      <div class="line2"></div>
      <br/>
      <div class="col-md-12 offset-0">
        <div class="col-md-6 offset-0">
          <!-- Nav tabs -->
          <ul class="nav navigation-tabs2">
            <li class="active"><a href="#tab-newtopic" data-toggle="tab">Topics <span class="badge cbhide">6</span></a></li>
            <li><a href="#tab-comments" data-toggle="tab">Comments <span class="badge cbhide">1</span></a></li>
            <li><a href="#tab-blogcomments" data-toggle="tab">Blog <span class="badge cbhide">2</span></a></li>
          </ul>
          <div class="tab-content4">
            <!-- Tab 1 -->
            <div class="tab-pane active" id="tab-newtopic">
              <div class="table-responsive">
                <div class="fixedtopic">
                  <table class="tablehover">
                    <tr>
                      <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                      <td> <span class="dark">Load Container Content</span><br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                      <td class="cwth">
                        <input type="checkbox" class="">
                      </td>
                    </tr>
                  </table>
                  <div class="line3"></div>
                  <table class="tablehover">
                    <tr>
                      <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                      <td> <span class="dark">Customize Twitter api & add sign up/login</span><br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                      <td class="cwth">
                        <input type="checkbox" class="">
                      </td>
                    </tr>
                  </table>
                  <div class="line3"></div>
                  <table class="tablehover">
                    <tr>
                      <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                      <td> <span class="dark">Changing top Nav text colors</span><br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                      <td class="cwth">
                        <input type="checkbox" class="">
                      </td>
                    </tr>
                  </table>
                  <div class="line3"></div>
                  <table class="tablehover">
                    <tr>
                      <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                      <td> <span class="dark">Load Container Content</span><br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                      <td class="cwth">
                        <input type="checkbox" class="">
                      </td>
                    </tr>
                  </table>
                  <div class="line3"></div>
                  <table class="tablehover">
                    <tr>
                      <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                      <td> <span class="dark">Customize Twitter api & add sign up/login</span><br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                      <td class="cwth">
                        <input type="checkbox" class="">
                      </td>
                    </tr>
                  </table>
                  <div class="line3"></div>
                  <table class="tablehover">
                    <tr>
                      <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                      <td> <span class="dark">Changing top Nav text colors</span><br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                      <td class="cwth">
                        <input type="checkbox" class="">
                      </td>
                    </tr>
                  </table>
                </div>
                <br/>
                <div class="input-group">
                  <input type="text" class="form-control cfctrl">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Send</button>
                  </span> </div>
                <!-- /input-group -->
              </div>
            </div>
            <!-- End of Tab 1 -->
            <!-- Tab 2 -->
            <div class="tab-pane" id="tab-comments">
              <div class="table-responsive">
                <table class="tablehover">
                  <tr>
                    <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                    <td> <span class="dark">Customize Twitter api & add sign up/login</span><br/>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                    <td class="cwth">
                      <input type="checkbox" class="">
                    </td>
                  </tr>
                </table>
                <br/>
                <div class="input-group">
                  <input type="text" class="form-control cfctrl">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Send</button>
                  </span> </div>
              </div>
            </div>
            <!-- End of Tab 2 -->
            <!-- Tab 3 -->
            <div class="tab-pane" id="tab-blogcomments">
              <div class="table-responsive">
                <table class="tablehover">
                  <tr>
                    <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                    <td> <span class="dark">Changing top Nav text colors</span><br/>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                    <td class="cwth">
                      <input type="checkbox" class="">
                    </td>
                  </tr>
                </table>
                <div class="line3"></div>
                <table class="tablehover">
                  <tr>
                    <td><img src="../images/dash/no-avatar.jpg" alt=""/></td>
                    <td> <span class="dark">Customize Twitter api & add sign up/login</span><br/>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et dictum urna. Donec et tortor ullamcorper, tempor ante eu, rhoncus ligula. </td>
                    <td class="cwth">
                      <input type="checkbox" class="">
                    </td>
                  </tr>
                </table>
                <br/>
                <div class="input-group">
                  <input type="text" class="form-control cfctrl">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Send</button>
                  </span> </div>
              </div>
            </div>
            <!-- End of Tab 3 -->
          </div>
        </div>
        <div class="col-md-6 cpadding01"> <span class="lato size18">Server stats</span><br/>
          <br/>
          <div class="progress2 progress-striped">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> </div>
          </div>
          <span class="lato size13 grey">Disk space usage: 1,746.5 / 50,000 MB</span> <br/>
          <br/>
          <br/>
          <div class="progress2 progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
          </div>
          <span class="lato size13 grey">Monthly Bandwidth Transfer: 14,706.1 / 30.000</span> <br/>
          <br/>
          <br/>
          <div class="progress2 progress-striped">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> </div>
          </div>
          <span class="lato size13 grey">Subdomains: 7/15</span> <br/>
          <br/>
          <br/>
          <div class="progress2 progress-striped active">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> </div>
          </div>
          <span class="lato size13 grey">All SQL Databases : 6/8</span> <br/>
          <br/>
          <br/>
          <div class="progress2 progress-striped active">
            <div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> </div>
          </div>
          <span class="lato size13 grey">Email Accounts: 8 / 10</span> </div>
      </div>
    </div>
    <!-- END OF TAB 1 -->
    <!-- DROPDOWN 1 -->
    <div class="tab-pane padding40" id="dropdown1"> dropdown1 </div>
    <!-- END OF DROPDOWN 1 -->
    <!-- DROPDOWN 2 -->
    <div class="tab-pane padding40" id="dropdown2"> Updates </div>
    <!-- END OF DROPDOWN 2 -->
    <!-- TAB 2 -->
    <div class="tab-pane" id="posts">
      <div class="padding40"> Posts - comingsoon </div>
    </div>
    <!-- END OF TAB 2 -->
    <!-- TAB 3 -->
    <div class="tab-pane" id="media">
      <div class="padding40"> Media - comingsoon </div>
    </div>
    <!-- END OF TAB 3 -->
    <!-- TAB 4 -->
    <div class="tab-pane" id="pages">
      <div class="padding40"> Pages - comingsoon </div>
    </div>
    <!-- END OF TAB 4 -->
    <!-- TAB 5 -->
    <div class="tab-pane" id="comments">
      <div class="padding40"> Comments - comingsoon </div>
    </div>
    <!-- END OF TAB 5 -->
    <!-- TAB 6 -->
    <div class="tab-pane" id="forums">
      <div class="padding40"> Forums - comingsoon </div>
    </div>
    <!-- END OF TAB 6 -->
    <!-- TAB 7 -->
    <div class="tab-pane" id="topics">
      <div class="padding40"> Topics - comingsoon </div>
    </div>
    <!-- END OF TAB 7 -->
    <!-- TAB 8 -->
    <div class="tab-pane" id="replies">
      <div class="padding40"> Replies - comingsoon </div>
    </div>
    <!-- END OF TAB 8 -->
    <!-- TAB 9 -->
    <div class="tab-pane" id="appearance">
      <div class="padding40"> Appearance - comingsoon </div>
    </div>
    <!-- END OF TAB 9 -->
    <!-- TAB 10 -->
    <div class="tab-pane" id="plugins">
      <div class="padding40"> Plugins - comingsoon </div>
    </div>
    <!-- END OF TAB 10 -->
    <!-- TAB 11 -->
    <div class="tab-pane" id="users">
      <div class="padding40"> Users - comingsoon </div>
    </div>
    <!-- END OF TAB 11 -->
    <!-- TAB 12 -->
    <div class="tab-pane" id="tools">
      <div class="padding40"> Tools - comingsoon </div>
    </div>
    <!-- END OF TAB 12 -->
    <!-- TAB 13 -->
    <div class="tab-pane" id="settings">
      <div class="padding40"> Settings - comingsoon </div>
    </div>
    <!-- END OF TAB 13 -->
  </div>
  <!-- End of Tab panes from left menu -->
</div>
</div>
				<!-- END OF RIGHT CPNTENT -->
			
			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->			
			

			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
@stop