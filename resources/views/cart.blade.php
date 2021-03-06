@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="cart">
            <div class="cart__box">
                <div class="cart__item">
                    <div>
                        <h2 class="cart__title">{{ trans('home.shop_cart') }}</h2>
                    </div>

                    @include('common.cartMessage')

                    <form action="" method="POST">
                        @csrf
                        @foreach($sessionCart as $key => $cart)
                            <div class="cart__product">
                                <div class="cart__product-img">
                                    <img class="image" src="{{ asset('image/products') }}/{{ $cart['image'] }}" alt="">
                                </div>
                                <div class="cart__product-name">
                                    <a href="" class="name_product">{{$cart['name']}}</a>
                                    <p class="price-product">{{number_format($cart['price'])}} đ</p>
                                </div>
                                <div class="cart__product-icon">
                                    <input type="number" min="1" class="input_quantity" name="{{ $key }}" value={{ $cart['quantity'] }}> 
                                    <p class="total-price">{{number_format($cart['price'] * $cart['quantity'])}} đ</p>
                                    <a data-id="{{ $key }}" href="" class="cart__delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </form>
                    

                    @if(count($sessionCart) == 0)
                        <p class="alert_nothing">{{ trans('home.empty_cart') }}</p>
                    @endif
                    
                    <a href="{{ route('shop.index') }}" class="btn__buy btn__buy-margin">{{ trans('home.continue_buy') }}</a>
                </div>  

                <div class="cart__checkout">
                    <div class="card cart-summary">
                        <div class="cart-detailed-totals">

                            <div class="card-block">
                                <div class="cart-summary-line" id="cart-subtotal-products">
                                    <span class="label js-subtotal">
                                        {{count($sessionCart)}} {{ trans('home.products') }}
                                    </span>
                                    <span class="value total_cart">{{ number_format(total_cart()) }} đ</span>
                                </div>
                                <div class="cart-summary-line" id="cart-subtotal-shipping">
                                    <span class="label">
                                        {{ trans('home.ship_amount') }}
                                    </span>
                                    <span class="value">{{ trans('home.free') }}</span>
                                </div>
                            </div>
                            
                            <hr class="separator">

                            <div class="card-block">
                                <div class="cart-summary-line cart-total">
                                    <span class="label">{{ trans('home.total_money') }}</span>
                                    <span class="value total_cart">{{ number_format(total_cart()) }} đ</span>
                                </div>
                            </div>
                            <hr class="separator">
                        </div>

                        <div class="checkout text-center card-block">
                            <a href="{{ route('order.index') }}" class="btn__buy">{{ trans('home.payment') }}</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>  
@endsection


@section('scroll')
    @include('components.scroll')
@endsection
