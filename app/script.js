$(function (e) {
  const spinner = document.querySelector("#spinner");
  spinner.style.display = "flex";

  $.ajax({
    url: "aws/controller/ctrlListFiles.php",
    success: function (data) {
      $("#tablaFiles").html(data);
      spinner.style.display = "none";
    },
  });

  $(document).on("click", (e) => {
    const key = e.target.value;
    if (e.target.id === "delete") {
      $.ajax({
        url: "aws/controller/ctrlDeleteFiles.php",
        type: "POST",
        data: { key: key },
        success: function (data) {
          $("#respuesta").html(data);
        },
      });
    } else if (e.target.id === "download") {
      $.ajax({
        url: "aws/controller/ctrlDownLoad.php",
        type: "POST",
        data: { key: key },
        success: function (data) {
          $("#respuesta").html(data);
        },
      });
    }
  });

  $("#uploadFile").on("submit", (e) => {
    e.preventDefault();
    const formData = new FormData();

    const totalfiles = document.getElementById("files").files.length;
    for (let i = 0; i < totalfiles; i++) {
      formData.append("files[]", document.getElementById("files").files[i]);
    }
    $.ajax({
      url: "aws/controller/ctrlUpload.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
        // $("#respuesta").html(date);
        console.log(data);
      },
    });
  });
});
