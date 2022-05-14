@extends('Layouts.adminlayout.adminlayout')
@section('content')
<div class="page-content">
    <div class="container-fluid">
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Category</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Create Category</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div> 
    <div class="row">                       <!-- start page title -->
    <form action="javascript:void(0);">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="firstNameinput" class="form-label">Category ID</label>
                <input type="text" class="form-control" placeholder="Enter your firstname" id="firstNameinput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="lastNameinput" class="form-label">Category Name</label>
                <input type="text" class="form-control" placeholder="Enter your lastname" id="lastNameinput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="compnayNameinput" class="form-label">Status</label>
                <div class="mb-3">
                <textarea  rows="4" cols="50" style="width:100%"></textarea>
            </div>
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="lastNameinput" class="form-label">Date Create</label>
                <input disabled type="text" class="form-control" placeholder="Enter your lastname" id="lastNameinput">
            </div>
        </div><!--end col-->
        <div class="col-lg-12">
            <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div><!--end row-->
    </form>
                        <!-- end row -->
                        </div> 
    </div>
                    <!-- container-fluid -->
</div>
@endsection