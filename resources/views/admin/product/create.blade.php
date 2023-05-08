@extends('admin.layouts.master')
@section("extracss")



@endsection
@section("main")
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>مدیریت صفحه اصلی</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/prods" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="prodName">
                            <input type="text" name="prodUrl">
                            <input type="file" name="prodIMG">
                            <textarea name="prodShDesc" id="" cols="30" rows="10"></textarea>
                            <textarea name="prodLNDesc" id="" cols="30" rows="10"></textarea>
                        </form>
