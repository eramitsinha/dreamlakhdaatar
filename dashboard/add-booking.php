<?php include "header.php"; ?>		
<div class="container">
	<div class="row p-3">
		<h2 class="heading">Dashboard - <span>Add Booking</span></h2>
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
                            <div class="col-md-3 col-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="name">Customer Name</label>
                                    <?php
                                        $stmt = $pdo->prepare("SELECT * from customers");
                                        $stmt->execute();
                                    ?>
                                    <select name="customer_id" class="form-control">
                                        <option>- Choose Customer -</option>
                                    <?php
                                        foreach($stmt as $customer)
                                        {
                                    ?>
                                        <option value="<?php echo $customer['id']; ?>">
                                            <?php echo $customer['name']; ?> (<?php echo $customer['mobile']; ?>)
                                        </option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="email">Project</label>
                                    <select name="project" class="form-control">
                                        <option>- Choose Project -</option>
                                        <option value="Shree Shyam City Phase 1">
                                         Shree Shyam City Phase 1
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                                <label>Block</label>
                                <input type="text" name="block" class="form-control" required>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                                <label>Area (sq ft.)</label>
                                <input type="text" name="area" class="form-control" required>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                                <br>
                                <label>Plot Rate</label>
                                <input type="text" name="rate" class="form-control" required>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                                <br>
                                <label>Plot Cost</label>
                                <input type="text" name="total" class="form-control" required>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                             <br>
                                <label>Paid Amount</label>
                                <input type="text" name="paid" class="form-control" required>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3">
                                <br>
                                <label>Balance</label>
                                <input type="text" name="balance" class="form-control" required>
                            </div>

                            <div class="col-md-3 col-6 col-lg-3">
                                <br>
                                <div class="mb-3">
                                    <label for="email">Payment Mode</label>
                                    <select name="mode" class="form-control emi">
                                        <option>- Choose -</option>
                                        <option value="Cash">
                                         Cash
                                        </option>
                                        <option value="Online">
                                         UPI / Online
                                        </option>
                                        <option value="Cheque">
                                            Cheque
                                        </option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-md-3 col-6 col-lg-3">
                                <br>
                                <div class="mb-3">
                                    <label for="email">EMI (yes/no)</label>
                                    <select name="emi" class="form-control emi">
                                        <option>- Choose -</option>
                                        <option value="yes">
                                         Yes
                                        </option>
                                        <option value="no">
                                         No
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3 optional">
                                <br>
                                <label>EMI Duration</label>
                                <input type="text" name="duration" class="form-control" required>
                            </div>
                            <div class="col-md-3 col-6 col-lg-3 optional">
                                <br>
                                <label>EMI Amount</label>
                                <input type="text" name="emi_amount" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button class="btn btn-primary">Save</button>
                            </div>						
                        </div>
                    </form>
                    
                </div>							
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

<script>
     $(document).ready(function(){
        $(".optional").hide();

        $(".emi").change(function(){
            var emi = $(this).val();
            if(emi=="yes")
            {
                $(".optional").show();
            }
            else
            {
                $(".optional").hide();
            }
        });
    });
</script>

<?php include "footer.php"; ?>