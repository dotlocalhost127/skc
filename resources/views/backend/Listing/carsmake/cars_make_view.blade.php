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
                <h3 class="box-title">Car make  List</h3>
                <a href="{{ route('listing.Add_make') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">
                   Add User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Make</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($viewMake as $key => $make)
                            
                       
                          <tr>
                              <td>{{ $key+1 }}</td>                                
                              <td>{{ $make->make }}</td>
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