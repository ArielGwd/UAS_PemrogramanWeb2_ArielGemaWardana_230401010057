const forms = document.querySelectorAll(".form-submit");
const buttons = document.querySelectorAll(".btn-submit");
const spinners = document.querySelectorAll(".spinner-submit");
const textSubmits = document.querySelectorAll(".text-submit");

forms.forEach((form, index) => {
  form.addEventListener("submit", (e) => {
    buttons[index].classList.add("disabled");
    spinners[index].classList.remove("d-none");
    textSubmits[index].textContent = "Loading...";
  });
});
