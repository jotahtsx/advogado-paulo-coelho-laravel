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
                        <li class="breadcrumb-item active">Sliders</li>
                    </ol>
                </div>
                <div class="col-12 mt-4">

                    <div class="mt-0 mb-4">
                        <a href="{{ route('admin.sliders.create') }}" class="btn btn-info">Novo slider</a>
                    </div>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Título</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>
                                        <a
                                            href="{{ route('admin.sliders.edit', ['slider' => $slider->id]) }}">{{ $slider->title }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
