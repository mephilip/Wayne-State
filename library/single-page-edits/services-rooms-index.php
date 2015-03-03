<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Wayne State University, WSU, Library System, Libraries" />
	<meta name="description" content="The online resources and services of the Wayne State University Libraries" />
	<meta name="author" content="libwebmaster@wayne.edu" />
	<meta name="Copyright" content="Copyright (c) <?php echo(date('Y')); ?> Wayne State University" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="/inc/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/ico/style.css">
  <link href="//library.wayne.edu/inc/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/pattern-lib/css/style.css">

	<title>Wayne State University Libraries : Rooms / Room Reservations</title>

	<script src="/pattern-lib/js/jquery.min.js"></script>
    <script src="/pattern-lib/js/bootstrap.min.js"></script>
    <script src="/pattern-lib/js/main.js"></script>
    <style>
	    
		#reserve{
			background: #066;
			padding: 10px 15px 12px 15px;
			color:#fff;
			text-rendering: optimizeLegibility !important;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			background:#069e87;
			background: linear-gradient(to bottom, #069e87 0, #046d5d 100%);
			text-decoration: none;
			font-weight: bold;
			font-size: 1.2em;
			transition: all ease .2s !important;
			border-radius: 4px;
			line-height: 1.42857143;
			text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
			border: 1px solid rgba(0,0,0,.02);
			border-bottom: 1px solid rgba(0,0,0,.5);
			border-left: 1px solid rgba(0,0,0,.5);
			border-right: 1px solid rgba(0,0,0,.5);
		}
		#reserve:hover{
			color: #fff;
		}
		#reserve:focus{
			background: linear-gradient(to bottom, #046d5d 0, #069e87 100%);
			transition: all ease .2s;
			
		}
		@-moz-document url-prefix() {
			fieldset { display: table-cell; }
			#reserve{
				padding: 13px 15px 10px 15px;
			}
		}
	</style>
</head>
<body>
	<div class="page" id="wrap">
		<?php include($_SERVER['DOCUMENT_ROOT'].'inc/header.php'); ?>
		<div id="main" class="container">
			<article>
				<aside class="sidebar">
					<?php include($_SERVER['DOCUMENT_ROOT'].'inc/sidebar-services.php'); ?>	
				</aside>
				<section class="main">	
						<h1 class="section-title">Study Rooms / Room Reservations</h1>
						<h3>Wayne State University Libraries</h3>
						<hr/>
						<h4 id="policies" style="padding:20px 10px 16px 10px;">Policies for scheduling a group study room:</h4>
						<div class="text">
							<ul>
								<li>Rooms may be booked for groups of 4 or more depending on many people the room can accommodate.  Single person use of any room is strictly prohibited.</li>
								<li>Rooms will be available between the hours of 8am-11pm. </li>
								<li>Groups may only reserve a room for <strong>up to two hours per 24 hour period.</strong></li>
								<li>Rooms may only be <strong>reserved up to four days in advance.</strong></li>
								<li>If you do not receive an email confirmation, your reservation is not complete.</li>
								<li>Food is strictly prohibited in ALL study rooms. Any student caught with food in a study room the entire group will be asked to leave and the person made the reservation will blocked from booking any study for the rest of the semester.</li>
								<li>Students are responsible for cleaning up after themselves.</li>
								<li>In the event that a room is not claimed by the reservation holder within 15 minutes of the beginning of their reservation, the room will become available on a first come, first served basis.</li>
								<li>Group study rooms must be vacated <strong>15 minutes before closing.</strong></li>
								<li>Report any damaged found in the room upon arrival otherwise you may be held accountable.</li>
								<li>If room is not occupied when your scheduled time arrives please see either a library monitor or the UGL Checkout desk to gain access to the room.</li>
								<li>No equipment is to be removed from the room for any purpose.</li>
					    </div>
					    
					    <div class="table-responsive  table">
							<table class="table table-bordered text-center">
								<thead>
									<tr>
										<th class="text-center">Room</th>
										<th class="text-center">Occupants</th>
										<th class="text-center">Equipment</th>
										<th class="text-center" colspan="2">Outlets</th>
										<th class="text-center" colspan="2">Writing Surfaces</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>3539</td>
										<td>14-16</td>
										<td>NA</td>
										<td>13 Plugs</td>
										<td>8 USB Ports</td>
										<td>Wall dry erase canvas</td>
										<td>1 clear movable surface</td>
									</tr>
									<tr>
										<td>3542</td>
										<td>12-14</td>
										<td>20" Wall Mounted Monitor<br/>VGA/HDMI Cable Equipped</td>
										<td>13 Plugs</td>
										<td>6 USB Ports</td>
										<td>Wall dry erase canvas</td>
										<td>1 clear movable surface</td>
									</tr>
									<tr>
										<td>3543</td>
										<td>14-16</td>
										<td>20" Wall Mounted Monitor<br/>VGA/HDMI Cable Equipped</td>
										<td>8 Plugs</td>
										<td>4 USB Ports</td>
										<td>Wall dry erase canvas</td>
										<td>NA</td>
									</tr>
								</tbody>
  							</table>
						</div>
						
						<div class="text ">
							<p class="text-center">Reservations that do no comply with these guidelines will be deleted. Group study names should follow common deceny standards. Reservations with inappropriate names will be deleted.</p>
							<div class="text-center" style="margin: 40px 0px 40px 0px;">
								<a id="reserve" href="https://uglstudyrooms.library.wayne.edu">Reserve a Group Study Room</a>
							</div>
							
							<p class="text-center">By clicking the above green box you acknowledge that you have read and accept all the above conditions for using the study rooms.</p>
							<hr/>
							<p>For more information, see our <a id="click_me" href="#policies">Study Room Policies</a> and the <a href="http://library.wayne.edu/info/policies/behavior.php">Standard of Behaviors</a>.</p>
							
							<p>For questions please contact:<br/>
								Undergraduate library 313-577-5121
							</p>


						</div>
						
						
						
				</section>
			</article>
		</div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'inc/footer.php'); ?>
	<script>
		$(document).ready(function() {
			$('#click_me').on('click', function(e){
				$('html, body').animate({scrollTop: $("#policies").offset().top - 20}, 200);
				$('#policies').addClass('bg-danger');
				e.preventDefault();
			});		
		});
	</script>
</body>
</html>
















