
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glide demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

  <h1>Glide Api demo</h1>


    <!-- to load all the content -->
    <form method="post" action="loadContent.php">
    <input class='btn btn-primary' type="submit"  value="load content">
    </form>

  <br>

  <!-- to show the content  -->
    <form method="post" action="getData.php">
    <input class='btn btn-info' type="submit"  value="show_content">
    </form>

  <!-- to show the content of selected date period and its average calorific value  -->
  <div class="col-md-4">
    <h4>

   To find the average calorific value

   </h4>
  <form method="post" action="calculate_average.php">
    <b>Date from  </b>  <input type="date" class="form-control" name="dateFrom" required>
     <b> Date to </b>  <input type="date" class="form-control" name="dateTo" required>
     <br>
    <input class='btn btn-info' type="submit"  value="find_average">
    </form>

  </div>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html> 