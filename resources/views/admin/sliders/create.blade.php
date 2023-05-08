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
                        <h5 class="mb-0 text-center"><strong>ساخت اسلایدر</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/sliders">
                            <p> عکس جدید برای اسلایدر</p>
                            <input type="file" name="">
                            <input type="submit" value="ثبت">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
@section("extrajs")



@endsection
