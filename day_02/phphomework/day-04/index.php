<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5">
    <div class="card p-4 shadow-lg">
      <h3 class="text-center mb-3">Registration Form</h3>

      <form id="regForm" action="backend.php" method="POST" onsubmit="return validateForm()">
        <div class="mb-3">
          <label>Full Name</label>
          <input type="text" class="form-control" name="name" id="name" required>
          <p class="text-danger" id="nameError"></p>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email" required>
          <p class="text-danger" id="emailError"></p>
        </div>

        <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" name="password" id="password" required>
          <p class="text-danger" id="passwordError"></p>
        </div>

        <div class="mb-3">
          <label>Confirm Password</label>
          <input type="password" class="form-control" name="confirm" id="confirm" required>
          <p class="text-danger" id="confirmPass"></p>
        </div>

        <div class="mb-3">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" id="phone" required>
          <p class="text-danger" id="phoneError"></p>
        </div>

        <button class="btn btn-primary w-100" type="submit">Register</button>
      </form>
    </div>
  </div>


  <script>
    function validateForm() {
      let valid = true;
      document.querySelectorAll("p.text-danger").forEach(e => e.innerText = "");
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value.trim();
      const confirm = document.getElementById('confirm').value.trim();
      const phone = document.getElementById('phone').value.trim();


      if (!/^[A-Za-z\s]+$/.test(name)) {
        document.getElementById('nameError').innerText = 'invalid Name please try again';
        valid = false;
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('emailError').innerText = "invalid email address";
        valid = false;
      }

      if (password.length < 6) {
        document.getElementById('passwordError').innerText = "minimum password length is 6 digit";
        valid = false;
      }

      if (password !== confirm) {
        document.getElementById('confirmPass').innerText = "confirm password not match ";
        valid = false;
      }

      if (!/^\d{11}$/.test(phone)) {
        document.getElementById('phoneError').innerText = "invalid phone ";
        valid = false;

      }
      return valid;

    }
  </script>

</body>

</html>