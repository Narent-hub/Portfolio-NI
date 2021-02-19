<?php require_once("includes/DB.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/sessions.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="img/favicon.png" />
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link
			href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@600&family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
		<script src="https://kit.fontawesome.com/8bd4691e2f.js"></script>
		

		<title>Narent's Portfolio</title>
		<!-- CSS Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
		<!-- JS Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<?php 
					echo errorMessage();
					echo successMessage();
				?>
					<div class="top">
						<img class="top-cloud" src="img/cloud.png" alt="" />
						<h1>I'm Narent.</h1>
						<h2 style="font-size:20px;">Web Developer in making...</h2>
						<img class="bottom-cloud" src="img/cloud.png" alt="" />
						<div class="col-lg-12">
						<img src="img/mountain.png" alt="" />
						</div>
					</div>
				</div>
			</div>
			<hr class="hr" />
			<div class="row observer-section">
			<!-- intersection observer -->
				<div class="col-lg-12 middle-container">
					<div class="profile fade-in">
						<img class="me" src="img/roundedusa.png" alt="" />
						<h2>Hello.</h2>
						<p class="intro">
							<em>Web Developer</em> and a network engineer. Also, i love sport
							and psychology.
						</p>
					</div>
				</div>
			</div>
			<hr class="hr">
			<div class="row">
			<!-- intersection observer -->
				<div class="skills">
					<h2>My Skills.</h2>
					<div class="skill-row">
						<img class="img-skills slide-in from-left" src="img/skills.gif" alt="" />
						<h3 class="slide-in from-right">Web Development</h3>
						<p class="slide-in from-right">HTML5, CSS3, JavaScript, PHP, GoLang, MSSQL</p>
					</div>
					<div class="skill-row">
						<img class="img-skills1 slide-in from-right" src="img/network.jpg" alt="" />
						<h3 class="slide-in from-left">Network Engineer</h3>
						<p class="slide-in from-left">
							Implementing logical/physical layer and implementing technologies
							which provides communication between hosts worldwide.
						</p>
					</div>
				</div>
			</div>	
			<hr class="hr" />
			<div class="row">
			<!-- intersection observer -->
				<div class="col-lg-12 mb-5 contact-me">
					<h2>Get In Touch</h2>
					<h3>You love sport/fitnes and psychology as much as i do?</h3>
					<p class="cMessage">
						Let's talk about how important they are! We can cover project
						ideas, coding and network engineering too!
					</p>

					<button data-toggle="modal" data-target="#addData" class="btn btn-info" >CONTACT ME</button>
			</div>
	

		</div>

			<!----------- MODAL FOR CONTACT ME ------------->
			<div class="modal fade" id="addData">
			<div class="modal-dialog" role="document" >
				<div class="modal-content">
			  		<div class="modal-header text-center">
			    		<h4 class="modal-title w-100 font-weight-bold"  id="addLabel" >Contact Me</h4>
			    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			      			<span aria-hidden="true">&times;</span>
			    		</button>
			  		</div>
			  		<form method="POST" id="addForm">
				      	<div class="modal-body mx-3">
			        		<div class="md-form ">
			          			<label data-error="wrong" data-success="right">First Name:</label>
			          			<input type="text" name="name" id="name" class="form-control validate">
			        		</div>
			        		<div class="md-form">
			          			<label data-error="wrong" name="surname" data-success="right">Last name:</label>
			          			<input type="text" name="surname" id="surname" class="form-control validate">
			        		</div>
			        		<div class="md-form ">
			        			<label data-error="wrong" name="email" data-success="right" for="orangeForm-name">E-Mail Address:</label>
			          			<input type="email" name="email" id="email" class="form-control validate">
			        		</div>
			        		<div class="md-form ">
								<label data-error="wrong" name="mesazhi" data-success="right" for="orangeForm-email">Message:</label>
			          			<textarea type="text" name="mesazhi" id="mesazhi" class="form-control validate"></textarea>
			        		</div>
			      		</div>
			      		<div class="modal-footer d-flex justify-content-center">
			       			<button type="submit" onclick="saveData()" class="btn btn-info">Submit</button>
			      		</div>
			      	</form>
				</div>
			</div>
		</div>
		<!----------- FINISH MODAL FOR CONTACT ME ------------->
		</div>
		<div class="row">
			<div class="col-lg-12 bottom-container ">
				<h2>
					<a href="https://github.com/Narent-hub">
						<i class="fab fa-github footer-link" id="git"></i>
					</a>
					<a href="https://www.linkedin.com/in/narent-ismaili/">
						<i class="fab fa-linkedin footer-link" id="linkedin"></i>
					</a>
					<a href="https://twitter.com/NarentIsmailii">
						<i class="fab fa-twitter-square footer-link" id="twitter"></i>
					</a>
				</h2>
				<p>© 2020 Narent Ismaili.</p>
			</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/observers.js"></script>
	s</body>
	
	<script>
	/* Funksioni per modal*/ 
		function saveData(){
		var name = $('#name').val();
		var surname = $('#surname').val();
		var email = $('#email').val();
		var mesazhi = $('#mesazhi').val();
		$.ajax({
			type: "POST",
			url: "action.php?p=add",
			data: "name="+name+"&surname="+surname+"&email="+email+"&mesazhi="+mesazhi,
			success:function(data){
				$("#addForm")[0].reset();
				//viewData(1);
			}
		});
	}
	</script>
</html>
