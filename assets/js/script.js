// back to top
var btn = $("#button");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

// Modal

// const openModalBtn = document.querySelectorAll(".open1");
const closeModal = document.querySelector(".close-modal");
const modal = document.querySelector(".modal1");
const modalContainer = document.querySelector(".modal-container");

// open modal
// openModalBtn.forEach((openModal) => {
//   openModal.addEventListener("click", () => {
//     modal.classList.remove("hide");
//     modalContainer.classList.remove("hide");
//   });
// });
// close modal
closeModal.addEventListener("click", () => {
  setTimeout(() => {
    modal.classList.add("hide");
  }, 800);
  modalContainer.classList.add("hide");
});



