
@extends('layouts.public')

@section('content')


	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/black4.png)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title" ><h1 style='color:green'>MedJobs</h1></div>
										<div class="home_text">
											<!-- <p style='color:yellow'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											 Mauris tempus vestibulum mauris quis aliquam. Integer 
											 accumsan sodales odio, id tempus velit ullamcorper id.
											  Quisque at erat eu.</p> -->
										</div>
										<div class="button home_button">
											<a href="/joblistings">Get Started</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>We Provide All KInds Of Medical Job Opportunities</h2></div>
						<div class="about_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex. Praesent luctus erat sit amet tortor aliquam bibendum. Nulla ut molestie augue, scelerisque consectetur quam. Dolor sit amet, consectetur adipiscing elit. Cura bitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellentesque in luctus ex.</p>
						</div>
						<div class="button about_button">
							<a href="/joblistings">read more</a>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="images/black3.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll" 
		data-image-src="images/departments.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_light">
					<h2>We Provide All Kinds Of Medical Job Opportunities</h2></div>
				</div>
			</div>
			<div class="row departments_row row-md-eq-height">
				
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">plastic surgery</div>
							
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">gastroenterology</div>
							
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">dentistry</div>
							
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dap ibus massa. Pellen tesque in luctus ex.</p>
						</div>
						<div class="button dept_button"><a href="/joblistings">View More Jobs</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	
	@endsection