@extends('admin.admin')
@section('main-container')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
  

    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title"> Add Accounts Details</h4>
            </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
      <form method="POST"  action="{{ route('accounts.accounts.Store') }}">
        @csrf    
        <div class="row">
                       <div class="col-12">	
     

    <div class="row">

        <div class="col md-6">
            <div class="form-group">
                <h5>Reference <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="reference" class="form-control" required data-validation-required-message="This field is required"> </div>
                
            </div>    
            </div> 
            <div class="col md-6">
                <div class="form-group">
                    <h5> Date<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>
                </div>
            </div>  
        </div>

    <div class="row"">
        <div class="col md-6">
            <div class="form-group">
                <h5> Particulars<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="particulars" class="form-control" required data-validation-required-message="This field is required"> </div>
            </div>
        </div>
        <div class="col md-6">
            <div class="form-group">
                <h5>Debit<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="number" name="debit" class="form-control" required data-validation-required-message="This field is required"> </div>
            </div>
        </div>
    </div>


    <div class="row"">
        <div class="col md-6">
            <div class="form-group">
                <h5> Credit<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="number" name="credit" class="form-control" required data-validation-required-message="This field is required"> </div>
            </div>
        </div>




    </div>
                        				
                         
                          
             

                       <div class="text-xs-right">
                    <input type="submit" class="btn btn-round btn-info mb-5" value="Submit">
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