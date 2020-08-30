@extends('layouts.job')

@section('content')

	 

	<div class="services">
		<div class="container">
			<div class="row">
			
				<div class="col">
					<div class="section_title service text-center trans_200"><h2>Available Medical Job Listings</h2></div>
					@if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                 @endif
				</div>
			</div>
			<div class="row services_row">
				@if(count($jobs) > 0)
				@foreach($jobs->all() as $job)
				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">{{ $job->job_title }}</div>
							<div class="service_text">
								<!-- <p>{{ $job->description }}</p>
								<p>{{ $job->requirement }}</p>
								<p>{{ $job->location }}</p>
								<p>{{ $job->salary_range }}</p> -->

								<!-- <h1>{{$job->job_title}}</h1> -->
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
						  <th scope="col">Requirment</th>
                            <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  	<td>{{ $job->requirement }}</td>
                            <td>{{ $job->description }}</td>
                          </tr>
                        </tbody>
                    </table>
					<table class="table">
                        <thead class="thead-dark">
                          <tr>
						  <tr>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
						  </tr>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  	<td>{{ $job->location }}</td>
                            <td>{{ $job->salary_range }}</td>
                          </tr>
                        </tbody>
                    </table>
							</div>
							<cite style="float:left">Uploaded On: {{date('M j, Y h:i', strtotime($job->updated_at))}}</cite>
							<div class="button about_button"><a href="/application/{{$job->id}}">Apply</a></div>
						</div>
					</a>
					
				</div>
				@endforeach
                @else
                <h2>NO JOB POST AVAILABLE</h2>

                @endif
                {{$jobs->links()}}

				
			</div>
		</div>
	</div>
@endsection