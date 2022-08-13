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
                        <li class="breadcrumb-item active">Editar slider</li>
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


                    @if (session()->exists('message'))
                        @message(['color' => session()->get('color')])
                            {{ session()->get('message') }}
                        @endmessage
                    @endif

                    <form action="{{ route('admin.sliders.update', ['slider' => $slider->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $slider->id }}">

                        <div class="form-group">
                            <label class="d-block" for="cover">Capa do Slider</label>
                            <input type="file" name="cover" id="cover">
                        </div>

                        <div class="form-group">
                            <label for="title">Título do Slider</label>
                            <input type="title" class="form-control" name="title" id="title"
                                placeholder="Digite o título do slider" value="{{ old('title') ?? $slider->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo do Slider</label>
                            <textarea name="content" id="content" class="form-control" value="{{ old('content') ?? $slider->content }}">{{ old('content') ?? $slider->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Atualizar cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
