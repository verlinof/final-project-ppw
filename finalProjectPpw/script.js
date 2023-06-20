var first_load = document.getElementById("nav-about");
first_load.classList.add("active");

//Digunakan untuk mengaktifkan navbar ketika scrolling
window.addEventListener("scroll", function () {
  var navbar = document.querySelector("nav");
  var svgElements = document.querySelectorAll("svg");

  svgElements.forEach(function (svg) {
    var svgBox = svg.getBoundingClientRect();
    var correspondingLink = document.querySelector(
      "a[href='#" + svg.getAttribute("id") + "']"
    );

    if (svgBox.top >= 0 && svgBox.bottom <= window.innerHeight) {
      navbar.querySelectorAll("a").forEach(function (link) {
        link.classList.remove("active");
      });
      correspondingLink.classList.add("active");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("form-comment");
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah aksi submit default

    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "comment.php", true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = xhr.responseText;
        if (response === "success") {
          showAlert("Komentar berhasil disimpan.");
          form.reset();
        } else {
          showAlert("Komentar gagal disimpan.");
        }
      }
    };
    xhr.send(formData);
  });
});

function showAlert(message) {
  swal.fire(message, "", "info");
}
