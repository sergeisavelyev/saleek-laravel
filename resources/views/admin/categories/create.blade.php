@extends('admin.layouts.layout')

@section('title', 'Новая категория')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить категорию</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form role="form" method="post" action="{{ route('categories.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название категории</label>
                                        <input class="form-control" id="title" name="title" placeholder="Название">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Родительская категория</label>
                                        <select class="form-control" name="category_id">
                                            <?php $level = ''; ?>
                                            <option selected disabled>Выберите категорию</option>
                                            @isset($categories)
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @foreach ($category->childrenCategories as $childCategory)
                                                        @include('admin.categories.select_child_category', [
                                                            'child_category' => $childCategory,
                                                            'level' => ($level .= ' - - '),
                                                        ])
                                                    <?php $level = ''; ?>
                                                    @endforeach
                                                @endforeach
                                            @endisset

                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

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
