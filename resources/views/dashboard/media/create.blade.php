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
                            ساخت مدیا
                        </h1>
                    </section>
                    <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form mb-5 ">
                            <input type="text" id="photo_name" name="photo_name" class="form-control">
                            <label for="photo_name" class="label">عنوان عکس</label>
                        </div>
                        <div class="md-form mb-5  rtl">
                            <input type="text" id="photo_alt" name="photo_alt" class="form-control">
                            <label for="photo_alt" class="label">متن جایگذین</label>
                        </div>
                        <div class="md-form mb-5  rtl">
                            <input type="text" id="photo_descript" name="photo_descript" class="form-control">
                            <label for="photo_descript" class="label">توضیحات </label>
                        </div>
                        <!-- <div class="md-form mb-5  rtl">
                            <input type="text" name="image_path" id="image_path" class="form-control">
                            <label for="image_path" class="label">آدرس عکس </label>
                        </div> -->
                        
                            
                                <p>
                                        افزودن عکس 
                                    </p>
                                    <p>
                                        <input type="button" id="loadFileXml" value="بارگذاری عکس"
                                            onclick="document.getElementById('fileupload').click();" class="btn btn-yellow" />
                                        <input type="file" style="display:none;" name="indeximg" value="افزودن عکس شاخص"
                                            accept="image/*" id="fileupload"/>
                                        <!-- <input type="file" name="indeximg" value="افزودن عکس شاخص"
                                            accept="image/*" id="fileupload"/> -->
                        
                                    </p>
                                        <div id="preview">
                                        </div>
                                          
                    
                        
                                <div class="m-auto text-center">
                                        <input type="submit" value="ثبت اطلاعات" class="btn btn-warning">
                                </div>
                    </form>
                    <p>
                                    افزودن گروهی عکس برای گالری
                                </p>    
                                <p>
                                    عکس های خود را به داخل کادر زیر بکشید.
                                </p>
                    <form method="post" action="{{route('dropMedia')}}"  class="dropzone dz-clickable" enctype="multipart/form-data" id="multymedia">
                        @csrf
                    <div class="dz-default dz-message"><span>فایل های خود را به این ناحیه درگ کنید</span></div>
                    </form>
                </section>
            </div>
        </main>
    </div>
    @include("dashboard.layout.leftside")
@endsection

@section("extrajs")

<script>
    $("#multymedia").dropzone();
</script>


@endsection