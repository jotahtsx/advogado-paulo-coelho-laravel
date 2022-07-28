@extends('admin.master.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">FAQ</a></li>
                        <li class="breadcrumb-item active">Editar questão</li>
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

                    <form action="{{ route('admin.faq.update', ['faq' => $question->id]) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Título da questão</label>
                            <input type="title" class="form-control" name="title" id="title"
                                placeholder="Digite o título da questão" value="{{ old('title') ?? $question->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo da questão</label>
                            <textarea name="content" id="content" class="form-control" value="{{ old('content') }}">{{ old('content') ?? $question->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Atualizar cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
