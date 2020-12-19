@extends('backend.layouts.master')
@section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Assign Subject</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assign Subjects</li>
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
               <h3>Assign Subjects List
                <a class="btn btn-success float-right" href="{{route('setups.assign.subject.add')}}"><i class="fa fa-plus-circle"></i>Add Assign Subjects</a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Class Name</th>
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $value)
                    <tr class="{{$value->id}}">
                      <td>{{$key+1}}</td>
                      <td>{{$value['student_class']['name']}}</td>
                     
                      <td>
                      @if(Auth::user()->usertype=='Admin')
                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('setups.assign.subject.edit',$value->class_id)}}"><i class="fa fa-edit"></i></a>
                       @endif
                        <a title="Details" class="btn btn-sm btn-success" href="{{route('setups.assign.subject.details',$value->class_id)}}"><i class="fa fa-eye"></i></a>
                     
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