$(document).ready(function () {
  $(".live-search").on("keyup", function () {
    if ($(".live-search").val() === "") {
      window.location.assign("index.php");
      return;
    }

    $(".card-content").load(
      "static/ajax/live-search.php?live-search=" +
        $(".live-search").val().replace(" ", "%20")
    );
  });
});
