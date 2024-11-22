document.querySelectorAll(".editUser").forEach((button) => {
  button.addEventListener("click", function () {
    var modal = new bootstrap.Modal(document.getElementById("modal-edit"), {});
    modal.show();
  });
});
document.querySelector(".dismiss").addEventListener("click", function () {
  var modal = bootstrap.Modal.getInstance(
    document.getElementById("modal-edit")
  );
  modal.hide();
});
