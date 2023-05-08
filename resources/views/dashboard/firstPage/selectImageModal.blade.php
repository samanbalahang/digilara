<section class="modal" id="selectImgModal">
    <div class="w-75 centerd">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close close-modal"></button>
            </div>
            <div class="container bg-white">
                <div class="row flex-wrap">

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