@extends('layouts.admin')

@section('content')
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Información de cupón</h3>
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
                            <div class="text-tiny">Cupones</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Nuevo cupón</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-product form-style-1" method="POST" action="{{ route('admin.coupon.store') }}">
                    @csrf
                    <fieldset class="name">
                        <div class="body-title">Código de cupón <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Código de cupón" name="code" tabindex="0"
                            value="{{ old('code') }}" aria-required="true">
                    </fieldset>
                    @error('code')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="category">
                        <div class="body-title">Tipo de cupón</div>
                        <div class="select flex-grow">
                            <select class="" name="type">
                                <option value="">Seleccionar</option>
                                <option value="fixed" @if (old('type') == 'fixed') {{ 'selected' }} @endif>Fijado
                                </option>
                                <option value="percent" @if (old('type') == 'percent') {{ 'selected' }} @endif>Porcentaje
                                </option>
                            </select>
                        </div>
                    </fieldset>
                    @error('type')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title">Valor de cupón <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Valor de cupón" name="value" tabindex="0"
                            value="{{ old('value') }}" aria-required="true">
                    </fieldset>
                    @error('value')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title">Valor del cesto <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Valor del cesto" name="cart_value" tabindex="0"
                            value="{{ old('cart_value') }}" aria-required="true">
                    </fieldset>
                    @error('cart_value')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title">Fecha de exipración <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="date" placeholder="Fecha de exipración" name="expiry_date" tabindex="0"
                            value="{{ old('expiry_date') }}" aria-required="true">
                    </fieldset>
                    @error('expiry_date')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
            <!-- /new-category -->
        </div>
        <!-- /main-content-wrap -->
    </div>

    </div>
@endsection
