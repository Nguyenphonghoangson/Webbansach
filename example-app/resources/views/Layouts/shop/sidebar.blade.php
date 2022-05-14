<div class="shop__sidebar">
                        <aside class="widget__categories products--cat">
                            <h3 class="widget__title">Product Categories</h3>
                            <ul>
                            <li><a data-tag="all" class="cate">All products<span>(3)</span></a></li>
                            @foreach ($listCategory as $key => $item) 
                            <li><a data-tag="{{$item->categoryID}}" class="cate">{{$item->categoryname}}<span>(3)</span></a></li>
                            @endforeach
                            </ul>
                        </aside>
                        <aside class="widget__categories pro--range">
                            <h3 class="widget__title">Filter by price</h3>
                            <div class="content-shopby">
                                <div class="price_filter s-filter clear">
                                    <form action="#" method="POST">
                                        <div id="slider-range"></div>
                                        <div class="slider__range--output">
                                            <div class="price__output--wrap">
                                                <div class="price--output">
                                                    <span>Price :</span><input type="text" id="amount" readonly="">
                                                </div>
                                                <div class="price--filter">
                                                    <a class="filter">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget__categories sidebar--banner">
                            <img src="{{asset('Assets/User/images/others/banner_left.jpg')}}" alt="banner images">
                            <div class="text">
                                <h2>new products</h2>
                                <h6>save up to <br> <strong>40%</strong>off</h6>
                            </div>
                        </aside>
                    </div>