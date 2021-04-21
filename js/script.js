var ftroca = document.querySelector(".ftroca");
var fpay = document.querySelector(".fpay");
var closeModal = document.querySelector(".close-modal");
var modalBox = document.querySelector(".modal");

ftroca.addEventListener("click", function() {
  modalBox.style.display = 'flex';
});

fpay.addEventListener("click", function() {
  modalBox.style.display = 'flex';
});

closeModal.addEventListener("click", function() {
  modalBox.style.display = 'none';
});
