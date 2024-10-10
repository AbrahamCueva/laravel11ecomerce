@extends('layouts.admin')

@section('content')
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Coupon infomation</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{ route('admin.coupons') }}">
                            <div class="text-tiny">Coupons</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Coupon</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-product form-style-1" method="POST" action="{{ route('admin.coupon.update') }}">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{ $coupon->id }}" />
                    <fieldset class="name">
                        <div class="body-title">Código de cupón <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Código de cupón" name="code" tabindex="0"
                            value="{{ $coupon->code }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="category">
                        <div class="body-title">Tipo de cupón</div>
                        <div class="select flex-grow">
                            <select class="" name="type">
                                <option value="">Select</option>
                                <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>Fijado</option>
                                <option value="percent" {{ $coupon->type == 'percent' ? 'selected' : '' }}>Porcentaje</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Valor de cupón <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Valor de cupón" name="value" tabindex="0"
                            value="{{ $coupon->value }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Valor del cesto <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Valor del cesto" name="cart_value" tabindex="0"
                            value="{{ $coupon->cart_value }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">fecha de expiración <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="date" placeholder="fecha de expiración" name="expiry_date" tabindex="0"
                            value="{{ $coupon->expiry_date }}" aria-required="true" required="">
                    </fieldset>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Actualizar</button>
                    </div>
                </form>
            </div>
            <!-- /new-category -->
        </div>
        <!-- /main-content-wrap -->
    </div>

    </div>
@endsection
