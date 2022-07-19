"use sctrict";

$("form").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: "GET",
    url: "mailer/smart.php",
    data: $(this).serialize(),
  }).done(function () {
    $(this).find("input").val("");

    $("form").trigger("reset");
  });
  return false;
});
