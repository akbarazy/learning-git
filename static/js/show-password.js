const password = document.querySelector("input[name=password]");
const confirmPassword = document.querySelector("input[name=confirm-password]");
const showPassword = document.querySelector("input[name=show-password]");

showPassword.addEventListener("click", function () {
  // for show password register
  if (confirmPassword !== null) {
    if (password.type === "password" && confirmPassword.type === "password") {
      password.type = "text";
      confirmPassword.type = "text";
    } else if (password.type === "text" && confirmPassword.type === "text") {
      password.type = "password";
      confirmPassword.type = "password";
    }
  }

  // for show password login
  if (confirmPassword === null) {
    if (password.type === "password") {
      password.type = "text";
    } else if (password.type === "text") {
      password.type = "password";
    }
  }
});
