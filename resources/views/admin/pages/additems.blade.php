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
                                    <h4 class="mb-0 font-size-18">Add items</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Add items</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

<div class="row">
  
                            <div class="col-xl-12">
                                <div class="card">
                                <form action="/insertitem" method="post">
                                    
                            {{csrf_field()}}
                                    <div class="card-body">
                                    @foreach($items as $pid)
                                    <input type="hidden" value="{{ $pid->p_id }}" name="pid" />
                                    @endforeach
                                            <div class="form-group">
                                            
                                                <label>Weight</label>
                                                <input type="text" name="pweight" class="form-control" required placeholder="Type something"/>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text"name="pprice" class="form-control" required placeholder="Type something"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input type="text" name="pstock"class="form-control" required placeholder="Type something"/>
                                            </div>

                                            <div class="form-group">
                                    <label class="control-label">Select Discounts</label>
                                                        <select class="form-control"   required=""  name="d_id">
                                                      <option value="">~~SELECT~~</option>
                                                      @foreach($dis as $discount)
													  <option value= "{{ $discount->d_id }}">{{ $discount->d_percentage }}</option> 
                                                      @endforeach
                                                    </select>
                                            </div>
                                           
                                          
                                          
                                            <div class="form-group ">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                 
                                                </div>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                   
                        </div> <!-- end row -->






  <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
</script>





@endsection