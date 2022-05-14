@extends('Layouts.adminlayout.adminlayout')
@section('content')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Product Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Product Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gx-lg-5">
                                        <div class="col-xl-3 col-md-8 mx-auto">
                                        <img src="{{asset('Assets/User/images/books/'.$product->image)}}" alt=""
                                                                class="img-fluid d-block" />
                                            
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xl-9">
                                            <div class="mt-xl-0 mt-5">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h4>{{$product->productname}}</h4>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div>
                                                            <a href="{{Url('/Admin/update-product/'.$product->productID)}}"
                                                                class="btn btn-light" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Edit"><i
                                                                    class="ri-pencil-fill align-bottom"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div
                                                                        class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-money-dollar-circle-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Price :</p>
                                                                    <h5 class="mb-0">{{$product->price}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div
                                                                        class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-percent-fill"></i>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Discount :</p>
                                                                    <h5 class="mb-0">{{$product->discount}}</h5>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div
                                                                        class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-inbox-archive-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Tags :</p>
                                                                    <h5 class="mb-0">{{$product->tag}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div
                                                                        class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-clockwise-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Created-at :</p>
                                                                    <h6 class="mb-0">{{$product->created_at}}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->

                                                <div class="mt-4 text-muted">
                                                    <h5 class="fs-14">Description :</h5>
                                                    <p>{{$product->description}}</p>
                                                </div>

                                                <!-- <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="mt-3">
                                                            <h5 class="fs-14">Features :</h5>
                                                            <ul class="list-unstyled">
                                                                <li class="py-1"><i
                                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                    Full Sleeve</li>
                                                                <li class="py-1"><i
                                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                    Cotton</li>
                                                                <li class="py-1"><i
                                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                    All Sizes available</li>
                                                                <li class="py-1"><i
                                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                    4 Different Color</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mt-3">
                                                            <h5 class="fs-14">Services :</h5>
                                                            <ul class="list-unstyled product-desc-list">
                                                                <li class="py-1">10 Days Replacement</li>
                                                                <li class="py-1">Cash on Delivery available</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->


                                                <div class="product-content mt-5">
                                                    <h5 class="fs-14 mb-3">Product Description :</h5>
                                                    <nav>
                                                        <ul class="nav nav-tabs nav-tabs-custom nav-success"
                                                            id="nav-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="nav-speci-tab"
                                                                    data-bs-toggle="tab" href="#nav-speci" role="tab"
                                                                    aria-controls="nav-speci"
                                                                    aria-selected="true">Specification</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="nav-detail-tab"
                                                                    data-bs-toggle="tab" href="#nav-detail" role="tab"
                                                                    aria-controls="nav-detail"
                                                                    aria-selected="false">Details</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    <div class="tab-content border border-top-0 p-4"
                                                        id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-speci"
                                                            role="tabpanel" aria-labelledby="nav-speci-tab">
                                                            <div class="table-responsive">
                                                                <table class="table mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row" style="width: 200px;">
                                                                                Category</th>
                                                                            <td>{{$product->category->categoryname}}</td>
                                                                        </tr>                                                                      
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-detail" role="tabpanel"
                                                            aria-labelledby="nav-detail-tab">
                                                            <div>
                                                                <h5 class="font-size-16 mb-3">{{$product->productname}}</h5>
                                                                <p>{{$product->description}}</p>
                                                                <!-- <div>
                                                                    <p class="mb-2"><i
                                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                        Machine Wash</p>
                                                                    <p class="mb-2"><i
                                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                        Fit Type: Regular</p>
                                                                    <p class="mb-2"><i
                                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                        100% Cotton</p>
                                                                    <p class="mb-0"><i
                                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                        Long sleeve</p>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-content -->

                                               
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <script src="{{asset('Assets/Admin/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

            <!-- ecommerce product details init -->
            <script src="{{asset('Assets/Admin/assets/js/pages/ecommerce-product-details.init.js')}}"></script>
@endsection