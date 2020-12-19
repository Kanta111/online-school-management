@if(Auth::user()->usertype=='Admin')
@extends('backend.layouts.master')
@section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Video Lectures</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Video Lectures</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
               <h3>
               Class One

               <a class="btn btn-success float-right" href="{{route('setups.assign.files.index')}}"><i class="fa fa-list"></i>Class One Video Lectures</a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 
              
             
               <form action="/files" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-4">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control">
                    
                  </div>
                  
                <div class="form-group col-md-4">
                    <label for="date">Date</label>
                    <input type="text" name="date" class="form-control">
                    
                  </div>


                   <div class="form-group col-md-4">
                    <label for="file">File</label>
                    <input type="file" name="file" class="form-control">
                     
                  </div>

                  
                   

                  

                  <div class="form-group col-md-6">
                  
                    <input type="submit" value="submit" class="btn btn-primary">
                  </div>



                 
                  </div>
               
                
                
               </div><!-- /.card-body -->
            </div>
          </form>
            <!-- /.card -->

          
            
            </div>
            <!-- /.card -->
          </section>
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
@endsection
@endif