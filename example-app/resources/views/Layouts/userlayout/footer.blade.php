<script src="{{asset('Assets/User/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('Assets/User/js/popper.min.js')}}"></script>
<script src="{{asset('Assets/User/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('Assets/User/js/plugins.js')}}"></script>
<script src="{{asset('Assets/User/js/active.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    var id='all';
    var sort="asc";
    $(".cate").click(function(){
        id = $(this).attr("data-tag");
        let formatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' });  
        
            $.ajax({
                type: "GET",
                url: "{{url('/getproductbycategory')}}"+"/"+id+"/"+sort,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function (data) {
                    let grpr='';
                    let lspr='';
                    for (var i = 0; i < data.listproducts.length;i++){
                        grpr+=` <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">`+data.listproducts[i].tag+`</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">`+data.listproducts[i].productname+`</a></h4>
                                        <ul class="price d-flex">
                                            <li>`+formatter.format(data.listproducts[i].price*((100-data.listproducts[i].discount)/100))+`</li>
                                            <li class="old_price">`+formatter.format(data.listproducts[i].price)+`</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
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
                                </div>`
                                lspr+=`<div class="list__view mt--30">
                                    <div class="thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product images"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product images"></a>
                                    </div>
                                    <div class="content">
                                        <h2><a href="single-product.html">`+data.listproducts[i].productname+`</a></h2>
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="price__box">
                                            <li>`+formatter.format(data.listproducts[i].price*((100-data.listproducts[i].discount)/100))+`</li>
                                            <li class="old__price">`+formatter.format(data.listproducts[i].price)+`</li>
                                        </ul>
                                        <p>`+data.listproducts[i].description+`</p>
                                        <ul class="cart__action d-flex">
                                            <li class="cart"><a href="cart.html">Add to cart</a></li>
                                            <li class="wishlist"><a href="cart.html"></a></li>
                                            <li class="compare"><a href="cart.html"></a></li>
                                        </ul>

                                    </div>
                                </div>`;
                    }
                document.getElementById('grpr').innerHTML = grpr;
                document.getElementById('lspr').innerHTML = lspr;
                },
                error: function () {
                
                }
            });
    });
    $(".filter").click(function() {
       
        let formatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' });
        var minprice = $('#slider-range').slider('values', 0);
        var maxprice = $('#slider-range').slider('values',1);
        console.log(maxprice);
        console.log(minprice);
        console.log(id);
        $.ajax({
                type: "GET",
                url: "{{url('/filter_price')}}"+"/"+id+"/"+maxprice+"/"+minprice,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function (data) {
                    let grpr='';
                    let lspr='';
                    for (var i = 0; i < data.listproducts.length;i++){
                        grpr+=` <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">`+data.listproducts[i].tag+`</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">`+data.listproducts[i].productname+`</a></h4>
                                        <ul class="price d-flex">
                                            <li>`+formatter.format(data.listproducts[i].price*((100-data.listproducts[i].discount)/100))+`</li>
                                            <li class="old_price">`+formatter.format(data.listproducts[i].price)+`</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
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
                                </div>`
                                lspr+=`<div class="list__view mt--30">
                                    <div class="thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product images"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product images"></a>
                                    </div>
                                    <div class="content">
                                        <h2><a href="single-product.html">`+data.listproducts[i].productname+`</a></h2>
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="price__box">
                                            <li>`+formatter.format(data.listproducts[i].price*((100-data.listproducts[i].discount)/100))+`</li>
                                            <li class="old__price">`+formatter.format(data.listproducts[i].price)+`</li>
                                        </ul>
                                        <p>`+data.listproducts[i].description+`</p>
                                        <ul class="cart__action d-flex">
                                            <li class="cart"><a href="cart.html">Add to cart</a></li>
                                            <li class="wishlist"><a href="cart.html"></a></li>
                                            <li class="compare"><a href="cart.html"></a></li>
                                        </ul>

                                    </div>
                                </div>`;
                    }
                document.getElementById('grpr').innerHTML = grpr;
                document.getElementById('lspr').innerHTML = lspr;
                },
                error: function () {
                
                }
            });

    });
    $(".shot__byselect").on('change',function(){
        sort=$(this).val();
        console.log(sort);
        let formatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' });  
        $.ajax({
                type: "GET",
                url: "{{url('/getproductbycategory')}}"+"/"+id+"/"+sort,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function (data) {
                    let grpr='';
                    let lspr='';
                    for (var i = 0; i < data.listproducts.length;i++){
                        grpr+=` <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">`+data.listproducts[i].tag+`</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">`+data.listproducts[i].productname+`</a></h4>
                                        <ul class="price d-flex">
                                            <li>`+formatter.format(data.listproducts[i].price*((100-data.listproducts[i].discount)/100))+`</li>
                                            <li class="old_price">`+formatter.format(data.listproducts[i].price)+`</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                            class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                            class="bi bi-shopping-cart-full"></i></a><  /li>
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
                                </div>`
                                lspr+=`<div class="list__view mt--30">
                                    <div class="thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product images"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('Assets/User/images/books/`+data.listproducts[i].image+`')}}" alt="product images"></a>
                                    </div>
                                    <div class="content">
                                        <h2><a href="single-product.html">`+data.listproducts[i].productname+`</a></h2>
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="price__box">
                                            <li>`+formatter.format(data.listproducts[i].price*((100-data.listproducts[i].discount)/100))+`</li>
                                            <li class="old__price">`+formatter.format(data.listproducts[i].price)+`</li>
                                        </ul>
                                        <p>`+data.listproducts[i].description+`</p>
                                        <ul class="cart__action d-flex">
                                            <li class="cart"><a href="cart.html">Add to cart</a></li>
                                            <li class="wishlist"><a href="cart.html"></a></li>
                                            <li class="compare"><a href="cart.html"></a></li>
                                        </ul>

                                    </div>
                                </div>`;
                    }
                document.getElementById('grpr').innerHTML = grpr;
                document.getElementById('lspr').innerHTML = lspr;
                },
                error: function () {
                
                }
            });
        
    })
    $(".cart").click(function () {
          var productID = $(this).attr("data-id");
            $.ajax({
                type: "GET",
                url: "{{url('/add-cart')}}"+"/"+productID,
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thêm giỏ hàng thành công',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    $('.count').text(data.count);
                    
                    
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Thêm giỏ hàng thất bại',
                        text: 'Vui lòng thử lại',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            });
                    
    });

    $(".delete").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            var id = ele.attr("data-id");
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('/delete') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id:id },
                    success: function (response) {
                        $('#'+id).remove();
                        
                    }
                });
            }
    });
    $(".qty").on('change',function (e) {
           var id =$(this).attr('data-id');
           var quantity=$(this).val();
           let formatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' });
            $.ajax({
               url: '{{ url('/update')}}',
               method: "post",
               dataType: 'JSON',
               data: {_token: '{{ csrf_token() }}', id: id, quantity: quantity},
               success: function (response) {
                   $("#"+id +" .product-subtotal").text(formatter.format(response.price));
                   $('.total').text(formatter.format(response.total));
                   
               }
            });
    });
      


</script>