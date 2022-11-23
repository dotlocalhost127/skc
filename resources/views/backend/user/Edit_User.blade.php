@extends('admin.admin')
@section('main-container')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
  

    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
      <form method="POST"  action="{{ route('users.Update',$editData->id) }}">
        @csrf    
        <div class="row">
                       <div class="col-12">	
     <div class="row">
    <div class="col md-6">

        <div class="form-group">
            <h5> Select Role <span class="text-danger">*</span></h5>
            <div class="controls">
                <select name="role" id="role" required=""  class="form-control">
                    <option value="" selected="" disabled="" >Select Role</option>
                    <option value="Admin" {{ $editData->role=="Admin" ? "selected" : "" }}>Admin</option>
                    <option value="Accountant"{{ $editData->role=="Accountant" ? "selected" : "" }}>Accountant</option>
                    <option value="Team leader" {{ $editData->role=="Team Leader" ? "selected" : "" }}>Team leader</option>
                    <option value="Sales person" {{ $editData->role=="Sales Person" ? "selected" : "" }}>Sales Person</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col md-6">
        <div class="form-group">
            <h5>Full Name <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="name" class="form-control" value="{{ $editData->name }}"
                 required data-validation-required-message="This field is required"> </div>
            
        </div>    
        </div>   
    </div>

    <div class="row"">
        <div class="col md-6">
            <div class="form-group">
                <h5>Email Address <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="email" name="email" class="form-control" value="{{ $editData->email }}"
                    required data-validation-required-message="This field is required"> </div>
            </div>
        </div>
        <div class="col md-6">
            <div class="form-group">
                <h5>Phone Number<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="phone" class="form-control"value="{{ $editData->phone }}"
                     required data-validation-required-message="This field is required"> </div>
            </div>
        </div>
    </div>
                        				
                         
                          
                       </div>
                   
                     </div>

                       <div class="text-xs-right">
                    <input type="submit" class="btn btn-round btn-info mb-5" value="Update">
                       </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
    
    </div>
</div>



@endsection