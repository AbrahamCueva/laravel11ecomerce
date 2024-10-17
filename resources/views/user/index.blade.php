@extends('layouts.app')

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">My Account</h2>
            <div class="row">
                <div class="col-lg-3">
                    @include('user.account-nav')
                </div>
                <div class="col-lg-9">
                    <div class="page-content my-account__dashboard">
                        <p>Hola <strong>{{ Auth::user()->name }}</strong></p>
                        <p>Desde el panel de control de tu cuenta, puedes ver tus <a class="unerline-link"
                                href="{{ route('user.orders') }}">pedidos</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
