@extends('admin.layouts.master')
@section("extracss")



@endsection
@section("main")
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>مدیریت صفحه اصلی</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/baners" method="POST" enctype="multipart/form-data">
                            @csrf
                            <select name="banner" id="baner">
                                <option value="media_id"></option>
                            </select>
                            <p> عکس جدید برای بنر</p>
                            <input type="file" name="topAdBanner">
                            <input type="submit" value="ثبت">
                        </form>
                    </div>
                </div>
            </section>
            <!-- Section: Main chart -->


        </div>
    </main>


@endsection
@section("extrajs")



@endsection
