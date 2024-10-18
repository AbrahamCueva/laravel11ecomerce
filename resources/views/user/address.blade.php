@extends('layouts.app')

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Dirección</h2>
            <div class="row">
                <div class="col-lg-2">
                    @include('user.account-nav')
                </div>
                <div class="col-lg-9">
                    <div class="page-content my-account__address">
                        <div class="my-account__address-list row">
                            <h5>Dirección de envío</h5>

                            <div class="my-account__address-item col-md-6">
                                <div class="my-account__address-item__title">
                                    <h5>{{ $user->name }} <i class="fa fa-check-circle text-success"></i></h5>
                                </div>
                                <div class="my-account__address-item__detail">
                                    <p>{{ $address->address }}</p>
                                    <p>{{ $address->city }}</p>
                                    <p>{{ $address->state }} </p>
                                    <p>{{ $address->country }}</p>
                                    <p>{{ $address->zip }}</p>
                                    <br>
                                    <p>Celular : {{ $user->mobile }}</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
