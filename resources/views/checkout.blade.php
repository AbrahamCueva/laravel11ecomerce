@extends('layouts.app')

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Envío y pago</h2>
            <div class="checkout-steps">
                <a href="{{ route('cart.index') }}" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Bolsa de la compra</span>
                        <em>Administre su lista de artículos</em>
                    </span>
                </a>
                <a href="javascript:void(0)" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Envío y pago</span>
                        <em>Consulte su lista de artículos</em>
                    </span>
                </a>
                <a href="javascript:void(0)" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmación</span>
                        <em>Revise y envíe su pedido</em>
                    </span>
                </a>
            </div>
            <form name="checkout-form" action="https://uomo-html.flexkitux.com/Demo3/shop_order_complete.html">
                <div class="checkout-form">
                    <div class="billing-info__wrapper">
                        <div class="row">
                            <div class="col-6">
                                <h4>Detalles del envío</h4>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>

                        @if ($address)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-account__address-list">
                                        <div class="my-account__address-list-item">
                                            <div class="my-account__address-item_detail">
                                                <p>{{ $address->name }}</p>
                                                <p>{{ $address->address }}</p>
                                                <p>{{ $address->landmark }}</p>
                                                <p>{{ $address->city }}, {{ $address->state }}, {{ $address->country }}</p>
                                                <p>{{ $address->zip }}</p>
                                                <br>
                                                <p>{{ $address->phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="name" required=""
                                            value="{{ old('name') }}">
                                        <label for="name">Nombres y apellidos *</label>
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="phone" required=""
                                            value="{{ old('phone') }}">
                                        <label for="phone">Celular *</label>
                                        @error('phone')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="zip" required=""
                                            value="{{ old('zip') }}">
                                        <label for="zip">Código de postal *</label>
                                        @error('zip')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" name="state" required=""
                                            value="{{ old('state') }}">
                                        <label for="state">Provincia *</label>
                                        @error('state')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="city" required=""
                                            value="{{ old('city') }}">
                                        <label for="city">Ciudad *</label>
                                        @error('city')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="address" required=""
                                            value="{{ old('address') }}">
                                        <label for="address">Número de casa, nombre del edificio *</label>
                                        @error('address')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="locality" required=""
                                            value="{{ old('locality') }}">
                                        <label for="locality">Nombre de la calle, urbanización *</label>
                                        @error('locality')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" name="landmark" required=""
                                            value="{{ old('landmark') }}">
                                        <label for="landmark">Referencia *</label>
                                        @error('landmark')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="checkout__totals-wrapper">
                        <div class="sticky-content">
                            <div class="checkout__totals">
                                <h3>Tu pedido</h3>
                                <table class="checkout-cart-items">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th align="right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('cart')->content() as $item)
                                            <tr>
                                                <td>
                                                    {{ $item->name }} x {{ $item->qty }}
                                                </td>
                                                <td class="text-right">
                                                    ${{ $item->subtotal }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if (Session::has('discounts'))
                                    <table class="checkout-totals">
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td class="text-right">${{ Cart::instance('cart')->subtotal() }}</td>
                                            </tr>
                                            <tr>
                                                <th>descuento {{ Session('coupon')['code'] }}</th>
                                                <td class="text-right">-${{ Session('discounts')['discount'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Subtotal despues del descuento</th>
                                                <td class="text-right">${{ Session('discounts')['subtotal'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Envío</th>
                                                <td class="text-right">Gratis</td>
                                            </tr>
                                            <tr>
                                                <th>IGV</th>
                                                <td class="text-right">${{ Session('discounts')['tax'] }}</td>
                                            </tr>
                                            <tr class="cart-total">
                                                <th>Total</th>
                                                <td class="text-right">${{ Session('discounts')['total'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @else
                                    <table class="checkout-totals">
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td class="text-right">${{ Cart::instance('cart')->subtotal() }}</td>
                                            </tr>
                                            <tr>
                                                <th>Envío</th>
                                                <td class="text-right">Gratis</td>
                                            </tr>
                                            <tr>
                                                <th>IGV</th>
                                                <td class="text-right">${{ Cart::instance('cart')->tax() }}</td>
                                            </tr>
                                            <tr class="cart-total">
                                                <th>Total</th>
                                                <td class="text-right">${{ Cart::instance('cart')->total() }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            <div class="checkout__payment-methods">
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_1" checked>
                                    <label class="form-check-label" for="checkout_payment_method_1">
                                        Direct bank transfer
                                        <p class="option-detail">
                                            Make your payment directly into our bank account. Please use your Order ID as
                                            the payment
                                            reference.Your order will not be shipped until the funds have cleared in our
                                            account.
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_2">
                                    <label class="form-check-label" for="checkout_payment_method_2">
                                        Check payments
                                        <p class="option-detail">
                                            Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida
                                            nec dui. Aenean
                                            aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra
                                            nunc, ut aliquet
                                            magna posuere eget.
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_3">
                                    <label class="form-check-label" for="checkout_payment_method_3">
                                        Cash on delivery
                                        <p class="option-detail">
                                            Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida
                                            nec dui. Aenean
                                            aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra
                                            nunc, ut aliquet
                                            magna posuere eget.
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_4">
                                    <label class="form-check-label" for="checkout_payment_method_4">
                                        Paypal
                                        <p class="option-detail">
                                            Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida
                                            nec dui. Aenean
                                            aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra
                                            nunc, ut aliquet
                                            magna posuere eget.
                                        </p>
                                    </label>
                                </div>
                                <div class="policy-text">
                                    Your personal data will be used to process your order, support your experience
                                    throughout this
                                    website, and for other purposes described in our <a href="terms.html"
                                        target="_blank">privacy
                                        policy</a>.
                                </div>
                            </div>
                            <button class="btn btn-primary btn-checkout">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
