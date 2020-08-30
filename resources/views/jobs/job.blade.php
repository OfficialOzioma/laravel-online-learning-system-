@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
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
            <div class="panel panel-default">
                <div class="panel-heading">Medical jobs  Upload</div>

                <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{route('admin.addjob')}}"
                  >
                        {{ csrf_field() }}

                        
                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label for="job_title" class="col-md-4 control-label">Job Title:</label>

                            <div class="col-md-6">
                                <input id="job_title" type="text" class="form-control" name="job_title"
                                 value="{{ old('job_title') }}" required autofocus placeholder='eg. Neurosurgeon'>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->job('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description:</label>

                            <div class="col-md-6">
                                <textarea id="description"  rows="4" type="text" class="form-control" 
                                name="description"
                                 value="{{ old('description') }}" required autofocus 
                                 placeholder='eg. Brain surgeon and many more'></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                           
                        
                            <div class="form-group{{ $errors->has('requirement') ? ' has-error' : '' }}">
                            <label for="requirement" class="col-md-4 control-label">Requirement:</label>

                            <div class="col-md-6">
                                <textarea id="requirement"  rows="4" type="text" class="form-control" 
                                name="requirement"
                                 value="{{ old('requirement') }}" required autofocus 
                                 placeholder='6 years medical experice and many more'></textarea>

                                @if ($errors->has('requirement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('requirement') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            
                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location:</label>

                            <div class="col-md-6">
                                <input id="location"  rows="4" type="text" class="form-control" 
                                name="location"
                                 value="{{ old('location') }}" required autofocus placeholder='eg. California'>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('salary_range') ? ' has-error' : '' }}">
                            <label for="salary_range" class="col-md-4 control-label">Salary Range</label>

                            <div class="col-md-6">
                                <input id="salary_range" type="text" class="form-control" name="salary_range"
                                 value="{{ old('salary_range') }}" required autofocus placeholder='$200-$500'>

                                @if ($errors->has('salary_range'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary_range') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Upload Job 
                                </button>
                            </div>
                        </div>
                            
                            </form>

                       
            </div>
        </div>
    </div>
</div>
@endsection
