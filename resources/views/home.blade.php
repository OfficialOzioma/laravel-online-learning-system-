
@extends('layouts.job')
<style type="text/css">
 .avatar{
     border-radius:100%;
     max-width : 200px;
 }
 </style>
@section('content')


<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title service text-center trans_200">
            <h2>User Dashboard</h2>
            @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
            @endif
					</div>
				</div>
			</div>
			</div>
		<div class="container">
			<div class="panel panel-default text-center">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">

            @if(Auth::user()->dp)
                    <img src="storage/profile/{{Auth::user()->dp}}" width="300px" 
                   				 class="avatar" alt="Add Your picture">
            @else 
                    <img src="images/emptyimage.jpeg" width="300px" 
                   				 class="avatar" alt="Add Your picture">
            @endif	  
					<!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" ">
                        {{ csrf_field() }}
						<input type="file" name="profile">
                     </form><br><br><hr> -->
					 <ul>
 						<li> <a class='btn btn-success' href="{{ route('editUser') }}">Edit Profile details</a> </li>
					 </ul>
						</div>	 
					<div class="col-md-8">
						<div class="top_bar_item" style="color:green;">{{ Auth::user()->name }} &nbsp &nbsp</div>
						<a class='btn btn-danger' href="{{ route('logout') }}" style="color:white;"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
										<h1>Applied Jobs</h1>
									<hr><hr>
					
                    @if(count($applied_jobs) > 0)

                @foreach($applied_jobs as $job)
                <h3>{{$job->job_title}}</h3>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Requirment</th>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $job->job_title }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->requirement }}</td>
                            <td>{{ $job->location }}</td>
                            <td>{{ $job->salary_range }}</td>
                            
                          </tr>
                        </tbody>
                    </table>

                    <cite style="float:left">Applied On: {{date('M j, Y h:i', strtotime($job->updated_at))}}</cite>
                    <hr>
                @endforeach
                @else
                <h4>You have not applied for any job</h4>

                @endif
                	</div>
					
			</div>
		</div>
						
	</div>
				

			</div>
			</div>
			
	
	</div>




@endsection
