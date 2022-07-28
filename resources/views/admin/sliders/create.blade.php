@extends('admin.master.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.sliders.index') }}">Sliders</a></li>
                        <li class="breadcrumb-item active">Novo slider</li>
                    </ol>
                </div>
                <div class="col-12 mt-4">

                    @if ($errors->all())
                        @foreach ($errors->all() as $error)
                            @message(['color' => 'danger'])
                                {{ $error }}
                            @endmessage
                        @endforeach
                    @endif

                    <form action="{{ route('admin.sliders.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="d-block" for="cover">Capa do Slider</label>
                            <input type="file" name="cover" id="cover">
                        </div>

                        <div class="form-group">
                            <label for="title">Título do Slider</label>
                            <input type="title" class="form-control" name="title" id="title"
                                placeholder="Digite o título do slider" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo do Slider</label>
                            <textarea name="content" id="content" class="form-control" value="{{ old('content') }}">{{ old('content') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Realizar cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
