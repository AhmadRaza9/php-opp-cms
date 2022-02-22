$(document).ready(function () {
  var user_id;
  var image_src;
  var image_href_splitted;
  var image_name;

  $(".modal_thumbnails").click(function () {
    $("#set_user_image").attr("disabled", false);
    user_id = $(".user_id").val();

    image_src = $(this).prop("src");
    image_href_splitted = image_src.split("/");
    image_name = image_href_splitted[image_href_splitted.length - 1];
  });

  $("#set_user_image").click(function () {
    $.ajax({
      url: "includes/ajax_code.php",
      data: { image_name: image_name, user_id: user_id },
      type: "POST",
      success: function (data) {
        if (!data.error) {
          $(".user_image_box a img").prop("src", data);
        }
      },
    });
  });

  tinymce.init({ selector: "textarea" });
});
