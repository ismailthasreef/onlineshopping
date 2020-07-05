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
                                    <h4 class="mb-0 font-size-18">Category</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Category</li>
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
        
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" class="mdi mdi-plus mr-1" data-toggle="modal" data-target="#cartModal"></i>Add Catogory</button>
                                                  
                                            
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                                
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($categry as $key => $ep)
                                                    <tr>
                                                    <td>{{++$key }}</td>
					                            	<td>{{ $ep->cat_name }}</td>
                                                    <td><img width="80" height="80" src="{{ asset("assets/itemimages/$ep->cat_image") }}"></td>
                                                    <td>{{ $ep->cat_description }}</td>
                                                    @if($ep->cat_is_active == '0')
						                            <td><a href="/deactivecategory/{{ $ep->cat_id }}" class="btn btn-outline-warning">Deactivate</a></td>
					                            	@else
						                            <td><a href="/activecategory/{{ $ep->cat_id }}" class="btn btn-outline-info">Activate</a></td>
						                            @endif
			
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>
                                                                    <li><a href="/deletecategory/{{ $ep->cat_id }}" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                      
            
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->                     
                        <!-- end row -->


 <!-- The Modal -->
 <							
                            <form method="post" action="addcategory">
								
								<!-- Modal -->
								<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add Buss</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
									  
                            {{csrf_field()}}
                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input id="names" name="name" required="" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image">Choose Image</label>
                                                        <input type="file" id="image" required="" name="image" type="text" class="form-control">
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label">Status</label>
                                                        <select class="form-control"   required=""  name="Status">
                                                      <option value="">~~SELECT~~</option>
                                                      <option value='0'>Active</option>
													  <option value='1'>Inactive</option> 
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Meta Title</label>
                                                        <input  name="meta_title" required="" type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name">Meta Keyword</label>
                                                        <input  name="keyword" required="" type="text" class="form-control">
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
								














  
 <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
</script>








@endsection