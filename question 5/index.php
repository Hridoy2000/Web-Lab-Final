<?php

require_once ("../question 5/php/component.php");
require_once ("../question 5/php/operation.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 5</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-danger rounded"><i class="fas fa-tv"></i> Solution Of Question 5</h1>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-card'></i>","ID", "id",""); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-signature'></i>","Name", "name",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-male'></i>","Age", "age",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-user'></i>","UserName", "username",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-key'></i>","Password", "password",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-danger","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-dark","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light success","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                </div>
            </form>
        </div>
        <!-- Bootstrap table  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php
                   if(isset($_POST['read'])){
                       $result = getData();
                       if($result){
                           while ($row = mysqli_fetch_assoc($result)){ ?>
                               <tr>
                                   <td data-id="<?php echo $row['id'];?>"> <?php echo $row['id'];?></td>
                                   <td data-id="<?php echo $row['id'];?>"> <?php echo $row['name'];?></td>
                                   <td data-id="<?php echo $row['id'];?>"> <?php echo $row['age'];?></td>
                                   <td data-id="<?php echo $row['id'];?>"> <?php echo $row['username'];?></td>
                                   <td data-id="<?php echo $row['id'];?>"> <?php echo $row['password'];?></td>
                                   <td> <i class="fas fa-edit btnedit"data-id="<?php echo $row['id'];?>"></i><td>
                               </tr>
                   <?php
                           }
                       }
                   }
          
                   ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../question 5/php/main.js"></script>
</body>
</html>