
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>SK BANK</title>
   
</head>
<body>


<section>
  <nav class="navbar navbar-expand-lg navbar-dark py-3 bg-dark fixed-top"> 
  <div class="container-fluid">
   <a class="logo1" href="#"><h3><i class="fad fa-university"></h3></i></a>
    <a class="navbar-brand" href="#">SF BANK</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link ms-5"  active href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ms-5"  href="transfer_money.php">View All Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ms-5"  href="transfer_money.php">Transactions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ms-5"  href="transactionhistory.php">Transaction History</a>
        </li>
        
        
      </ul>  
    </div>
  </div>
  </section>
   



	<div class="container text-center py-4">
   
       <div class="table-responsive-sm">
       <h1 class="text-center py-4">TRANSACTION HISTORY</h1>
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
        <h1 class="text-center py-4">TRANSACTION HISTORY</h1>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<!-- footer -->
<footer class="footer">
    <p> <i> <i class="far fa-copyright"></i></i> 2021. Made by <b>PRIYA GHEWADE</b> <br> GRIP @The Sparks Foundation</p>
    </footer>


</body>
</html>