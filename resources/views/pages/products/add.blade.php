@extends('layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $title }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">{{ $title }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content" id="app">
        <!-- /.row -->
        <div class="row">
            <product-component></product-component>
        </div>
    </section>
    <script>

        $("#finya").on("click", function () {
            alert('test');
        });
    </script>
    <!-- /.content -->
@endsection