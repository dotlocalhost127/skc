@extends('admin.admin')
@section('main-container')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
  

    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
      <form method="POST"  action="{{ route('listing.Store_Model') }}">
        @csrf    
        <div class="row">
                       <div class="col-12">	
     <div class="row">

    <div class="col md-12">
        <div class="form-group">
            <h5>Add Model <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="model" class="form-control" required data-validation-required-message="This field is required"> </div>
            
        </div>    
        </div>   
    </div>

                        				
                         
                          
                       </div>
                     </div>

                       <div class="text-xs-right">
                    <input type="submit" class="btn btn-round btn-info mb-5" value="Add Model">
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