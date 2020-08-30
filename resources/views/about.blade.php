@extends('layouts.public')

@section('content')

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>About MedJobs</h2></div>
						<div class="about_text">
						<div class="section_title"><h2>We Provide All KInds Of Medical Job Opportunities</h2></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex. Praesent luctus erat sit amet tortor aliquam bibendum. Nulla ut molestie augue, scelerisque consectetur quam. Dolor sit amet, consectetur adipiscing elit. Cura bitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellentesque in luctus ex.</p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="images/black4.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>

				

	

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>We Provide For You All Medical Job Opportunities</h2></div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="images/team_1.png" alt=""></div>
						<div class="team_member_info">
							<div class="team_member_name"><a href="#">Dr. Melissa Smith</a></div>
							<div class="team_member_title">Cardiologist</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="images/team_2.png" alt=""></div>
						<div class="team_member_info">
							<div class="team_member_name"><a href="#">Dr. Josh Henderson</a></div>
							<div class="team_member_title">Plastic Surgeon</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="images/team_3.png" alt=""></div>
						<div class="team_member_info">
							<div class="team_member_name"><a href="#">Dr. Christinne Jones</a></div>
							<div class="team_member_title">Pediatrist</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="images/team_4.png" alt=""></div>
						<div class="team_member_info">
							<div class="team_member_name"><a href="#">Dr. William Stan</a></div>
							<div class="team_member_title">General Practicioner</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="button about_button"><a href="/joblistings">View Job Listings</a></div>

	

@endsection