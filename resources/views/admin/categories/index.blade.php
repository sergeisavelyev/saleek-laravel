@extends('admin.layouts.layout')

@section('title', 'Категории')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Список категорий</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <ul>
                @foreach ($categories as $category)
                    <li>{{ $category->title }}</li>
                    <ul>
                        @foreach ($category->childrenCategories as $childCategory)
                            @include('admin.categories.list_child_category', ['child_category' => $childCategory])
                        @endforeach
                    </ul>
                @endforeach
            </ul>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Родительская категория</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allCategories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->category_id }}</td>
                                            <td>
                                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"><i class="fas fa-pencil-alt mx-2"></i></a>
                                                <a href="{{ route('categories.destroy', ['category' => $category->id]) }}"><i class="fas fa-trash-alt mx-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

        </div>
    </section>
    <!-- /.content -->
@endsection
