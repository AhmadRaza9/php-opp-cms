$(document).ready(function () {
  $(".modal_thumbnails").click(function () {
    $("#set_user_image").attr("disabled", false);
    console.log($(".user_id").val());
  });

  tinymce.init({ selector: "textarea" });
});
