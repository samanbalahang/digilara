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
            </div>
        </main>
    </div>
    @include("dashboard.layout.leftside")
@endsection

@section("extrajs")



@endsection