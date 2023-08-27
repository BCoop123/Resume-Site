<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Brandon's Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo 'Brandon Cooper' ?></h1>
							    <div class="title mb-3"><?php echo 'Associate Data Developer/Analyst' ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:brandoncooper859@gmail.com" target="_blank"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo 'brandoncooper859@gmail.com' ?></a></li>
								    <li><a class="text-link" href="tel:+18596288871" target="_blank"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo '859-628-8871' ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="https://www.linkedin.com/in/brandon-cooper-0" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo 'www.linkedin.com/in/brandon-cooper-0' ?></a></li>
					                <li class="mb-3"><a class="text-link" href="https://github.com/BCoop123" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo 'https://github.com/BCoop123' ?></a></li>
					                <li><a class="text-link" href="https://bcoop123.github.io/ASE_220_Assignment_1_Cooper/" target="_blank"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo 'https://bcoop123.github.io/' ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Summary' ?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo 'I am a college student pursuing a degree in Computer Information Technology. My studies are currently focused on Web Server and Database Administration. I am proficient in Windows and UNIX Systems. I enjoy scripting and am adept in Python and Java. I have experience in Oracle SQL Developer, SQL*Plus, and Apache Web Server. I am currently seeking internship opportunities in my chosen field.' ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Work Experience' ?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo 'Data Management Intern' ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo 'MassMutual Ascend' ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo '2023 - Present' ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo 'In my role, I actively participated in every phase of designing complex data storage components according to given specifications. My tasks were not just limited to routine development but also encompassed moderately intricate maintenance and resolving issues with our data warehouse systems.' ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'My Responsibilities Included:' ?></h4>
										    <p><?php echo 'During my internship I worked on many projects within the Data Warehouse and worked collaborativly with all members of my team.' ?></p>
										    <ul>
											    <li><?php echo 'I played an active role in the development and maintenance of relational databases used for data storage and mining.' ?></li>
											    <li><?php echo 'I was responsible for designing and testing the data warehouse systems.' ?>
												</li>
											    <li><?php echo 'I routinely troubleshooted and resolved any issues related to data load and data retrieval.' ?></li>
											    <li><?php echo 'I diligently maintained documentation relating to operations, data warehouse objects, and source systems.' ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Technologies used:' ?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'SQL' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'TransactSQL' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'SQL Server Management Studio' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'SSIS' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'JAMS' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'iCEDQ' ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo 'Pit Gate Security' ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo 'Florence Speedway Inc.' ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo '2017 - Present' ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo 'In my role, I ensured all payments were made before entry. I checked coolers for compliance with our guidelines. I welcomed spectators and drivers. I also monitored traffic to prevent unauthorized access, keeping the premises secure.' ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Achievements' ?></h4>
										    <p><?php echo 'During my time in this role, I saved the track thousands by stopping non-paying customers from entering into the pit area. I have also prevented possible incidents related to alchohol consumption in high traffic areas.' ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Related Skills:' ?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Diligance' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Customer Relations' ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Greeter' ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Skills &amp; Tools' ?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'SQL' ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'JavaScript' ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'Python' ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'Node.js' ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'HTML/CSS' ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo 'Others' ?></h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'DevOps' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Code Review' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Git' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Unit Testing' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Agile' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Scrum' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Web Dev' ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Java' ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Education' ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo 'BSc in Computer Information Technology' ?></div>
								        <div class="resume-degree-org"><?php echo 'Northern Kentucky University' ?></div>
								        <div class="resume-degree-time"><?php echo '2020 - 2023' ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Awards' ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo 'Dean\'s List' ?></div>
								        <div class="resume-award-desc"><?php echo 'Issued by Northern Kentucky University.' ?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo 'Outstanding Freshman Award' ?></div>
								        <div class="resume-award-desc"><?php echo 'Issued by Northern Kentucky University.' ?></div>
								    </li>
							    </ul>
						    </div>
					    </section>
						<!--//interests-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Interests' ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo 'Hiking' ?></li>
								    <li class="mb-1"><?php echo 'Online Gaming' ?></li>
								    <li class="mb-1"><?php echo 'Grilling' ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Projects' ?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/bbb.png" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'BBB Music Site' ?></h5>
									<p class="card-text"><?php echo 'Social media site where users post about songs, artists, and albums.' ?></p>
									<a class="btn btn-outline-primary" href="https://github.com/BCoop123/BBB-Music-Site" target="_blank">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/dog.png" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'Animal Shelter Site' ?></h5>
									<p class="card-text"><?php echo 'Javascript powered website for an animal shelter.' ?></p>
									<a class="btn btn-outline-primary" href="https://bcoop123.github.io/ASE_220_Assignment_2/" target="_blank">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/unity.png" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'Unity Driving Simulation' ?></h5>
									<p class="card-text"><?php echo 'Game created as a part of the Unity create with code course.' ?></p>
									<a class="btn btn-outline-primary" href="https://github.com/BCoop123/Unity-Driving-Simulation" target="_blank">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo 'Designed with '?><span class="sr-only">love</span><i class="fas fa-heart"></i><?php echo ' by Brandon Cooper' ?></small>
    </footer>

    

</body>
</html> 

