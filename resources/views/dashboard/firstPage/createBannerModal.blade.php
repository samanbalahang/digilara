<section class="modal" id="createBanner">
    <div class="w-75 centerd">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close close-modal"></button>
            </div>
            <div class="container">
                <div class="row flex-wrap">
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
                            <a href="#" class="btn btn-yellow" id="selectImgs">انتخاب تصویر</a>

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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-modal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="seemoreMedia">ذخیره</button>
                <form id="moreimageForm" action="{{route('bannerMorMedia')}}">
                    @csrf
                    <input type="hidden" value="2" id="offset">
                    <input type="submit" style="display: none;">
                </form>
            </div>
</section>
@include("dashboard.firstPage.selectImageModal")