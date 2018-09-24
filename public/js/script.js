$("h1").css("color", "red");

$('#btn_start').click(function() {
   
    $("#message")
        .html("new")
        .css("background-color", "red")
        .parent()
        .css("background-color", "blue")
        .width(150)

});

$('#btn_reset').click(function() {
   location.reload();
});


