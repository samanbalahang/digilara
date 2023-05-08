<?php
function url(){
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['HTTP_HOST']
    );
}

?>
$(function (){
    $('.data-table thead th').each( function () {
        var title = $(this).text();
        if(title != 'No' && title != 'عملیات') {
            $(this).html('<input type="text" placeholder="'+title+'" />');
        }
    } );

    var reportsTable = $(".data-table").DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
                $( 'input', this.header() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        },
        language: {
            "url": "<?=url()?>/lang/fa.json"
        }
    } );
    reportsTable.on( 'order.dt search.dt', function () {
        var i=1;
        reportsTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i=1) {
            if(i<9){
                cell.innerHTML ="0"+ (i + 1);
            }else {
                cell.innerHTML = i + 1;
            }
        });
    }).draw();

});
<?php
?>
