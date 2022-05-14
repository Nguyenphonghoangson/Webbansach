@extends('Layouts.adminlayout.adminlayout') 
@section('content')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Create Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Create Product</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <form action="" method="post" enctype="multipart/form-data" role="form">
                            @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="mb-3">
                                                <label class="form-label" for="product-title-input">Product ID</label>
                                                <input type="text" class="form-control" id="product-id-input" name="productID"
                                                    placeholder="Enter product id">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="product-title-input">Product Name</label>
                                                <input type="text" class="form-control" id="product-name-input" name="productname"
                                                    placeholder="Enter product name">
                                            </div>
                                            <div>
                                                <label>Product Description</label>
                                                
                                                <div>
                                                <textarea id="description" rows="10" name="description" cols="50" style="width:100%;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Product Image</h5>
                                        </div>
                                        <div class="card-body">
                                        <div class="mb-4">
                                                <input class="form-control" name="file" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
    
                                    
                                    <!-- end card -->
                                    <div class="text-end mb-3">
                                        <button type="submit" class="btn btn-success w-sm">Submit</button>
                                    </div>
                                


                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                             
                                <!-- end card -->


                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Product Categories</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-2"> <a href="#" class="float-end text-decoration-underline">Add New</a>Select product category</p>
                                        <select class="form-select" name="categoryID" data-choices data-choices-search-false >
                                            @foreach($listcategory as $key => $item)
                                            <option value="{{$item->categoryID}}">{{$item->categoryname}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Product Tags</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="hstack gap-3 align-items-start">
                                            <div class="flex-grow-1">
                                                <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Enter tags" name="tags" type="text"
                                            value="New" />   
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Price</h5>
                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                                        <!-- end col -->
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="product-price-input">Price</label>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text" id="product-price-addon">$</span>
                                                                            <input type="text" class="form-control" id="product-price-input"
                                                                                placeholder="Enter price" aria-label="Price" name="price"
                                                                                aria-describedby="product-price-addon">
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="product-discount-input">Discount</label>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text"
                                                                                id="product-discount-addon">%</span>
                                                                            <input type="text" class="form-control" name="discount"
                                                                                id="product-discount-input" placeholder="Enter discount"
                                                                                aria-label="discount"
                                                                                aria-describedby="product-discount-addon">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                        <!-- end card body -->
                                    </div>

                            </div>
                        </div>
                        
                        <!-- end row -->
                        </form>
                        

                    </div>
                    <!-- container-fluid -->
                </div>
@endsection