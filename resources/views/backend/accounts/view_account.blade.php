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
                <h3 class="box-title">Car Listing List</h3>
                <a href="{{ route('accounts.Add_account') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">
                   Add Accounts</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Reference</th>
                              <th width=15%>Date</th>
                              <th width=40%>Particulars</th>
                              <th>Debit</th>
                              <th>Credit</th>
                              <th>Balance</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($viewaccount as $key => $view)
                            
                       
                          <tr>
                              <td>{{ $view->reference }}</td>  
                              <td  width=15%>{{ $view->date}}</td>                              
                              <td width=40%>{{ $view->particulars}}</td>
                              <td>{{ $view->debit}}</td>
                              <td>{{ $view->credit}}</td>
                              <td>{{ $view->balance}}</td>
                              <td>
                            <a href="" class="btn btn-info" style="margin: 10px;"> Edit</a>
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