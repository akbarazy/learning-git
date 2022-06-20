$(document).ready(function () {
  $(".live-search").on("keyup", function () {
    $(".card-content").load(
      "static/ajax/live-search.php?live-search=" + $(".live-search").val()
    );

    if ($(".live-search").val() === "") {
      window.location.assign("index.php");
      return;
    }
  });
});
