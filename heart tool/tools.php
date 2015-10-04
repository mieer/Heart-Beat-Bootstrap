<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Doctor Portal</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<!--style>
			.heart {
				padding: 40px 0px 0px 7px;
			}
		</style-->
	</head>
	<body>

<header class="navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">Doctor Portal</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="portal.php">Home</a>
        </li>
        <li>
          <a href="patients.php">Patients</a>
        </li>
        <li>
          <a href="tools.php">Tools</a>
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
  <div align="right">
<b id="welcome">Welcome: <i style="color: #ADADFF;"><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../logout.php">Log Out</a></b>
</div>
</header>



<!-- Begin Body -->
<div class="container">
	<div class="row">
  			<div class="col-md-3" id="leftCol">
              	
				<div class="well"> 
              	<ul class="nav nav-stacked" id="sidebar">
                  <li><a href="#sec1">General</a></li>
                  <li><a href="#sec2">Progression</a></li>
                  <li><a href="#sec3">In Practise</a></li>
                  <li><a href="#sec4">Continuous</a></li>
              	</ul>
  				</div>

      		</div>  
      		<div class="col-md-9">
              	<h2 id="sec0">Our Simple Health Tools</h2>
               Please consider applying one of our health tools. They are made for not only easy verification of your perceptions but it will also save you worrying. 
               Do note that they do not replace the knowledge or advise from our real doctors.              	
      		
           <!-- Tools Tabs -->
           
           <!-- tabs -->
<div class="container">
    <div class="row">
		<div class="col-md-12">
			<h3>Patients</h3>

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Tool 1 </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Tool 2 </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							Tool 3 </a>
						</li>
					</ul>
					<div class="tab-content">
					
					<!-- Patient Profile in Tab1 -->
						<div class="tab-pane active" id="tab_default_1">
						
						<div id="tapDiv" class="heart" style="height:220px;width:220px;background-color:#EBE0FF;color:#FBF9FF;padding: 40px 0px 0px 7px;"><h4 style="color: #97B4EF;"><p>Hold your heart with one hand</p><p>and click with your mouse on this box</p><p>every time you feel a heartbeat.</p></h4></div>
						<div>A normal resting heart rate for adults ranges from 60 to 100 beats a minute.<br>

Generally, a lower heart rate at rest implies more efficient heart function and better cardiovascular fitness.<br> For example, a well-trained athlete might have a normal resting heart rate closer to 40 beats a minute.</div>
							
							<!--script>
								lastTapSeconds = 0;
						        bpm = 0;
						
						        var tapDiv = document.getElementById("tapDiv");
						
						        function bpmCounter() { 
						
						            var tapSeconds = new Date().getTime();
						
						            bpm = ((1 / ((tapSeconds - lastTapSeconds) / 1000)) * 60);
						            lastTapSeconds = tapSeconds;            
						            tapDiv.innerHTML = '<h1 style="display:inline;">' + Math.floor(bpm) + '</h1><img style="height:150px;width:150px;" src="img/heart.png"/>';  
						        }
						
						        tapDiv.onmousedown = bpmCounter;
							</script-->
							
								<script>
								var lastTapSeconds = 0;
								var bpm = 0;
								
								//extra variabelen voor functionaliteit uitbreiding.
								var beats = [];
								var average = 0;
								var count = 0;
								
								var tapDiv = document.getElementById("tapDiv");
								
								$(tapDiv).on('click', function() {
								var tapSeconds = new Date().getTime();
								
								bpm = ((1 / ((tapSeconds - lastTapSeconds) / 1000)) * 60);
								lastTapSeconds = tapSeconds;
								tapDiv.innerHTML = '<h1 style="display:inline;">' + Math.floor(bpm) + '</h1><img style="height:150px;width:150px;" src="img/heart.png"/>';
								
								//extra functionaliteit
								beats.push(Math.floor(bpm));
								average *= count;  //average = average * count
								average += Math.floor(bpm);  //average = average + count
								count++;
								average /= count;  //average = average / count
								
								//als array entries 10 heeft bereikt geef prompt met gemiddelde bpm.
								if(beats.length >= 10) {
								alert("Average " + average);
								}
								});
								</script>
								
	
						            
								
						</div>
					<!-- End Patient Profile in Tab1 -->	
						
					<!-- Patient Profile in Tab2 -->	
						<div class="tab-pane" id="tab_default_2">
												
						<script language="javascript">
						$(window).on('message', function(e) {
						var tmp = (eval('(' +e.originalEvent.data+')'));
						window.hasOwnProperty = window.hasOwnProperty || Object.prototype.hasOwnProperty;
						if(tmp.hasOwnProperty('nhs_redirect')){
						window.location.href = tmp.nhs_redirect;
						}
						});    
						</script>

						<div id="assessment_webpart_wrapper" style="width:362px;">
						<iframe style="width:100%;height:430px;" title="self assessments" src="http://media.nhschoices.nhs.uk/tools/documents/self_assessments_js/assessment.html?ASid=67&syndicate=true" frameborder="no" scrolling="no"></iframe>
						<div id="assessment_webpart_branding" style="float:right;"><a href="http://nhs.uk/tools/" alt="content provided by NHS Choices"><img src="http://media.nhschoices.nhs.uk/tools/documents/self_assessments_js/images/syndication.png" width="264" height="38" border="0" alt="content provided by NHS Choices" /></a></div>
						</div>			            		
													
														
						</div>
					<!-- End Patient Profile in Tab2 -->
						
						
					<!-- Patient Profile in Tab3 -->	
						<div class="tab-pane" id="tab_default_3">
						
						<script language="javascript">
						$(window).on('message', function(e) {
						var tmp = (eval('(' +e.originalEvent.data+')'));
						window.hasOwnProperty = window.hasOwnProperty || Object.prototype.hasOwnProperty;
						if(tmp.hasOwnProperty('nhs_redirect')){
						window.location.href = tmp.nhs_redirect;
						}
						});  
						
						
						</script>
						<div id="assessment_webpart_wrapper" style="width:362px;">
						<iframe style="width:100%;height:435px;" title="self assessments" src="http://media.nhschoices.nhs.uk/tools/documents/self_assessments_js/assessment.html?ASid=43&syndicate=true" frameborder="no" scrolling="no"></iframe>
						<div id="assessment_webpart_branding" style="float:right;"><a href="http://nhs.uk/tools/" alt="content provided by NHS Choices"><img src="http://media.nhschoices.nhs.uk/tools/documents/self_assessments_js/images/syndication.png" width="264" height="38" border="0" alt="content provided by NHS Choices" /></a></div>
						</div>
						
						</div>
					<!-- END Patient Profile in Tab3 -->
						
						
        </div>
      </div>
    </div>  		
           
           
           <!-- END Tools Tabs-->
             
              
              
              
              	
              	
      		</div> 
  	</div>
</div>



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>