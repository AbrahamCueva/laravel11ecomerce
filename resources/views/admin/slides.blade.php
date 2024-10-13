@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css">
@endpush

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Slides</h3>
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
                        <div class="text-tiny">Slides</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Buscar aquí..." class="" name="name"
                                    tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.slide.add') }}"><i class="icon-plus"></i>Agregar
                        slide</a>
                </div>
                <div class="wg-table table-all-user">
                    @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imágen</th>
                                    <th>Lema</th>
                                    <th>Título</th>
                                    <th>Subtítulo</th>
                                    <th>Link</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slides as $slide)
                                    <tr>
                                        <td>{{ $slide->id }}</td>
                                        <td class="pname">
                                            <div class="image">
                                                <img src="{{ asset('uploads/slides') }}/{{ $slide->image }}"
                                                    alt="{{ $slide->title }}" class="image">
                                            </div>
                                        </td>
                                        <td>{{ $slide->tagline }}</td>
                                        <td>{{ $slide->title }}</td>
                                        <td>{{ $slide->subtitle }}</td>
                                        <td>{{ $slide->link }}</td>
                                        <td>
                                            <div class="list-icon-function">
                                                <a href="{{ route('admin.slide.edit', ['id' => $slide->id]) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a>
                                                <form action="{{ route('admin.slide.delete', ['id' => $slide->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="item text-danger delete">
                                                        <i class="icon-trash-2"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                    {{ $slides->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $(".delete").on('click', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "Estás seguro/a de eliminar este registro?",
                    icon: "warning", // Cambié 'type' a 'icon', que es la nueva sintaxis de SweetAlert2
                    showCancelButton: true, // Asegúrate de mostrar el botón de cancelar
                    confirmButtonText: "¡Sí!", // Texto del botón de confirmación
                    cancelButtonText: "¡No!", // Texto del botón de cancelar
                    confirmButtonColor: '#dc3545', // Color del botón de confirmación
                    cancelButtonColor: '#6c757d' // Puedes agregar el color del botón de cancelar si deseas
                }).then(function(result) {
                    if (result.isConfirmed) { // Verifica si el botón de confirmación fue presionado
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
