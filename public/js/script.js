/*$(document).ready(function() {
  $("#new-show-form").submit(function(e) {
    addShow(e, this);
  });
});

function addShow(e, form) {
    e.preventDefault();
    console.log("i ajax-funktionen");
    var form = $(this);

    var title = $("#add-show-title").val();
    var image = $("#add-show-image").val();
    var desc = $("#add-show-desc").val();
    var year = $("#add-show-year").val();

    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/tvshows",
        type: "POST",
        dataType: "JSON",
        //data: {
          //title: title,
          //image: image,
          //description: desc,
          //premiere_year: year
        //}
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
        console.log("fail");
        console.log(data);
    })
};*/
