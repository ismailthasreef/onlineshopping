@extends('admin.admin_app')



@section('main')



<div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                    @if(Session::has('message')) 
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{Session::get('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{Session::get('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>	
                        @endif	
                        @if(Session::has('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{Session::get('warning')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>	
                        @endif	
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Product</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" class="mdi mdi-plus mr-1" data-toggle="modal" data-target="#productModal"></i>Add Product</button>
                                                  
                                            
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                                
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Code</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($pro as $key => $ep)
                                                    <tr>
                                                    <td>{{++$key }}</td>
					                            	<td>{{ $ep->p_name }}</td>
                                                    <td>{{ $ep->p_code }}</td>
                                                    <td><img width="80" height="80" src="{{ asset("product_images/$ep->p_image") }}"></td>
                                                    <td>{{ $ep->p_description }}</td>
                                                    @if($ep->p_is_active == '0')
						                            <td><a href="/deactivecategory/{{ $ep->p_id }}" class="btn btn-outline-warning">Deactivate</a></td>
					                            	@else
						                            <td><a href="/activecategory/{{ $ep->p_id }}" class="btn btn-outline-info">Activate</a></td>
						                            @endif
			
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                
                                                              
                                                                    <li><a href="/addtoproduct/{{ $ep->p_id }}" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Add items</a></li>
                                                                    <li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>
                                                                    <li><a href="/deleteitem/{{ $ep->p_id }}" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                      
            
                                                    </tr>
                                                    @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <!-- end row -->


 <!-- The Modal -->
 <form method="post" action="/addproduct" enctype="multipart/form-data">
								
								<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<h5 class="modal-title " class="fas fa-plus " id="exampleModalLabel">Add Product</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										 <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
									  
                            {{csrf_field()}}
                            <div class="row">
                            
                                                <div class="col-12">
                                                <div class="form-group">
                                                        <label class="control-label">Select Category</label>
                                                        <select class="form-control"   required=""  name="catid">
                                                      <option value="">~~SELECT~~</option>
                                                      @foreach($cat as $cats)
													  <option value= "{{ $cats->cat_id }}">{{ $cats->cat_name }}</option> 
                                                      @endforeach
                                                    </select>
                                                    <div class="form-group">
                                                        <label for="name">Product Name</label>
                                                        <input id="names" name="name" required="" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Product Code</label>
                                                        <input id="name" name="pcode" required="" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image">Choose Image</label>
                                                        <input type="file" id="image" name="image" required="" type="text" class="form-control">
                                                    </div>
                                           <div class="form-group">
                                                        <label class="control-label">Product Status</label>
                                                        <select class="form-control"   required=""  name="Status">
                                                      <option value="">~~SELECT~~</option>
                                                      <option value='0'>Active</option>
													  <option value='1'>Inactive</option> 
                              </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cartdesc">Product Description</label>
                                                        <textarea class="form-control" required="" name="desc" id="cartdesc" rows="5"></textarea>
                                                    </div>
                                                  
                                            
                             </div><br> <!-- /form-group-->
                    
                            </div> <!-- /form-group-->
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" data-loading-text="Loading..." autocomplete="off">Save changes</button>
									  </div>
									  </form>
									</div>
								  </div>
                                </div>
                                



          
          
								
                        

                    </div> <!-- container-fluid -->
<!-- item model strnatcasecmp -->






            
                </div>


 <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
</script>





@endsection