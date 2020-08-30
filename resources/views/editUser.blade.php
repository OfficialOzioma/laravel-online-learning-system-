@extends('layouts.job')

@section('content')

<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title service text-center trans_200">
						<h2>Edit Your Details</h2>
                    </div>
                    @if (session('response'))
                       <div class="alert alert-warning">
                            {{ session('response') }}
                        </div>
                    @endif
				</div>
			</div>
			</div><hr>
		<div class="container">
			<div class="panel panel-default text-center">
					<div class="row">
                        <div class="col-md-3"></div>
					    <div class="col-md-9">
                            <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('updateUser') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <!-- <label for="name" class="col-md-4 control-label">Name</label> -->

                            <div class="col-md-6">
                                <input placeholder="Enter Your Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-6">
                                <input placeholder="Enter Your Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') ??  $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            

                        </div>
                        <!-- <label for="phone" class="col-md-4 control-label">phone</label> -->
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <!-- <label for="phone" class="col-md-4 control-label">Phone</label> -->

                            <div class="col-md-6">
                            <input placeholder= "Enter Your Phone Number" id="phone" type="number" class="form-control" name="phone"  value="{{ old('phone') ??  $user->phone }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="file" class="col-md-4 control-label">Upload Image</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="dp" type="file" class="form-control" name="dp">
                                @if ($errors->has('dp') )
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dp') }}</strong>
                                        
                                    </span>
                                @endif
                            <!-- </div> -->
                           
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Click To Edit
                                </button><br>
                                
                                
                            </div>
                        </div>
                    </form>
					
                   
                	</div>
                  
                    
					
			</div>
		</div>
						
	</div>
				

			</div>
			</div>
			
	
	</div>




@endsection
