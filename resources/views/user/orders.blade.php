@extends('layouts.app')

@section('content')
    <style>
        .table> :not(caption)>tr>th {
            padding: 0.625rem 1.5rem .625rem !important;
            background-color: #6a6e51 !important;
        }

        .table>tr>td {
            padding: 0.625rem 1.5rem .625rem !important;
        }

        .table-bordered> :not(caption)>tr>th,
        .table-bordered> :not(caption)>tr>td {
            border-width: 1px 1px;
            border-color: #6a6e51;
        }

        .table> :not(caption)>tr>td {
            padding: .8rem 1rem !important;
        }
    </style>
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Pedidos</h2>
            <div class="row">
                <div class="col-lg-2">
                    @include('user.account-nav')
                </div>

                <div class="col-lg-10">
                    <div class="wg-table table-all-user">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 80px">N° Pedido</th>
                                        <th>Nombre</th>
                                        <th class="text-center">Celular</th>
                                        <th class="text-center">Subtotal</th>
                                        <th class="text-center">IGV</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Fecha de pedido</th>
                                        <th class="text-center">Attículos</th>
                                        <th class="text-center">Entregado el</th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="text-center">{{ '1' . str_pad($order->id, 4, '0', STR_PAD_LEFT) }}
                                            </td>
                                            <td class="text-center">{{ $order->name }}</td>
                                            <td class="text-center">{{ $order->phone }}</td>
                                            <td class="text-center">${{ $order->subtotal }}</td>
                                            <td class="text-center">${{ $order->tax }}</td>
                                            <td class="text-center">${{ $order->total }}</td>
                                            <td class="text-center">
                                                @if ($order->status == 'delivered')
                                                    <span class="badge bg-success">Entregado</span>
                                                @elseif($order->status == 'canceled')
                                                    <span class="badge bg-danger">Cancelado</span>
                                                @else
                                                    <span class="badge bg-warning">Pedido</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $order->created_at }}</td>
                                            <td class="text-center">{{ $order->orderItems->count() }}</td>
                                            <td>{{ $order->delivered_date }}</td>
                                            <td class="text-center">
                                                <a
                                                    href="{{ route('user.acccount.order.details', ['order_id' => $order->id]) }}">
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
                        {{ $orders->links('pagination::bootstrap-5') }}
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
