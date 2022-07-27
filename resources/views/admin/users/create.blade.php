@extends('admin.master.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.usuarios.index') }}">Usuários</a></li>
                        <li class="breadcrumb-item active">Novo usuário</li>
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

                    <form action="{{ route('admin.usuarios.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome completo</label>
                            <input type="name" class="form-control" name="name" id="name"
                                placeholder="Digite o nome" value="{{ old('name') }}">
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="email">Endereço de email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Digite o email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="date_of_birth">Data de nascimento</label>
                                    <input type="tel" class="form-control mask-date" name="date_of_birth"
                                        id="date_of_birth" placeholder="Data de nascimento"
                                        value="{{ old('date_of_birth') }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="password">Senha de acesso</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Digite a senha">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Realizar cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
