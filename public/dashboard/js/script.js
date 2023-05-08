$(function(){
    $(".form-control").on("focus",function(e){
        $(this).siblings(".label").addClass("active");
    });
    $(".form-control").on("focusout",function(e){
        if($(this).val()==""){
            $(this).siblings(".label").removeClass("active");
        }
    });
    $("#fileupload").on("change",function(evt){
            var img = document.createElement("img");
            const file = this.files[0];
            if (file) {
                var src =URL.createObjectURL(file);
                img.setAttribute("class","w-100");
                img.setAttribute("src",src);
                $("#preview").append(img);
            }
          }


    );
 

    $('#myTab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
      });
    //   $('.data-table').DataTable();
    $('.data-table thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="'+title+'" />' );
    });

    // DataTable
    var table = $('.data-table').DataTable({
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],

    initComplete: function () {
            // Apply the search
            this.api().columns().every(function () {
                var that = this;
                $('input', this.header()).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that.search( this.value ).draw();
                    }
                });
            });
        }
    });
    table.on('order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each(function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();
    $("#addpost-tab0").click(function(){
        $("#profile0").removeClass('active show');
        $("#addpost0").addClass('active show');
    });

    $("#showpost-tab0").click(function(){
        $("addpost0").removeClass('active show');
        $("#profile0").addClass('active show');
    });

$("#postfutureImgsrc").click(function(){
    $("#postfutureImg").click();
});
      $("#postfutureImg").change(function(){
          console.log('done');
        var file =  $("#postfutureImg").get(0).files[0];

        if(file){
            var reader = new FileReader();
            console.log(reader.reault);
            reader.onload = function(){
                $("#postfutureImgsrc").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
      });

      $("#addPostCat").click(function(){
            swal.fire({
                title:'درج دسته بندی',
                html:'<form><div class="form-outline mb-4"><input type="text" id="postCatTitle" class="form-control" /><label class="form-label" for="postCatTitle">عنوان</label></div><div class="form-outline mb-4"><input type="text" id="postCatDesc" class="form-control" /><label class="form-label" for="postCatDesc">توضیحات</label></div>',
                confirmButtonText: 'درج'
            });
      });
      $(".has-arrow-up").click(function (){
          $('.fas', this).toggleClass('fa-angle-up');
          $('.fas', this).toggleClass('fa-angle-down');
      });

/* ---------------------------------------------
------------------------------------------------
------------------------------------------------*/
//   SORTABLE
/* ---------------------------------------------
------------------------------------------------
------------------------------------------------*/

// Nested demo
$("ol.example").sortable();

var group = $("ol.serialization").sortable({
    group: 'serialization',
    delay: 500,
    onDrop: function ($item, container, _super) {
        var data = group.sortable("serialize").get();

        var jsonString = JSON.stringify(data, null, ' ');

        $('#serialize_output2').text(jsonString);
        _super($item, container);

        $item.css({
            top:'0px',
            left:'0px',
        });
    },

});


});
