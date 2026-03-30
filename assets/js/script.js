const form = document.getElementById("portfolioForm");
const errorMsg = document.getElementById("errorMsg");
const fileInput = document.getElementById("fileInput");
const chosenImg = document.getElementById("chosenImg");

// image preview code
fileInput.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      chosenImg.src = e.target.result;
      chosenImg.style.display = "block";
    };
    reader.readAsDataURL(file);
  } else {
    chosenImg.src = "";
    chosenImg.style.display = "none";
  }
});

// error message
form.addEventListener("submit", function (e) {
  if (!form.checkValidity()) {
    e.preventDefault();
    errorMsg.classList.add("show");

    setTimeout(() => {
      errorMsg.classList.remove("show");
    }, 3000);
  }
});
