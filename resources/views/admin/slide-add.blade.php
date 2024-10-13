@extends('layouts.admin')

@section('content')
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Slide</h3>
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
                        <a href="{{ route('admin.slides') }}">
                            <div class="text-tiny">Slides</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Nuevo slide</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-product form-style-1" method="POST" action="{{ route('admin.slide.store') }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="name">
                        <div class="body-title">Lema <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Lema" name="tagline" tabindex="0" value="{{ old('tagline') }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Título <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Título" name="title" tabindex="0" value="{{ old('title') }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Subtítulo <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Subtítulo" name="subtitle" tabindex="0" value="{{ old('subtitle') }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Link <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Link" name="link" tabindex="0" value="{{ old('link') }}" aria-required="true" required="">
                    </fieldset>
                    <fieldset>
                        <div class="body-title">Subir imágen <span class="tf-color-1">*</span>
                        </div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview" style="display: none;">
                                <img src="sample.jpg" class="effect8" alt="" style="border-radius: 10%;">
                            </div>
                            <div class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Arrastra tus imágenes aquí o selecciona <span class="tf-color">haz clic para buscar</span></span>
                                    <input type="file" id="myFile" name="image">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="category">
                        <div class="body-title">Estado</div>
                        <div class="select flex-grow">
                            <select class="" name="status">
                                <option>Seleccionar estado</option>
                                <option value="1" @if(old('status') == "1") selected @endif>Activo</option>
                                <option value="0" @if(old('status') == "0") selected @endif>Inactivo</option>
                            </select>
                        </div>
                    </fieldset>
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
@endsection

@push('scripts')
    <script>
        $(function() {
            $("#myFile").on("change", function(e) {
                const photoInp = $("#myFile");
                const [file] = this.files;
                if (file) {
                    $("#imgpreview img").attr('src', URL.createObjectURL(file));
                    $("#imgpreview").show();
                }
            });
        });
    </script>
@endpush
