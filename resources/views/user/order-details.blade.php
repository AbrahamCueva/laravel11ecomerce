@extends('layouts.app')

@section('content')
    <style>
        .table-transaction>tbody>tr:nth-of-type(odd) {
            --bs-table-accent-bg: #fff !important;

        }

        .table-transaction th,
        .table-transaction td {
            padding: 0.625rem 1.5rem .25rem;
            !important;
            color: #000 !important;
        }

        .table> :not(caption)>tr>th {
            padding: 0.625rem 1.5rem .25rem !important;
            background-color: #6a6e51 !important;
        }

        .table-bordered>:not(caption)>*>* {
            border-width: inherit;
            line-height: 32px;
            font-size: 14px;
            border: 1px solid #e1e1e1;
            vertical-align: middle;
        }

        .table-striped .image {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            flex-shrink: 0;
            border-radius: 10px;
            overflow: hidden;
        }

        .table-striped td:nth-child(1) {
            min-width: 250px;
            padding-bottom: 7px;
        }

        .pname {
            display: flex;
            gap: 13px;
        }

        .table-bordered> :not(caption)>tr>th,
        .table-bordered> :not(caption)>tr>td {
            border-width: 1px 1px;
            border-color: #6a6e51;
        }
    </style>
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Detalles del pedido</h2>
            <div class="row">
                <div class="col-lg-2">
                    @include('user.account-nav')
                </div>

                <div class="col-lg-10">
                    @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                    @endif
                    <div class="wg-box mt-5 mb-5">
                        <div class="row">
                            <div class="col-6">
                                <h5>Detalles del pedido</h5>
                            </div>
                            <div class="col-6 text-right mb-3">
                                <a class="btn btn-sm btn-danger" href="{{ route('user.orders') }}">Atrás</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-transaction">
                                <tr>
                                    <th>N° Pedido</th>
                                    <td>{{ '1' . str_pad($transaction->order->id, 4, '0', STR_PAD_LEFT) }}</td>
                                    <th>Celular</th>
                                    <td>{{ $transaction->order->phone }}</td>
                                    <th>Código postal</th>
                                    <td>{{ $transaction->order->zip }}</td>
                                </tr>
                                <tr>
                                    <th>Fecha pedido</th>
                                    <td>{{ $transaction->order->created_at }}</td>
                                    <th>Fecha envío</th>
                                    <td>{{ $transaction->order->delivered_date }}</td>
                                    <th>Fecha cancelación</th>
                                    <td>{{ $transaction->order->canceled_date }}</td>
                                </tr>
                                <tr>
                                    <th>Estado del pedido</th>
                                    <td colspan="5">
                                        @if ($transaction->order->status == 'delivered')
                                            <span class="badge bg-success">Entregado</span>
                                        @elseif($transaction->order->status == 'canceled')
                                            <span class="badge bg-danger">Cancelado</span>
                                        @else
                                            <span class="badge bg-warning">Pedido</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="wg-box wg-table table-all-user">
                        <div class="row">
                            <div class="col-6">
                                <h5>Atrículos del pedido</h5>
                            </div>
                            <div class="col-6 text-right">

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-center">SKU</th>
                                        <th class="text-center">Categoría</th>
                                        <th class="text-center">Marca</th>
                                        <th class="text-center">Opciones</th>
                                        <th class="text-center">Estado de devolución</th>
                                        <th class="text-center">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderItems as $orderitem)
                                        <tr>

                                            <td class="pname">
                                                <div class="image">
                                                    <img src="{{ asset('uploads/products/thumbnails') }}/{{ $orderitem->product->image }}"
                                                        alt="" class="image">
                                                </div>
                                                <div class="name">
                                                    <a href="{{ route('shop.product.details', ['product_slug' => $orderitem->product->slug]) }}"
                                                        target="_blank"
                                                        class="body-title-2">{{ $orderitem->product->name }}</a>
                                                </div>
                                            </td>
                                            <td class="text-center">${{ $orderitem->price }}</td>
                                            <td class="text-center">{{ $orderitem->quantity }}</td>
                                            <td class="text-center">{{ $orderitem->product->SKU }}</td>
                                            <td class="text-center">{{ $orderitem->product->category->name }}</td>
                                            <td class="text-center">{{ $orderitem->product->brand->name }}</td>
                                            <td class="text-center">{{ $orderitem->options }}</td>
                                            <td class="text-center">{{ $orderitem->rstatus == 0 ? 'No' : 'Si' }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('shop.product.details', ['product_slug' => $orderitem->product->slug]) }}"
                                                    target="_blank">
                                                    <div class="list-icon-function view-icon">
                                                        <div class="item eye">
                                                            <i class="fa fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                        {{ $orderItems->links('pagination::bootstrap-5') }}
                    </div>

                    <div class="wg-box mt-5">
                        <h5>Dirección de envío</h5>
                        <div class="my-account__address-item col-md-6">
                            <div class="my-account__address-item__detail">
                                <p>{{ $transaction->order->name }}</p>
                                <p>{{ $transaction->order->address }}</p>
                                <p>{{ $transaction->order->locality }}</p>
                                <p>{{ $transaction->order->city }}, {{ $transaction->order->country }}</p>
                                <p>{{ $transaction->order->landmark }}</p>
                                <p>{{ $transaction->order->zip }}</p>
                                <br />
                                <p>Celular : {{ $transaction->order->phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="wg-box mt-5">
                        <h5>Transacciones</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-transaction">
                                <tr>
                                    <th>Subtotal</th>
                                    <td>${{ $transaction->order->subtotal }}</td>
                                    <th>IGV</th>
                                    <td>${{ $transaction->order->tax }}</td>
                                    <th>Discount</th>
                                    <td>${{ $transaction->order->discount }}</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>${{ $transaction->order->total }}</td>
                                    <th>Método de pago</th>
                                    <td>{{ $transaction->mode }}</td>
                                    <th>Estado</th>
                                    <td>
                                        @if ($transaction->status == 'approved')
                                            <span class="badge bg-success">Aprovado</span>
                                        @elseif($transaction->status == 'declined')
                                            <span class="badge bg-danger">Rechasado</span>
                                        @elseif($transaction->status == 'refunded')
                                            <span class="badge bg-secondary">Reembolsado</span>
                                        @else
                                            <span class="badge bg-warning">Pendiente</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
