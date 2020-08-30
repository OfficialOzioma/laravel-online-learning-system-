@extends('layouts.admin')

<style type="text/css">
 .avatar{
     border-radius:100%;
     max-width : 100px;
 }
</style>
@section('content')
<div class="container"> 
    <div class="row"> 
    
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
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">  
                        Dashboard
                     </div>
                     <div class="col-md-4">
                     <form  method="POST" action=''
                         enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="input-group">
                                <input  type="text" class="form-control" name="search"
                                 placeholder="Search For..." required autofocus>
                                <span class="input-group-btn">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                                </span>
                        </div>
                        </form>
                     </div>
                </div>
                </div>

                <div class="panel-body">
              
               <!-- <div class="col-md-3">
                    <img src="" 
                    class="avatar" alt=""> 
                   <p class="lead"></p>
                   <p class="lead"></p>
                </div> -->
<!--               
                <div class="col-md-2">
                    <img src="images/black5.jpg" 
                    class="avatar" alt=""> 
                  
                </div> -->
               
                <div class="col-md-12">
               

                @if(count($applications) > 0)

                @foreach($applications->all() as $application)
                <div class="row">
                <div ></div>
                <h1>{{$application->application_title}}</h1>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Applicant Name</th>
                            <th scope="col">Applicant Email</th>
                            <th scope="col">Applicant Number</th>
                            <th scope="col">Applicant CV</th>
                            <th scope="col">Application Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $application->user->name }}</td>
                            <td>{{ $application->user->email }}</td>
                            <td>{{ $application->phone }}</td>
                            <td> <a href="/viewPDF/{{$application->cv}}" target="_blank">Click To view</a></td>
                            <td>{{ $application->created_at }}</td>
                            
                          </tr>
                        </tbody>
                    </table>
                </div>
                    
                
                                        <hr>
                @endforeach
                @else
                <h2>NO application POST AVAILABLE</h2>

                @endif
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





