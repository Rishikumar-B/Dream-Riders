
    let MenuBtn = document.querySelector("#MenuBtn");
    let Navbar = document.querySelector(".navbar");

    MenuBtn.onclick = () => {
        MenuBtn.classList.toggle("fa-times");
        Navbar.classList.toggle("active");
    };

    window.onscroll = () => {
        MenuBtn.classList.remove("fa-times");
        Navbar.classList.remove("active");
        ThemeToggle.classList.remove("active");
    };

    // Login Form
    // JavaScript code to handle login form container
document.addEventListener("DOMContentLoaded", () => {
  const inputBoxes = document.querySelectorAll("input[type='text'], input[type='password']");
  const loginFormContainer = document.querySelector(".loginFormContainer");
  const closeButton = document.getElementById("CloseLoginForm");

  // Function to show the login form container
  function showLoginForm() {
    loginFormContainer.classList.add("active");
  }

  // Function to hide the login form container
  function hideLoginForm() {
    loginFormContainer.classList.remove("active");
  }

  // Add click event listeners to input boxes to show the form
  inputBoxes.forEach((inputBox) => {
    inputBox.addEventListener("click", showLoginForm);
  });

  // Add click event listener to close button to hide the form
  closeButton.addEventListener("click", hideLoginForm);

  // Add click event listener to the document to hide the form when clicking outside
  document.addEventListener("click", (event) => {
    if (!loginFormContainer.contains(event.target) && event.target !== inputBoxes) {
      hideLoginForm();
    }
  });
});


    // Theme Toggle
    let ThemeToggle = document.querySelector(".themeToggle");
    let ToggleBtn = document.querySelector(".ToggleBtn");

    ToggleBtn.onclick = () => {
        ThemeToggle.classList.toggle("active");
        MenuBtn.classList.remove("fa-times");
        Navbar.classList.remove("active");
    };
    document.querySelectorAll(".themeToggle .themeBtn").forEach((btn) => {
        btn.onclick = () => {
            let color = btn.style.background;
            document.querySelector(":root").style.setProperty("--main", color);
        };
    });

