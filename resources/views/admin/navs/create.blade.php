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
                        <h5 class="mb-0 text-center"><strong>ایجاد منو</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/navs" method="POST">
                            @csrf
                            <label for="url">عنوان منو اختصاصی</label>
                            <input type="text" name="url" id="url">
                            <label for="nav_name">اسم منو</label>
                            <input type="text" name="nav_name" id="nav_name">
                            <p>
                                عناصر منو
                            </p>
                            <label for="nav_title">عنوان عنصر منو</label>
                            <input type="text" name="nav_title" id="nav_title">
                            <label for="nav_uri">آدرس صفحه منو</label>
                            <input type="text" name="nav_uri" id="nav_uri">
                            <label for="hasChild">فرزند دارد</label>
                            <select name="hasChild" id="hasChild">
                                <option value="1">دارد</option>
                                <option value="0">ندارد</option>
                            </select>

                            <label for="father_id">پدرش کیست</label>
                            <select name="father_id" id="father_id">
                                <option value="0">
                                    خودش والد اصلی است
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection

@section("extrajs")

@endsection
