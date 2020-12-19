@extends('backend.layouts.master')
@section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Lecture Videos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lecture Videos</li>
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
               <h3>Class One Lecture Videos
                <a class="btn btn-success float-right" href="{{route('setups.assign.files.create')}}">

                  <i class="fa fa-plus-circle"></i>Add Class One Video Lists</a>
                  
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Subject</th>
                      <th>Date</th>
                      <th>View</th>
                      <th>Download</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($file as $key=>$data)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$data->subject}}</td>
                      <td>{{$data->date}}</td>
                      <td><a href="/files/{{$data->id}}">View</a></td>
                      <td><a href="/file/download/{{$data->file}}">Download</a></td>
                    
                     
                    </tr>
                    @endforeach
                  </tbody>
                 </table>
               
              
              </div><!-- /.card-body -->
            </div>
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