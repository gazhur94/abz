function getSubordinates(id) {

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        dataType: "json",
        contentType: "application/json",
        data : JSON.stringify({
            id: id
        }),
        url: '/workers/getSubstitutes',

        processData: false,

        success: function success(data) {
            //console.log(data);
            var elem = document.getElementById(id);

            $.each(data, function(k) {
                var name = data[k].name;
                var position = data[k].position;
                var newId = data[k].id;
                $("<ul>" +
                    "<li onclick=\"getSubordinates(" + newId + ")\" id=\"" + newId + "\">" +
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


