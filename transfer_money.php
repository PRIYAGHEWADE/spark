<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<!-- nav -->
<?php include('nav.php'); ?>


<div class="container text-center">
       
            <div class="row">
            <h1 class="text-center py-4">TRANSACTION</h1>
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-3">Id</th>
                            <th scope="col" class="text-center py-3">Name</th>
                            <th scope="col" class="text-center py-3">E-Mail</th>
                            <th scope="col" class="text-center py-3">Balance</th>
                            <th scope="col" class="text-center py-3">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="  py-4"><?php echo $rows['id'] ?></td>
                        <td class="  py-4"><?php echo $rows['name']?></td>
                       
                        <td class="  py-4"><?php echo $rows['email']?></td>
                        <td class=" py-4"><?php echo $rows['balance']?></td>
                        <td><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class=" text-center py4 btn btn-primary">Transaction</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 


<!-- footer -->
<?php include('footer.php'); ?>

</body>
</html>
