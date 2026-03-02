<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mellow - Forgot Password</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/mellow.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <!-- Firebase SDK -->
  <script src="https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js"></script>

  <script type="module">
  import { auth } from "../firebase/firebase-config.js";
  import { sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js";

  // Listen for DOMContentLoaded once
  document.addEventListener("DOMContentLoaded", () => {
    const forgotPasswordForm = document.getElementById("forgot-password-form");
    const errorMessage = document.getElementById("error-message");
    const successMessage = document.getElementById("success-message");
    const emailInput = document.getElementById("email");
    const resetButton = document.querySelector("button[type='submit']");

    // Disable the reset button initially
    resetButton.disabled = true;

    // Enable the reset button only when the email field has a value
    function toggleResetButton() {
      resetButton.disabled = !emailInput.value.trim();
    }

    emailInput.addEventListener("input", toggleResetButton);

    forgotPasswordForm.addEventListener("submit", async function (e) {
      e.preventDefault();

      const email = emailInput.value.trim();

      // Clear previous messages
      errorMessage.style.display = "none";
      errorMessage.innerText = "";
      successMessage.style.display = "none";
      successMessage.innerText = "";

      // Input validation
      if (!email) {
        errorMessage.innerText = "Please enter your email.";
        errorMessage.style.display = "block";
        return;
      }

      try {
        // Send password reset email
        await sendPasswordResetEmail(auth, email);
        successMessage.innerText = "Password reset email sent. Please check your inbox.";
        successMessage.style.display = "block";
      } catch (error) {
        console.error("Error sending password reset email:", error.code);

        // Display appropriate error messages based on Firebase error codes
        switch (error.code) {
          case "auth/invalid-email":
            errorMessage.innerText = "Invalid email format.";
            break;
          case "auth/user-not-found":
            errorMessage.innerText = "No account found with this email.";
            break;
          default:
            errorMessage.innerText = "An error occurred. Please try again.";
        }
        
        // Make sure the error message is visible
        errorMessage.style.display = "block"; // Ensure error message is visible
        errorMessage.classList.add("alert", "alert-danger"); // Add Bootstrap alert classes
      }
    });
  });
  </script>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="d-flex align-items-center justify-content-center gap-3 py-3">
                  <img src="../assets/images/logos/mellow.png" width="50" alt="Mellow Logo">
                  <h1 class="fw-bold fs-10 text-dark mb-0">Mellow</h1>
                </a>

                <form id="forgot-password-form">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                  </div>

                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Reset Password</button>

                  <!-- Error Message -->
                  <p id="error-message" class="alert alert-danger text-center" style="display: none;"></p>
                  <!-- Success Message -->
                  <p id="success-message" class="alert alert-success text-center" style="display: none;"></p>
                </form>

                <!-- Back to Sign In Link -->
                <div class="text-center mt-4">
                  <a href="./index.php" class="text-primary fw-bold">Back to Sign In</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>