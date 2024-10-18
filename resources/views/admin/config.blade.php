@extends('layouts.admin')

@section('content')
    <style>
        .text-danger {
            font-size: initial;
            line-height: 36px;
        }

        .alert {
            font-size: initial;
        }
    </style>

    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Configuración</h3>
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
                        <div class="text-tiny">Configuración</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                @if (Session::has('status'))
                    <p class="alert alert-success">{{ Session::get('status') }}</p>
                @endif
                <div class="col-lg-12">
                    <div class="page-content my-account__edit">
                        <div class="my-account__edit-form">
                            <form name="account_edit_form" action="{{ route('admin.update_user', ['id' => $user->id]) }}" method="POST"
                                class="form-new-product form-style-1 needs-validation" novalidate="">
                                @csrf
                                @method('PUT')
                                <fieldset class="name">
                                    <div class="body-title">Nombre <span class="tf-color-1">*</span>
                                    </div>
                                    <input class="flex-grow" type="text" placeholder="Nombre" name="name"
                                        tabindex="0" value="{{ $user->name }}" aria-required="true" required="">
                                </fieldset>
                                @error('name')
                                    <span class="alert alert-danger text-center">{{ $message }}</span>
                                @enderror

                                <fieldset class="name">
                                    <div class="body-title">Celular <span class="tf-color-1">*</span></div>
                                    <input class="flex-grow" type="text" placeholder="Celular" name="mobile"
                                        tabindex="0" value="{{ $user->mobile }}" aria-required="true" required="">
                                </fieldset>
                                @error('mobile')
                                    <span class="alert alert-danger text-center">{{ $message }}</span>
                                @enderror

                                <fieldset class="name">
                                    <div class="body-title">Email <span class="tf-color-1">*</span></div>
                                    <input class="flex-grow" type="text" placeholder="Email" name="email"
                                        tabindex="0" value="{{ $user->email }}" aria-required="true" required="">
                                </fieldset>
                                @error('email')
                                    <span class="alert alert-danger text-center">{{ $message }}</span>
                                @enderror

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <h5 class="text-uppercase mb-0">Cambiar contraseña</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="name">
                                            <div class="body-title pb-3">Nueva contraseña <span class="tf-color-1">*</span>
                                            </div>
                                            <input class="flex-grow" type="password" placeholder="Nueva contraseña"
                                                id="new_password" name="password" aria-required="true" required="">
                                        </fieldset>
                                        @error('password')
                                            <span class="alert alert-danger text-center">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="name">
                                            <div class="body-title pb-3">Confirmar nueva contraseña <span
                                                    class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="password"
                                                placeholder="Confirmar nueva contraseña" cfpwd=""
                                                data-cf-pwd="#new_password" id="password_confirmation"
                                                name="password_confirmation" aria-required="true" required="">
                                        </fieldset>
                                        @error('password_confirmation')
                                            <span class="alert alert-danger text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <button type="submit" class="btn btn-primary tf-button w208">
                                                Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
