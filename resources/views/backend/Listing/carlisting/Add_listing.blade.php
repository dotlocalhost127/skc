@extends('admin.admin')
@section('main-container')

<div class="content-wrapper" >
    <div class="container-full">
      <!-- Content Header (Page header) -->
  

    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <!-- /.box-header -->
           <div class="box-body">
            <div class="box-header with-border">
                <h4 class="box-title"> Add Listing</h4>
            </div>
             <div class="row" >
               <div class="col">
      <form method="POST"  action="{{ route('listing.listing_store') }}" enctype="multipart/form-data">
        @csrf    
        <div class="row">
     <div class="col-12">
        <div class="row">
            <div class="col md-6">
        
                <div class="form-group">
                    <h5> Name<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    </div>
                    <div class="col md-6">
        
                        <div class="form-group">
                            <h5> Price<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="price" class="form-control" required data-validation-required-message="This field is required"> </div>
                            </div>
                            </div>
                    
                </div>
            </div></div>
            <div class="row">
                <div class="col md-6">
            
                    <div class="form-group">
                        <h5> Select Make <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="make_id" required=""  class="form-control">
                                <option value="" selected="" disabled="" >Select Make</option>
                                @foreach($carsmakes as $make)
                                <option value="{{ $make->id }}">{{ $make->make }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col md-6">
                    <div class="form-group">
                        <h5>Select Model <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="model_id"  required=""  class="form-control">
                                <option value="" selected="" disabled="" >Select Model</option>
                                @foreach($cars_models as $model)
                                <option value="{{ $model->id }}">{{ $model->model }}</option>
                                @endforeach
                            </select>
                            
                    </div>    
                    </div>   
                </div>
         </div>	
            <div class="row">
                <div class="col-12">
                   <div class="row">
                       <div class="col md-6">
                   
                           <div class="form-group">
                               <h5> Year<span class="text-danger"></span></h5>
                               <div class="controls">
                                   <input type="text" name="year" class="form-control" required data-validation-required-message="This field is required"> </div>
                               </div>
                               </div>
                               <div class="col md-6">
                   
                                   <div class="form-group">
                                       <h5> Country<span class="text-danger">*</span></h5>
                                       <div class="controls">
                                           <input type="text" name="country" class="form-control" required data-validation-required-message="This field is required"> </div>
                                       </div>
                                       </div>
                               
                           </div>
                       </div></div>
                       <div class="row">
                        <div class="col-12">
                           <div class="row">
                               <div class="col md-6">
                           
                                   <div class="form-group">
                                       <h5> Mileage<span class="text-danger">*</span></h5>
                                       <div class="controls">
                                           <input type="text" name="mileage" class="form-control" required data-validation-required-message="This field is required"> </div>
                                       </div>
                                       </div>
                                       <div class="col md-6">
                           
                                           <div class="form-group">
                                               <h5> Fuel Type<span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <input type="text" name="fuel_type" class="form-control" required data-validation-required-message="This field is required"> </div>
                                               </div>
                                               </div>
                                       
                                   </div>
                               </div></div>  
                               <div class="row">
                                <div class="col-12">
                                   <div class="row">
                                       <div class="col md-6">
                                   
                                           <div class="form-group">
                                               <h5> Transmission<span class="text-danger"> </span></h5>
                                               <div class="controls">
                                                   <input type="text" name="transmission" class="form-control" > </div>
                                               </div>
                                               </div>
                                               <div class="col md-6">
                                   
                                                   <div class="form-group">
                                                       <h5>Drive<span class="text-danger"> </span></h5>
                                                       <div class="controls">
                                                           <input type="text" name="drive" class="form-control" > </div>
                                                       </div>
                                                       </div>
                                               
                                           </div>
                                       </div></div>     
                                       <div class="row">
                                        <div class="col-12">
                                           <div class="row">
                                               <div class="col md-6">
                                           
                                                   <div class="form-group">
                                                       <h5> Exterior Color<span class="text-danger">*</span></h5>
                                                       <div class="controls">
                                                           <input type="text" name="exterior_color" class="form-control" > </div>
                                                       </div>
                                                       </div>
                                                       <div class="col md-6">
                                           
                                                           <div class="form-group">
                                                               <h5>Interior Color<span class="text-danger">*</span></h5>
                                                               <div class="controls">
                                                                   <input type="text" name="interior_color" class="form-control" > </div>
                                                               </div>
                                                               </div>
                                                       
                                                   </div>
                                               </div></div> 
                                               <div class="row">
                                                <div class="col-12">
                                                   <div class="row">
                                                       <div class="col md-6">
                                                   
                                                           <div class="form-group">
                                                               <h5> Stock ID<span class="text-danger">*</span></h5>
                                                               <div class="controls">
                                                                   <input type="text" name="stock_id" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                               </div>
                                                               </div>
                                                               <div class="col md-6">
                                                   
                                                                   <div class="form-group">
                                                                       <h5>VIN<span class="text-danger">*</span></h5>
                                                                       <div class="controls">
                                                                           <input type="text" name="VIN" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                                       </div>
                                                                       </div>
                                                               
                                                           </div>
                                                       </div></div>
                                                               <div class="row">
                                                                <div class="col-12">
                                                                   <div class="row">
                                                                    
                                                                               <div class="col md-6">
                                                                   
                                                                                   <div class="form-group">
                                                                                       <h5>Feature image<span class="text-danger">*</span></h5>
                                                                                       <div class="controls">
                                                                                           <input type="file" name="image" class="form-control btn" accept="image/*"
                                                                                            required data-validation-required-message="This field is required"> </div>
                                                                                       </div>
                                                                                       </div>
                                                                                       <div class="col md-6">
                                                                   
                                                                                        <div class="form-group">
                                                                                            <h5> image gallery<span class="text-danger">*</span></h5>
                                                                                            <div class="controls">
                                                                                                <input type="file" name="images[]" multiple
                                                                                                 multiple  class="form-control" accept="image/*" 
                                                                                                 required data-validation-required-message="This field is required">
                                                                                                 </div>
                                                                                            </div>
                                                                                            </div>
                                                                               
                                                                           </div>
                                                                       </div></div> 
                                                            
                                                                                       
     

    <div class="row"">
        <div class="col md-6">
            <div class="form-group">
                <h5>Features<span class="text-danger">*</span></h5>
                <div class="controls">
                    <textarea name="features" style="height: 200px;"class="form-control" required data-validation-required-message="This field is required"> 
                    </textarea>
                    </div>
            </div>
        </div>
        <div class="col md-6">
            <div class="form-group">
                <h5>Description<span class="text-danger">*</span></h5>
                <div class="controls">
                    <textarea name="description" style="height: 200px;" class="form-control" required data-validation-required-message="This field is required"> 
                    </textarea>
                    </div>
            </div>
        </div>
    </div>
                        				
                         
                          
                       </div>
                     </div>

                       <div class="text-xs-right">
                    <input type="submit" class="btn btn-round btn-info mb-5" value="Add Listing">
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