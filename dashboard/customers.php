<?php include "header.php"; ?>	

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 

<div class="container">
	<div class="row p-3">
		<h2 class="heading">Dashboard - <span>Customers List</span></h2>
        <hr>
	</div>
	
	<!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <?php
                    $stmt = $pdo->prepare("SELECT * from customers");
                    $stmt->execute();
                    $count = $stmt->rowCount();
                    if($count==0)
                    {
                        ?>
                        <h5 class="alert alert-danger">
                            No Data Found
                        </h5>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="table-responsive"> 
                        <table class="table table-bordered text-start" id="example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Date/Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php
                            foreach($stmt as $customer)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $customer['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $customer['mobile']; ?>
                                    </td>
                                    <td>
                                        <?php echo $customer['date']; ?>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger delete" id="<?php echo $customer['id']; ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                        </div>
                        <?php
                    }
                    ?>
                </div>							
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<script>  
 $(document).ready(function(){  
      $('#example').DataTable(); 
      
        $(".delete").click(function(){
            var id = $(this).attr('id');
            var $ele = $(this).parent().parent();
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {"id":id, "type":"customer"} ,
                success: function (response) {
                    $ele.fadeOut().remove();
                },
            })
        });
 });  
 </script>  
<?php include "footer.php"; ?>