@extends('Layouts.adminlayout.adminlayout')
@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">List Products</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">List Products</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                    
                        <!-- end col -->

                        <div class="col-xl-12 col-lg-12">
                            <div>
                                <div class="card">
                                    <div class="card-header border-0">
                                        <div class="row g-4">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="{{url('/Admin/add-product')}}" class="btn btn-success"><i
                                                            class="ri-add-line align-bottom me-1"></i> Add Product</a>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control" placeholder="Search Products...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all"
                                                            role="tab">
                                                            All <span class="badge badge-soft-danger align-middle rounded-pill ms-1 allcount">{{$listProduct->Count()}}</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published"
                                                            role="tab">
                                                            Published <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft"
                                                            role="tab">
                                                            Draft
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <div id="selection-element">
                                                    <div class="my-n1 d-flex align-items-center text-muted">
                                                        Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">

                                        <div class="tab-content text-muted">
                                            <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                                <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                                                <div>
                                                     <table class="table table-nowrap align-middle" role="grid"style="text-align: center">
                                                    <thead class="text-muted table-light">
                                                    <tr class="text-uppercase" >
                                                    <th scope="col">#</th>
                                                    <th scope="col" >Product ID</th>
                                                    <th scope="col" style="width:360px;" >Product</th>
                                                    <th scope="col">Category Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Discount</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="listproduct">
                                                    @foreach($listProduct as $key=>$item)
                                                    <tr id="{{$item->productID}}">
                                                    <th scope="row">{{{$key+1}}}</th>
                                                    <td>{{$item->productID}}</td>
                                                    
                                                    <td>
                                                        <span>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-md bg-light rounded p-2" style="margin:10px">
                                                                        <img src="{{asset('Assets/User/images/books/'.$item->image)}}" alt="" class="img-fluid d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-14 mb-1">
                                                                        <a href="{{Url('/Admin/details-product/'.$item->productID)}}" class="text-dark">{{$item->productname}}</a>
                                                                    </h5>
                                                                    <p class="text-muted mb-0">Category ID: <span class="fw-medium">{{$item->categoryID}}</span></p>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td>{{$item->category->categoryname}}</td>
                                                    <td>${{number_format($item->price,2,'.','.')}}</td>
                                                    <td>{{$item->discount}} %</td>
                                                    <td>${{number_format($item->price-($item->price*$item->discount)*1/100,2,'.','.')}}</td>
                                                    <td>
                                                        <span>
                                                            <div class="dropdown">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end"> 
                                                                    <li>
                                                                        <a class="dropdown-item" href="{{Url('/Admin/details-product/'.$item->productID)}}">
                                                                            <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                                                        </li><li><a class="dropdown-item" href="{{Url('/Admin/update-product/'.$item->productID)}}">
                                                                            <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li>
                                                                            <a class="dropdown-item delete" data-id="{{$item->productID}}" href="#" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted "></i> Delete</a>
                                                                        </li>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </span>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                                <div class="gridjs-footer"><div class="gridjs-pagination"><div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>12</b> results</div><div class="gridjs-pages"><button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button><button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button><button tabindex="0" role="button" class="" title="Page 2" aria-label="Page 2">2</button><button tabindex="0" role="button" title="Next" aria-label="Next" class="">Next</button></div></div></div>
                                                </div>
                                            </div>
                                            
                                            <!-- end tab pane -->

                                            <div class="tab-pane" id="productnav-published" role="tabpanel">
                                                <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                                <div class="py-4 text-center">
                                                    <div>
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                            trigger="loop" colors="primary:#405189,secondary:#0ab39c"
                                                            style="width:72px;height:72px">
                                                        </lord-icon>
                                                    </div>

                                                    <div class="mt-4">
                                                        <h5>Sorry! No Result Found</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
                
            </div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function(){

    $(".delete").on('click',function(){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    var id= $(this).attr("data-id");
    var count=$('.allcount').text();
    console.log(count);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
                type: "DELETE",
                url: "{{url('/Admin/delete-product')}}"+"/"+id,
                success: function (data) {
                    $('#'+id).remove();
                    $('.allcount').text(count-1);
                },
                error: function () {
                
                }
            });
            return false;
  
  }
})

    })
})

</script>
            
            
@endsection