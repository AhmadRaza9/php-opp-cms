$(document).ready(function () {
  var user_id;
  var image_src;
  var image_href_splitted;
  var image_id;

  $(".modal_thumbnails").click(function () {
    $("#set_user_image").attr("disabled", false);
    user_id = $(".user_id").val();

    image_src = $(this).prop("src");
    image_href_splitted = image_src.split("/");
    image_id = image_href_splitted[image_href_splitted.length - 1];
  });

  tinymce.init({ selector: "textarea" });
});
