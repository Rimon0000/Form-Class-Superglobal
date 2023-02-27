<?php
include_once 'person.php';

//handle form submission
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>

    </header>
    <main>
        <section class="p-3 bg-body-tertiary">
          <h1 class="text-center m-4">Welcome to here</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100 border-lg bg-warning-subtle p-3 text-center rounded">
                        <h2 class="title mb-3">Please submit the form</h2>
                        <form action="index.php" method="post">
                            <div class="mb-3">
                              <input type="text" name="name" class="form-control mb-4" id="exampleInputEmail1" placeholder="Name">
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 p-2">
                    <h1 class="text-center">Task - 2</h1>
                    <h3 class="text-center">Basic OOP in PHP</h3>
                    <hr>
                    <?php
                    $obj = new Person('Rimon ron', "rimon-ron@gmail.com");
                    $obj->person_details();
                     ?>
                  </div>
                </div>
                <div class="col">
                  <?php if (isset($name)): ?>
                    <div class="card h-100 p-2">
                       <h1 class="text-center">Task - 3</h1>
                       <h3 class="text-center">Super Global variable in PHP</h3>
                       <hr>
                       <h5 class="">Name:  <?php echo "{$name}" ?></h5>
                         <h5 class="">Email: <?php echo "{$email}" ?> </h5>
                    </div>
                  <?php endif;?>
                </div>

              </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>