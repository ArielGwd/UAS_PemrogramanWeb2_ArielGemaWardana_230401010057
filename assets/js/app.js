const form = document.getElementById("form-submit");
const button = document.getElementById("btn-submit");
const spinner = document.getElementById("spinner-submit");
const textSubmit = document.getElementById("text-submit");

form.addEventListener("submit", (e) => {
  button.classList.add("disabled");
  spinner.classList.remove("d-none");
  textSubmit.textContent = "Loading...";
});

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

// form searching
const searchForm = document.getElementById("form-search");
const searchButton = document.getElementById("btn-search");
const searchSpinner = document.getElementById("spinner-search");
const searchText = document.getElementById("text-search");
const iconSearch = document.getElementById("icon-search");

searchForm.addEventListener("submit", (e) => {
  searchButton.classList.add("disabled");
  searchSpinner.classList.remove("d-none");
  iconSearch.classList.add("d-none");
  searchText.textContent = "Loading...";
});
