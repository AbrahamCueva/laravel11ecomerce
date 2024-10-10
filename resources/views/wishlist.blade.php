@extends('layouts.app')

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Favoritos</h2>             
            <div class="shopping-cart">
                @if(Cart::instance("wishlist")->content()->count()>0)
                <div class="cart-table__wrapper">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th></th>
                                <th>Precio</th>                           
                                <th>Acción</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::instance('wishlist')->content() as $item)
                            <tr>
                                <td>
                                    <div class="shopping-cart__product-item">
                                        <img loading="lazy" src="{{ asset('uploads/products/thumbnails') }}/{{ $item->model->image }}" width="120" height="120" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="shopping-cart__product-item__detail">
                                        <h4>{{$item->name}}</h4>
                                        {{-- <ul class="shopping-cart__product-item__options">
                                            <li>Color: Yellow</li>
                                            <li>Size: L</li>
                                        </ul> --}}
                                    </div>
                                </td>
                                <td>
                                    <span class="shopping-cart__product-price">$ {{ $item->price }}</span>
                                </td>      
                                <td>
                                    <div class="del-action">
                                        <button type="submit" class="remove-cart btn btn-sm btn-warning">Mover al cesto</button>
                                        <button type="submit" class="remove-cart btn btn-sm btn-danger">Quitar</button>
                                    </div>                               
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>      
                    <div class="cart-table-footer">                    
                        <button class="btn btn-light" type="submit">Limpar favoritos</button>
                    </div>          
                </div>   
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <p>¡No hay articulos en tus favoritos!</p>
                            <a href="{{route('shop.index')}}" class="btn btn-info">¡Agregar ahora!</a>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection