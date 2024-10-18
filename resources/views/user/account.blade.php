@extends('layouts.app')

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Detalles de la cuenta</h2>
            <div class="row">
                <div class="col-lg-2">
                    @include('user.account-nav')
                </div>
                <div class="col-lg-9">
                    <div class="page-content my-account__edit">
                        <div class="my-account__edit-form">
                            @if (Session::has('status'))
                                <p class="alert alert-success">{{ Session::get('status') }}</p>
                            @endif
                            <form name="account_edit_form" action="{{ route('user.update_user', ['id' => $user->id]) }}"
                                method="POST" class="needs-validation" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating my-3">
                                            <input type="text" class="form-control" placeholder="Nombre" name="name"
                                                value="{{ $user->name }}" required="">
                                            <label for="name">Nombre</label>
                                            @error('name')
                                                <span class="alert alert-danger text-center">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="text" class="form-control" placeholder="Celular" name="mobile"
                                                value="{{ $user->mobile }}" required="">
                                            <label for="mobile">Celular</label>
                                            @error('mobile')
                                                <span class="alert alert-danger text-center">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                value="{{ $user->email }}" required="">
                                            <label for="account_email">Email</label>
                                            @error('email')
                                                <span class="alert alert-danger text-center">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <h5 class="text-uppercase mb-0">Cambiar de contraseña</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Nueva contraseña" required="">
                                            <label for="password">Nueva contraseña</label>
                                            @error('password')
                                                <span class="alert alert-danger text-center">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating my-3">
                                            <input type="password" class="form-control" cfpwd=""
                                                data-cf-pwd="#new_password" id="password_confirmation"
                                                name="password_confirmation" placeholder="Confirmar nueva contraseña"
                                                required="">
                                            <label for="password_confirmation">Confirmar nueva contraseña</label>
                                            @error('password_confirmation')
                                                <span class="alert alert-danger text-center">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
