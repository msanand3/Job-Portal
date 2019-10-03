<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
  <h2>ENTER THE STUDENT DETAILS BELOW:-</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <form action="inputdetailstudentdb.php" method="post">
              <div class="form-group">
                    <label>ENTER YOUR ID THAT IS ALOTED TO YOU</label>
                    <input type="number" name="id" placeholder="Enter here" class="form-control">
              </div>
              <div class="form-group">
                    <label>10th STANDARD PERCENTILE</label>
                    <input type="text" name="10per" placeholder="Enter percentage here" class="form-control">
              </div>
              <div class="form-group">
                    <label>12th STANDARD PERCENTILE</label>
                    <input type="text" name="12per" placeholder="Enter percentage here" class="form-control">
              </div>
              <div class="form-group">
                    <label>GRADUATION CPI</label>
                    <input type="text" name="cpi" placeholder="Enter CPI here" class="form-control">
              </div>
              <div class="form-group">
                    <label>NUMBER OF PROJECTS YOU WORKED</label>
                    <input type="number" name="ni" placeholder="Enter here" class="form-control">
              </div>
              <div class="form-group">
                    <label>LOCATION THAT IS COMFORTABLE TO YOU TO WORK</label>
                    <input type="text" name="location" placeholder="Enter here" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
            <h2>ENTER THE CONTACT DETAILS:-</h2>
            <div class="form-group">
                  <label>CONTACT NUMBER</label>
                  <input type="text" name="contact" placeholder="Enter here" class="form-control">
            </div>
            <div class="form-group">
                  <label>EMAIL ADDRESS</label>
                  <input type="text" name="email" placeholder="Enter here" class="form-control">
            </div>
            <div class="form-group">
                  <label>ADDRESS</label>
                  <input type="text" name="address" placeholder="Enter here" class="form-control">
            </div>
              </br></br></br></br></br>
              <button type="submit" class="btn btn-primary"><center>SUBMIT </button>
            </form>
        </div>
</body>
</html>
