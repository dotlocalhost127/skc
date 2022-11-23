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
                <h3 class="box-title">User List</h3>
                <a href="{{ route('users.AddUser') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">
                   Add User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Role</th>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($allData as $key => $user)
                            
                       
                          <tr>
                              <td>{{ $user->role }}</td>                                
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->phone }}</td>
                              <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info"> Edit</a>
                            <a href=" {{ route('users.Delete', $user->id) }} " id="delete" class="btn btn-danger"> Delete</a>
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