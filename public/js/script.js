$(document).ready(function() {
alert("Produkten har sparats!");
});

//window.onload = function() {
  //alert("hej");
//};

$("#submit-show-button").on("submit", function(e) {
    e.preventDefault();
    console.log("i ajax-funktionen");
    var form = $(this);
    $.ajax({
        url: "/tvshows",
        type: "POST",
        dataType: "JSON",
        data: form.serialize()
    }).done(function(data) {
        if (data.success === true) {
            //fetchProducts();
            form[0].reset();
            alert("Produkten har sparats!");
        } else {
            alert("Produkten kunde inte sparas...");
        }
    }).fail(function(data) {
        console.log(data);
    })
});
