<?php
echo '<script src="https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js"></script>';
echo '<script src="https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js"></script>';
echo '<script type="module">
    import { auth } from "../firebase/firebase-config.js";
    import { signOut } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js";

    document.addEventListener("DOMContentLoaded", async () => {
      try {
        await signOut(auth);
        console.log("User signed out successfully.");
        window.location.href = "index.php"; // Redirect to login page
      } catch (error) {
        console.error("Error signing out:", error);
      }
    });
  </script>';
?>