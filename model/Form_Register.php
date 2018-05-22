<!-- <h1 align="center">Form Register</h1>
  <form action="Register.php" method="post">
      <table align="center">
        <tr>
          <td>Username</td>
          <td>:</td>
          <td>
            <input type="text" name="username" value="">
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td>
            <input type="password" name="password" value="">
          </td>
        </tr>
        <tr>
          <td>Ulangi Password</td>
          <td>:</td>
          <td>
            <input type="password" name="ulangi_password" value="">
          </td>
        </tr>
        <tr>
          <th colspan="3">
            <button type="submit" name="button">Daftar</button>
            <a href="Form_Akun.php" align="center">
              <button type="button" name="button">Kembali</button>
            </a>
          </th>
        </tr>
      </table>
    </form> -->

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.css">
      </head>
      <body>
        <h1 align="center">Form Register</h1>
        <form class="container" action="Register.php" method="post">
          <br>
          <div class="row">
            <div class="col-md-4" align="right">
                  <label for="username">Username</label>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control"
                name="username" id="username">
            </div>
            <div class="col-md-4">

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4" align="right">
              <label for="password">Password</label>
            </div>
            <div class="col-md-4">
              <input type="password" class="form-control"
              name="password" id="password">
            </div>
            <div class="col-md-4">

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4" align="right">
              <label for="password">Ulangi Password</label>
            </div>
            <div class="col-md-4">
              <input type="password" class="form-control"
              name="ulangi_password" id="ulangi_password">
            </div>
            <div class="col-md-4">

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" align="center">
              <button type="submit" class="btn btn-primary">Daftar</button>
              <a href="Form_Akun.php" align="center">
                <button type="button" class="btn btn-primary">Kembali</button>
              </a>
            </div>
            <div class="col-md-4">

            </div>
          </div>

        </form>
        <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
        <script src="js/bootstrap.js" charset="utf-8"></script>
      </body>
    </html>
