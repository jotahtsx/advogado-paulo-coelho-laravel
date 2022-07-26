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
                        <li class="breadcrumb-item active">Usuários</li>
                    </ol>
                </div>
                <div class="col-12 mt-4">

                    <div class="mt-0 mb-4">
                        <a href="{{ route('admin.usuarios.create') }}" class="btn btn-info">Novo usuário</a>
                    </div>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Nome Completo</th>
                                <th>Email</th>
                                <th width="200">Data de Nascimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <a href="{{ route('admin.usuarios.edit', ['user' => $user->id]) }}">
                                            {{ $user->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="mailto: {{ $user->email }}">
                                            {{ $user->email }}
                                        </a>
                                    </td>
                                    <td>{{ $user->date_of_birth }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
