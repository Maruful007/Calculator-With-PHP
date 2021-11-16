<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calculator</title>
  </head>
  <body class="bg-dark">
    <header>
      <nav class="navbar navbar-dark bg-dark text-light p-3 m-auto">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Calculator By Maruful Islam</span>
        </div>
      </nav>
    </header>

    <main>
      <form action="index.php" attribute="post" method="post">
        <div class="card p-3 m-auto p-1" style="width: 30rem;">
          <div class="card-body">
            <input class="form-control" type="text" placeholder="Enter First Value Here" name="num1">
            <br>
            <br>
            <input class="form-control" type="text" placeholder="Enter Second Value Here" name="num2">  
            <br>
            <br>

            <span class="py-2">
            <input type="radio" class="btn-check" name="oparator" id="addition" value="addition" autocomplete="off">
            <label class="btn btn-outline-primary" for="addition">ADD</label>
            </span>
            <span class="py-2">
            <input type="radio" class="btn-check" name="oparator" id="substraction" value="substraction" autocomplete="off">
            <label class="btn btn-outline-primary" for="substraction">Subtract</label>
            </span>
            <span class="py-2">
            <input type="radio" class="btn-check" name="oparator" id="multiplication" value="multiplication" autocomplete="off">
            <label class="btn btn-outline-primary" for="multiplication">Multiply</label>
            </span>
            <span class="py-2">
            <input type="radio" class="btn-check" name="oparator" id="division" value="division" autocomplete="off">
            <label class="btn btn-outline-primary" for="division">Divide</label>
            </span>

            <span class="py-2">
            <button type="submit" class="btn btn-primary" name="equals" id="equals" value="equals">Solve</button>
            </span>


          </div>          
        <div>        
      </form>  
    </main>
    <br>
    <br>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$value;
$oparator = $_POST['oparator'];

if(isset($_POST['equals'])){
  if(is_numeric($num1) && is_numeric($num2)) {
    switch($oparator) {
      case "addition":
      $value = $num1 + $num2;
      echo '<h1 class="text-center text-light">The Value OF '. $num1 .' and '. $num2 .' is: </h1>';
      echo '<br>';
      echo '<h1 class="text-center text-light">'. $num1 .' &#43; '. $num2 .' &#61; '. $value .'</h1>';
      break;
  
      case "substraction":
      $value = $num1 - $num2;
      echo '<h1 class="text-center text-light">The Value OF '. $num1 .' and '. $num2 .' is: </h1>';
      echo '<br>';
      echo '<h1 class="text-center text-light">'. $num1 .' &#8722; '. $num2 .' &#61; '. $value .'</h1>';    
      break;
  
      case "multiplication":
      $value = $num1 * $num2;
      echo '<h1 class="text-center text-light">The Value OF '. $num1 .' and '. $num2 .' is: </h1>';
      echo '<br>';
      echo '<h1 class="text-center text-light">'. $num1 .' &#215; '. $num2 .' &#61; '. $value .'</h1>';
      break;
  
      case "division":
      $value = $num1 / $num2;
      echo '<h1 class="text-center text-light">The Value OF '. $num1 .' and '. $num2 .' is: </h1>';
      echo '<br>';
      echo '<h1 class="text-center text-light">'. $num1 .' &#247; '. $num2 .' &#61; '. $value .'</h1>';
      break;
  
      default:
      echo '<h1 class="text-center text-danger"> Something Went Wrong !! </h1>';
      break;
    }
  }
  
  else{
  echo '<h1 class="text-center text-danger"> Something Went Wrong !! </h1>';
}
}
else{
  echo '<h1 class="text-center text-primary"> Welcome To My Calculator </h1>';
}

?>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
