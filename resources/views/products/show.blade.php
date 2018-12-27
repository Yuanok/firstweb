@extends('layouts.app')
@section('title',$product->title)

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panle panle-default">
                <div class="panel-body product-info">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{$product->image_url}}" alt="" class="cover">
                        </div>
                        <div class="col-sm-7">
                            <div class="title">{{$product->title}}</div>
                            <div class="price"><label>价格</label> <em>￥</em><span>{{$product->price}}</span></div>
                            <div class="sales_and_reviews">
                                <div class="sold_count">累计销售 <span class="count">{{$product->sold_count}}</span></div>
                                <div class="review_count">累计评价 <span class="count">{{$product->review_count}}</span></div>
                                <div class="rating" title="评分{{$product->rating}}">评分 <span class="count">{{str_repeat('★',floor($product->rating))}}{{str_repeat('★',5 - floor($product->rating))}}</span></div>
                            </div>
                            <div class="skus">
                                <label for="">选择</label>
                                <div class="btn-group" data-toggle="buttons">
                                    @foreach($product->skus as $sku)
                                        <label
                                                class="btn btn-default sku-btn"
                                                data-price="{{ $sku->price }}"
                                                data-stock="{{ $sku->stock }}"
                                                data-toggle="tooltip"
                                                title="{{ $sku->description }}"
                                                data-placement="bottom">
                                            <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {{ $sku->title }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="cart_amount"><label for="">数量</label> <input type="text" class="form-control input-sm" value="1"><span>件</span><span class="stock"></span></div>
                            <div class="buttons">
                                @if($favored)
                                    <button class="btn btn-danger btn-disfavor">❤取消收藏</button>
                                @else
                                    <button class="btn btn-success btn-favor">❤收藏</button>
                                @endif
                                <button class="btn btn-primary btn-add-to-cart">加入购物车</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation"><a href="#product-detail-tab" aria-controls="product-detail-tab" role="tab" data-toggle="tab">商品详情</a></li>
                            <li  role="presentation"><a href="#product-reviews-tab" aria-controls="product-reviews-tab" role="tab" data-toggle="tab">用户评价</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane acrive" role="tabpanel" id="product-detail-tab">
                                {{!! $product->description !!}}
                            </div>
                            <div class="tab-pane" role="tabpanel" id="product-reviews-tab"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip({trigger: 'hover'});
            $('.sku-btn').click(function () {
                $('.product-info .price span').text($(this).data('price'));
                $('.product-info .stock').text('库存：' + $(this).data('stock') + '件');
            });
            //监听收藏按钮的点击事件
            $('.btn-favor').click(function () {
                // 发起一个 post ajax 请求，请求 url 通过后端的 route() 函数生成
                axios.post('{{ route('products.favor',['product' =>$product->id]) }}')
                    .then(function () {//请求成功返回执行这个回调
                        swal('操作成功','','success')
                            .then(function () {
                                location.reload();
                            });
                    },function (error) {//请求失败会执行这个回调
                        //如果返回码401是代表没登
                        if(error.response && error.response.status ===401){
                            swal('请先登录','error');
                        }else if(error.response && error.response.data.msg){
                            //其他有msg字段的情况，将msg提示给用户
                            swal(error.response.data.msg,'','error');
                        }else{
                            //其他情况
                            swal('系统错误','','error');
                        }
                    });
            });

            $('.btn-disfavor').click(function (){
                axios.delete('{{route('products.disfavor',['prodyct'=>$product->id]) }}')
                    .then(function () {
                        swal('操作成功','','success')
                            .then(function(){//这里加一个then方法
                                location.reload();
                            });
                    });
            });
        });
    </script>
@endsection
