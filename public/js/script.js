// $(document).ready(function() {
//     $(".worker").click(function() {
//
//        //var id = elem.value;
//         //var value = $( this ).val();
//        //var id = $("value").val();
//         var id = $("a").attr("value");
//        console.log(id);
//     })
// })

function getSubordinates(id) {
    //console.log(id);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/workers/getSubstitutes/' + id,
        contentType: false,
        processData: false,

        success: function success(data) {
            //var elem = $("<span></span>").html(data);
            console.log(data);
            var a = document.getElementById(id).append("<p>" + data + "</p>");
           //var elem = $("<span></span>").text(data);
            //console.log(data);
            //$('#parent_document_select').html(fillSelectInput(data));
        },

    });
}


