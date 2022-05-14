@extends('Layouts.adminlayout.adminlayout')
@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">List Categories</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">List Categories</li>
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
                                                    <a href="apps-ecommerce-add-product.html" class="btn btn-success"><i
                                                            class="ri-add-line align-bottom me-1"></i> Add Category</a>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control" placeholder="Search Category...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
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
                                                    <th scope="col" >Category ID</th>
                                                    <th scope="col" style="width:360px;" >Category</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>
                                                        <span>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-md bg-light rounded p-2" style="margin:10px">
                                                                        <img src="{{asset('Assets/User/images/books/1.jpg')}}" alt="" class="img-fluid d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-14 mb-1">
                                                                        <a href="apps-ecommerce-product-details.html" class="text-dark">Half Sleeve Round Neck T-Shirts</a>
                                                                    </h5>
                                                                    <p class="text-muted mb-0">Category : <span class="fw-medium">Clothes</span></p>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td>
                            
                                                        <div class="d-flex align-items-center justify-content-center">
                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                    <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                    <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            </div>
                        
                                                        
                                                    </tr>
                                                </tbody>
                                                </table>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Next
                                                </a>
                                            </div>
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
            
            
@endsection