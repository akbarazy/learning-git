const password = document.querySelector("input[name=password]");
const confirmPassword = document.querySelector("input[name=confirm-password]");
const showPassword = document.querySelector("input[name=show-password]");

showPassword.addEventListener("click", function () {
  if (password.type === "password" && confirmPassword.type === "password") {
    password.type = "text";
    confirmPassword.type = "text";
  } else {
    password.type = "password";
    confirmPassword.type = "password";
  }
});
