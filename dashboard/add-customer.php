<?php include "header.php"; ?>		
<div class="container">
	<div class="row p-3">
		<h2 class="heading">Dashboard - <span>Add Customer</span></h2>
        <hr>
	</div>
	
	<!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">								
                        <div class="row text-start fw-bold">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Customer Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>	
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email">Mobile No.</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile No.">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">Save</button>
                            </div>						
                        </div>
                    </form>
                    <?php
                    if($_POST)
                    {
                        extract($_POST);  

                        // check if customer already exists
                        $stmt = $pdo->prepare("SELECT * from customers where mobile=:mobile");
                        $stmt->bindParam(":mobile", $mobile, PDO::PARAM_STR);
                        $stmt->execute();
                        $count = $stmt->rowCount();
                        
                        if($count==0)
                        {
                            $stmt = $pdo->prepare("
                            INSERT into customers(name,mobile) values(:name,:mobile)
                            ");
                            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
                            $stmt->bindParam(":mobile", $mobile, PDO::PARAM_STR);
                            $stmt->execute();
                            echo "
                                <script>
                                swal('Success!', 'Data saved!', 'success');
                                </script>
                            ";
                        }
                        else
                        {
                                echo "
                                <script>
                                swal('Error!', 'Customer already exists.', 'error');
                                </script>
                            ";
                        }
                    }
                    ?>
                </div>							
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

<?php include "footer.php"; ?>