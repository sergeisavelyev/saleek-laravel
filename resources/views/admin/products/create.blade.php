@extends('admin.layouts.layout')

@section('title', 'Товары')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить товар</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form role="form" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Наименование товара</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Наименование">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Описание</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" name="description" placeholder="Описание..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Цена</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₽</span>
                                            </div>
                                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
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
                                    <div class="form-group">
                                        <label for="thumbnail">Изображение</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                                <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузить</span>
                                            </div>
                                        </div>
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
