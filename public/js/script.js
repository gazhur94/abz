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
    console.log(id);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        dataType: "json",
        url: '/workers/getSubstitutes/' + id,
        contentType: false,
        processData: false,

        success: function success(data) {
            var elem = document.getElementById(id);


            $.each(data, function(k) {
                var name = data[k].name;
                var position = data[k].position;
                var newId = data[k].id;
                console.log(data[k].id);
                $("<ul>" +
                    "<li onclick=\"getSubordinates(data[k].id)\" id=\"data[k].id\">" +
                        "<a style=\"text-decoration: none; color: black; cursor: pointer\">"
                            + name + " | " + position + "" +
                        "</a>" +
                    "</li>" +
                "</ul>")
                .appendTo(elem);
            });




        },

    });
}


