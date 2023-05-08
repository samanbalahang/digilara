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
                        <h5 class="mb-0 text-center"><strong>مدیریت مدیا</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/media" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="photo_name">
                            <input type="text" name="photo_alt">

                            <input type="text" name="photo_descript">
                            <input type="file" name="ImgP">
                            <input type="submit" value="ثبت">
                        </form>

@endsection
@section("extrajs")



@endsection
