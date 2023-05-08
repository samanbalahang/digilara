@extends('dashboard.layout.master')

@section("extracss")



@endsection

<!--Main Navigation-->

@section("main")
    <div class="col-68 col-md-68 p-0 bg-gray">
            <main class="tab-content" id="A" style="margin-top: 58px">
                <div class="tab-content" id="myTabContent0">
                    <header>
                        <div class="help-container">
                            <!-- Collapsed content -->
                            <div class="collapse mt-3 bg-black border-thin border-gold p-3" id="collapseExample">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident.
                            </div>
                            <!-- Buttons trigger collapse -->
                            <a class="btn btn-black has-arrow-up" data-mdb-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample">
                                تنضیمات صفحه
                                <i class="fas fa-angle-up"></i>
                            </a>
                            <button class="btn btn-black has-arrow-up" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                               راهنما
                                <i class="fas fa-angle-up"></i>
                            </button>


                        </div>
                    </header>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-header text-center py-3">
                                <h5 class="mb-0 text-center">
                                    <strong>{{__("ایجاد پست")}}</strong>
                                </h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="uri"  name="uri" class="form-control" />
                                        <label class="form-label" for="uri">uri</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="title" name="title" class="form-control" />
                                        <label class="form-label" for="title">title</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="post_desc" name="post_desc" class="form-control" />
                                        <label class="form-label" for="post_desc">post_desc</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="file" id="main_img" name="main_img" class="form-control" />
                                        <label class="form-label" for="main_img">main_img</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="content" name="content" class="form-control" />
                                        <label class="form-label" for="content">content</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="number" id="sort" name="sort" class="form-control" />
                                        <label class="form-label" for="sort">sort</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="submit" id="submit" name="submit" class="form-control bg-base" value="ثبت" />
                                    </div>


                                </form>
                            </div>
                        </div>
                    </section>            
                </div>
            </main>
        </div>
        @include("dashboard.layout.leftside")
@endsection
@section("extrajs")



@endsection