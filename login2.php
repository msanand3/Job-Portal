<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
  <h2>WELCOME TO CAMPUS RECRUITMENT PORTAL</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2> COMPANY LOGIN </h2>
            <form action="validation2.php" method="post">
              <div class="form-group">
                    <label>NAME</label>
                    <input type="text" name="user" placeholder="Enter the username here" class="form-control">
              </div>
              <div class="form-group">
                    <label>PASSWORD</label>
                    <input type="password" name="password" placeholder="Enter the password here" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary"> LOGIN </button>
            </form>
          </div>
            <div class="col-lg-6">
              <h2> COMPANY SIGNUP </h2>
                <form action="registration2.php" method="post">
                  <div class="form-group">
                        <label>COMPANY NAME</label>
                        <input type="text" name="user" placeholder="Enter the username here" class="form-control">
                  </div>
                  <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" name="password" placeholder="Enter the password here" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary"> SIGNIN </button>
                </form>
      </div>
</body>
</html>
