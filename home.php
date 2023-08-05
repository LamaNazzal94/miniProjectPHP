<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include 'nav.php'; ?>
  <div class="content">
    <section class="welcome-section">
      <div class="welcome-bg"></div>
      <div class="welcome-content">

        <h1>Welcome to mobiletech - Your Ultimate Destination for Mobile Devices!</h1>
        <p>Discover the Future of Mobile Communication with mobiletech!

          Start browsing now and find the phone that matches your needs and style. Thank you for choosing us as your
          go-to mobile store. We look forward to serving you and ensuring your mobile experience is nothing short of
          exceptional.

          Happy shopping!</p>
        <a href="#" class="btn btn-primary">Get Started</a>
      </div>
    </section>
    <form method="POST" action="homeForm.php">
      <div class="form-group">
        <label id ="name" for="Name">product name </label>
        <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Product Name">
      </div>
      <div class="form-group">
        <label for="Password1">product Price</label>
        <input type="text" class="form-control" id="Price" name="price" placeholder="Price">
      </div>
      <div class="form-group">
        <label for="Image">Product Image </label>
        <input type="text" class="form-control" id="Image" name="image" placeholder="Enter Product Image">
      </div>
      <div class="form-group">
        <label for="Textarea">product Description</label>
        <textarea class="form-control" id="Textarea" name="Textarea" rows="3"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" id="submit" class="btn btn-primary" name="submit">Add Product</button>
      </div>
    </form>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <table class="table  table-bordered table-hover ">
            <thead>
              <tr>
                <th scope="col"> name</th>
                <th scope="col"> price</th>
                <th scope="col"> image</th>
                <th scope="col"> description</th>
              </tr>
            </thead>
            <tbody>
              <?php

              if (isset($_SESSION['product'])) {
                foreach ($_SESSION['product'] as $value) {
                  ?>
                  <tr>
                    <td>
                      <?php
                      echo $value["name"]; ?>
                    </td>
                    <td>
                      <?php echo $value["price"]; ?>
                    </td>
                    <td> <img style="width:200px" src="<?php echo $value["image"]; ?>" alt=""></td>
                    <td>
                      <?php echo $value["description"]; ?>
                    </td>
                  </tr>
                <?php
                }
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
 
  <?php include 'footer.php'; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>