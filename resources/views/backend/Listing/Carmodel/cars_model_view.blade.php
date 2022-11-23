@extends('admin.admin')
@section('main-container')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      <section class="content">
        <div class="row">
      
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Car Model  List</h3>
                <a href="{{ route('listing.Add_Model') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">
                   Add Model</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Model</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($viewmodel as $key => $model)
                            
                       
                          <tr>
                              <td>{{ $key+1 }}</td>                                
                              <td>{{ $model->model }}</td>
                              <td>
                            <a href="" class="btn btn-info"> Edit</a>
                            <a href="  " id="delete" class="btn btn-danger"> Delete</a>
                              </td>
                             
                          </tr>
                          @endforeach
                      </tbody>
                   
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

           
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>



@endsection