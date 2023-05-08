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
                    <a class="btn btn-black has-arrow-up" data-mdb-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                        ساخت بنر
                    </h1>
                </section>
                <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data" id="bannerForm">
                    @csrf
                    <div class="md-form mb-5 ">
                        <input type="text" id="banner_uri" name="banner_uri" class="form-control en">
                        <label for="banner_uri" class="label en">عنوان انگلیسی</label>
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
                        <input type="button" id="loadFileXml" value="بارگذاری عکس" onclick="document.getElementById('fileupload').click();" class="btn btn-yellow" />
                        <input type="file" style="display:none;" name="indeximg" value="افزودن عکس شاخص" accept="image/*" id="fileupload" />
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
    <section class="modal">
        <div class="w-75 centerd">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close close-modal"></button>
                </div>
                <div class="container bg-white">
                    <div class="row flex-wrap">
                        @foreach ($firstMedias as $media)
                        <div class="col">
                            <img src="{{url('/')}}/{{$media->image_path}}" alt="{{$media->photo_alt}}" class="modal-image" photoId="{{$media->id}}">

                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-modal" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="seemoreMedia">مشاهده عکس های بیشتر</button>
                    <form id="moreimageForm" action="{{route('bannerMorMedia')}}">
                        @csrf
                        <input type="hidden" value="2" id="offset">
                        <input type="submit" style="display: none;">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@include("dashboard.layout.leftside")
@endsection

@section("extrajs")

<script>
    $(".close-modal").on("click", function(e) {
        $(".modal").toggleClass("show");

    });
    $("#selectImg").on("click", function(e) {
        $(".modal").toggleClass("show");
        e.preventDefault();
    });
    $(".modal-image").on("click", function(e) {
        $("#selectedPreview").children().remove();
        $(".modal").toggleClass("show");
        var photoId = $(this).attr("photoId");
        var src = $(this).attr("src");
        var photoidInput = document.createElement("input");
        photoidInput.setAttribute("type", "hidden");
        photoidInput.setAttribute("name", "media_id");
        photoidInput.setAttribute("value", photoId);
        var img = document.createElement("img");
        img.setAttribute("src", src);
        $("#bannerForm").append(photoidInput);
        $("#selectedPreview").append(img);
    });
    $("#seemoreMedia").on("click", function() {
        let moreimageForm = document.getElementById('moreimageForm');
        let theFormData = new FormData(moreimageForm);
        var action = $("#moreimageForm").attr("action");
        // formData.append('username', 'Chris');
        $.ajax({
            url: action,
            data: theFormData,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(e) {
                var data = e;
                if (data.length == 0) {
                    alert("عکس بیشتری وجود ندارد");
                }

            }
        });
        var valuesTime = $("#moreimageForm #offset").attr("value");
        valuesTime = parseInt(valuesTime) + 1;
        $("#offset").attr("value", valuesTime);
    });
</script>


@endsection