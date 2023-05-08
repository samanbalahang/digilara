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
                <section id="mainForm">
                    <section class="formTitle">
                        <h1>
                            بنر ها
                        </h1>
                    </section>
                    <section class="addbtn my-3">
                        <a href="{{route('media.create')}}" class="btn btn-yellow w-100"><i class="fas fa-plus px-3"></i> افزودن مدیا</a>
                    </section> 
                    <table id="showMenu" class="display datatable w-100">
                                    <thead>
                                        <tr>
                                            <th class="nosearch">id</th>
                                            <th>بنر:</th>
                                            <th class="nosearch">مدیریت</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                            <td></td>
                                            @foreach ($banners as $media)   
                                                    @php
                                                        $bannerID = $media->id;
                                                        $mediaId =  App\Models\Media::find($bannerID);
                                                        $src = $mediaId->image_path;
                                                        $alt = $mediaId->photo_alt;
                                                    @endphp
                                                    
                                               
                                                    <td><img src="{{url('/')}}/{{$src}}" alt="{{$media->banner_name}}" class="w-100">
                                                    <br/>
                                                  
                                                </td>                                                
                                                <td>
                                          
                                                         <div class="d-flex justify-content-center w-100">
                                                             <a href="{{route('banner.edit',$media->id)}}" class="btn btn-warning p-2">ویرایش</a>
                                                           <form action="" methode="POST">
                                                                 <input type="submit" value="حذف" class="btn btn-danger p-2">
                                                             </form>
                                                         </div>
                                                     </td>
                                                  </tr>
                                            @endforeach
                                           
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>بنر:</th>
                                            <th>مدیریت</th>
                                        </tr>
                                    </tfoot>
                                </table>
                </section>
            </div>
        </main>
    </div>
    @include("dashboard.layout.leftside")
@endsection

@section("extrajs")



@endsection