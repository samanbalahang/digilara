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
                          مدیریت صفحه اصلی
                        </h1>
                    </section>

                    @php
                        if(isset($firstPageData)){
                            $bannerId = $firstPageData->banner_id;
                        }
                    @endphp
                    <form action="{{route('first-page.store')}}" method="post" enctype="multipart/form-data" id="bannerForm">
                        @csrf
                        <div class="md-form mb-5 ">
                            <select name="banner_id" id="banner_id">
                                <option value="" selected disabled>انتخاب بنر بالای سایت</option>
                                @foreach ( $banners as $banner)
                                    @php 
                                        $media = App\Models\Media::find($banner->id);
                                        $src =$media->image_path;
                              
                                    @endphp 
                                    
                                    <option style="background: url({{$src}});" value="{{$banner->id}}" data-image="{{url('/')}}/{{$src}}" >
                                        <img src="{{url('/')}}/{{$src}}" alt="{{$banner->banner_name}}" class="w-75">
                                    </option>
                                @endforeach
                       
                            </select>
                            <a href="" id="create_banner" class="btn btn-warning m-3">
                                ساخت بنر
                            </a>
                        </div>
                        <div class="md-form mb-5  rtl">
                            <input type="text" id="banner_name" name="banner_name" class="form-control">
                            <label for="banner_name" class="label">عنوان بنر</label>
                        </div>
                        <div class="md-form mb-5  rtl">
                            <a href="#" class="btn btn-yellow" id="selectImg">انتخاب تصویر</a>
            
                        </div>  
                        <div id="selectedPreview">
                        </div>                   
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
                </section>
            </div>
        </main>
  @include("dashboard.firstPage.createBannerModal")
             
    </div>
    @include("dashboard.layout.leftside")
@endsection

@section("extrajs")
    <script src="{{url('/')}}/dashboard/js/select2.min.js"></script>

    <script>
    $(function(){


        $("#banner_id").select2({
            templateResult: formatState,
            templateSelection: formatState
        });
        function formatState (opt) {
            if (!opt.id) {
                return opt.text.toUpperCase();
            } 

            var optimage = $(opt.element).attr('data-image'); 
            console.log(optimage)
            if(!optimage){
            return opt.text.toUpperCase();
            } else {                    
                var $opt = $(
                '<span><img src="' + optimage + '" width="60%" /> ' + opt.text.toUpperCase() + '</span>'
                );
                return $opt;
            }
        };

        $("#create_banner").on("click",function(e){
            alert("hi");
            $("#createBanner").addClass("show");
            e.preventDefault();
        });
        $(".close-modal").on("click",function(){
            $(this).parents('section').removeClass("show");
        });


        // اسکریپت های مدال ساخت بنر 


        $("#selectImgs").on("click",function(e){
            alert("A");
            $("#selectImgModal").toggleClass("show");
            e.preventDefault();
        });
        $(".modal-image").on("click",function(e){
            $("#selectedPreview").children().remove();
            $(".modal").toggleClass("show");
            var photoId = $(this).attr("photoId");
            var src = $(this).attr("src");
            var photoidInput = document.createElement("input");
            photoidInput.setAttribute("type","hidden");
            photoidInput.setAttribute("name","media_id");
            photoidInput.setAttribute("value",photoId);
            var img =  document.createElement("img");
            img.setAttribute("src",src);
            $("#bannerForm").append(photoidInput);
            $("#selectedPreview").append(img);
        });
        $("#seemoreMedia").on("click",function(){
            let moreimageForm= document.getElementById('moreimageForm');
            let theFormData = new FormData(moreimageForm);
            var action = $("#moreimageForm").attr("action");
            // formData.append('username', 'Chris');
            $.ajax({
                url:         action,
                data:        theFormData,
                cache:       false,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(e) {
                    var data= e;
                    if(data.length == 0){
                        alert("عکس بیشتری وجود ندارد");
                    }

                }
            });
            var valuesTime =  $("#moreimageForm #offset").attr("value");
            valuesTime = parseInt(valuesTime)+1;
            $("#offset").attr("value",valuesTime);        
        });
    });       
</script>
@endsection