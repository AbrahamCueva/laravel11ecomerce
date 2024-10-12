@extends('layouts.admin')

@section('content')
    <style>
        .table-transaction>tbody>tr:nth-of-type(odd) {
            --bs-table-accent-bg: #fff !important;
        }
    </style>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Order Details</h3>
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
                        <div class="text-tiny">Order Items</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box mt-5 mb-5">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <h5>Detalles de pedido</h5>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.orders') }}">Atrás</a>
                    @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                    @endif
                </div>
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
                        <th>Fecha de pedido</th>
                        <td>{{ $transaction->order->created_at }}</td>
                        <th>Fecha de envío</th>
                        <td>{{ $transaction->order->delivered_date }}</td>
                        <th>Fecha de cancelación</th>
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

            <div class="wg-box mt-5">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <h5>Artículos del pedido</h5>
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
                                <th class="text-center">Estado de Devolución</th>
                                <th class="text-center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderitems as $orderitem)
                                <tr>

                                    <td class="pname">
                                        <div class="image">
                                            <img src="{{ asset('uploads/products/thumbnails') }}/{{ $orderitem->product->image }}"
                                                alt="" class="image">
                                        </div>
                                        <div class="name">
                                            <a href="{{ route('shop.product.details', ['product_slug' => $orderitem->product->slug]) }}"
                                                target="_blank" class="body-title-2">{{ $orderitem->product->name }}</a>
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
                                                    <i class="icon-eye"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                    {{ $orderitems->links('pagination::bootstrap-5') }}
                </div>
            </div>

            <div class="wg-box mt-5">
                <h5>Dirección de Envío</h5>
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
                <table class="table table-striped table-bordered table-transaction">
                    <tr>
                        <th>Subtotal</th>
                        <td>${{ $transaction->order->subtotal }}</td>
                        <th>IGV</th>
                        <td>${{ $transaction->order->tax }}</td>
                        <th>Descuento</th>
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
                                <span class="badge bg-danger">Rechazado</span>
                            @elseif($transaction->status == 'refunded')
                                <span class="badge bg-secondary">Reembolsado</span>
                            @else
                                <span class="badge bg-warning">Pendiente</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>

            <div class="wg-box mt-5">
                <h5>Actualizar el estado del pedido</h5>
                <form action="{{ route('admin.order.status.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="order_id" value="{{ $transaction->order->id }}" />
                    <div class="row">
                        <div class="col-md-3">
                            <div class="select">
                                <select id="order_status" name="order_status">
                                    <option value="ordered"
                                        {{ $transaction->order->status == 'ordered' ? 'selected' : '' }}>
                                        Pedido</option>
                                    <option value="delivered"
                                        {{ $transaction->order->status == 'delivered' ? 'selected' : '' }}>Entregado
                                    </option>
                                    <option value="canceled"
                                        {{ $transaction->order->status == 'canceled' ? 'selected' : '' }}>
                                        Cancelado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary tf-button w208">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
