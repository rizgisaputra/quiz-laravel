<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body
   style="background: rgb(22,150,217);
   background: linear-gradient(0deg, rgba(22,150,217,1) 16%, rgba(79,8,116,1) 85%);">

   <div class="container-fluid">
    <div
      class="container d-flex justify-content-center align-items-center vh-100"
    >
      <div
        class="card"
        style="
          width: 40%;
          height: 80%;
          background-color:white;
        "
      >
        <div class="d-flex flex-column justify-content-between py-3">
          <span class="fw-bold text-dark fs-4 d-flex justify-content-center"
            >FORM REGISTER</span
          >
          <div class="form px-4 mt-2">
            <form action="{{ route('login') }}">
            <div class="d-flex flex-column gap-3">
                <div class="username">
                  <label for="username" class="form-label text-dark"
                    >Username
                  </label>
                  <input
                    type="username"
                    class="form-control"
                    id="username"
                    placeholder="Username"
                  />
                </div>
              <div class="d-flex flex-column gap-3">
                <div class="email">
                  <label for="emails" class="form-label text-dark"
                    >Email
                  </label>
                  <input
                    type="email"
                    class="form-control"
                    id="emails"
                    placeholder="name@example.com"
                  />
                </div>
                <div class="password">
                  <label for="passwords" class="form-label text-dark"
                    >Password
                  </label>
                  <input
                    type="password"
                    class="form-control password"
                    id="passwords"
                    placeholder="Password"
                  />
                </div>
                <div class="submit mt-4">
                  <button
                    type="submit"
                    id="button-submit"
                    class="w-100 rounded fw-bold btn btn-primary"
                    style="
                      color: white;
                      height: 3rem;
                    "
                  >
                    Submit
                  </button>
                </div>
                <a href="login.php" class="d-flex justify-content-center"><span>Sudah Memiliki Account ? </span> Login</a>
              </div>
            </form>
        </div>
      </div>
    </div>
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
