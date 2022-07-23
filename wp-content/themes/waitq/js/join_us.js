$(document).ready(function() {
    console.log("step 1");
    $('.register').on('click',function(e) {
        console.log("add hotel");
        e.preventDefault();
        var data = new FormData(this);

        $.ajax({
            data : data,
            url  : myajax, //
             
        });
    });
});