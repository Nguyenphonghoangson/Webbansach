@extends('Layouts.shop.shopgrid')
@section('content')
<div class="ht__breadcrumb__area bg-image--6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__inner text-center">
                        <h2 class="breadcrumb-title">Shop Grid</h2>
                        <nav class="breadcrumb-content">
                            <a class="breadcrumb_item" href="index.html">Home</a>
                            <span class="brd-separator">/</span>
                            <span class="breadcrumb_item active">Shop Grid</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb area -->
    <!-- Start Shop Page -->
    <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                 @include('Layouts.shop.sidebar')
                </div>
                <div class="col-lg-9 col-12 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div
                                    class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                <div class="shop__list nav justify-content-center" role="tablist">
                                    <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-grid"
                                       role="tab"><i class="fa fa-th"></i></a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-list" role="tab"><i
                                            class="fa fa-list"></i></a>
                                </div>
                                <p>Showing 1–12 of 40 results</p>
                                <div class="orderby__wrapper">
                                    <span>Sort By</span>
                                    <select class="shot__byselect">
                                        <option  value="asc" selected>Default sorting</option>
                                        <option value="asc">Price: Low to High</option>
                                        <option value="desc">Price: High to Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab__container tab-content">
                        <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                            <div class="row mt--30" id="grpr" >
                                @foreach ($listproducts as $key => $item)
                                <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/'.$item->image)}}" alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/'.$item->image)}}" alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">{{$item->tag}}</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">{{$item->productname}}</a></h4>
                                        <ul class="price d-flex">
                                            <li></li>
                                            <li class="old_price"></li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart"  data-id="{{$item->productID}}"><i
                                                            class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                            class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i
                                                            class="bi bi-heart-beat"></i></a></li>
                                                    <li><a data-bs-toggle="modal" title="Quick View"
                                                           class="quickview modal-view detail-link"
                                                           href="#productmodal"><i class="bi bi-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__hover--content">
                                            <ul class="rating d-flex">
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <ul class="wn__pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
                            <div class="list__view__wrapper" id="lspr">
                                @foreach ($listproducts as $key => $item)
                                <div class="list__view mt--30">
                                    <div class="thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/'.$item->image)}}" alt="product images"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/'.$item->image)}}" alt="product images"></a>
                                    </div>
                                    <div class="content">
                                        <h2><a href="single-product.html">{{$item->productname}}</a></h2>
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="price__box">
                                            <li></li>
                                            <li class="old__price"></li>
                                        </ul>
                                        <p></p>
                                        <ul class="cart__action d-flex">
                                            <li ><a class="cart" >Add to cart</a></li>
                                            <li class="wishlist"><a href="cart.html"></a></li>
                                            <li class="compare"><a href="cart.html"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection