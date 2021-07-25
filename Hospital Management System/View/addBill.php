<?php  
    include_once('../Model/db.php');
    include_once('../Partial View/header.php');
    include_once("../Model/serviceModel.php");



?>



<html>
    <body>
        
    </body>
</html>

<div class="content-wraper">
        <section class="content-header">
            <h1>Add Bill <small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>New Bill</a></li>
                <li class="active"></li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="box box-warning">
                <form action="" method="POST">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Order</div>
                    </div>

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Patient ID</label>
                                <input type="number" class="form-control" name="P_ID" placeholder="Enter Patient ID">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="datetime-local" class="form-control" name="date">
                            </div>

                        </div>


                        <div class="box-body">
                            <div class="col-md-12">
                                <table class="table table-striped" id="orderTable"> 
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Service</th>
                                            <th>Cost</th>
                                             <th>Sessions</th>   
                                             <th>Total</th> 
                                              <th>
                                                  <button type="button" name="add" class="btn btn-success btn-sm btnAdd">Add</button>
                                              </th>          
                                        </tr>
                                    </thead>
                                </table>
                        </div>




                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Subtotal</label>
                                    <input type="number" class="form-control" name="txtSubTotal">
                                </div>

                                <div class="form-group">
                                    <label for="">Vat (5%)</label>
                                    <input type="number" class="form-control" name="txtVat">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Discount</label>
                                    <input type="number" class="form-control" name="txtDiscount">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Total</label>
                                    <input type="number" class="form-control" name="txtTotal">
                                </div>

                                <div class="form-group">
                                    <label for="">Paid</label>
                                    <input type="number" class="form-control" name="txtPaid">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Due</label>
                                    <input type="number" class="form-control" name="txtDue">
                                </div>
                                

                            </div>



                            <hr>
                            

                            <div align="center">
                                <input type="submit" name="btnSaveBill" value="Save Bill" class="btn btn-info"> 
                            </div>

                            <hr>

                        </div>



                        </div>

                    </div>
                        
                </form>
            </div>
        </section>

</div>




<script>
    //Add bill 
    $(document).ready(function(){
        $(document).on('click', '.btnAdd', function(){   
            var html='';
            html += '<tr>';
            html += '<td> <input type="hidden" class="form-control sid" name="serviceId[]" readonly> </td>';
            html += '<td> <select class="form-control sname" name="serviceName[]"><option value="">Select Option</option><?php ?></select></td>';
            html += '<td> <input type="number" class="form-control scost" name="serviceCost[]" readonly> </td>';
            html += '<td> <input type="number" class="form-control sessions" name="serviceSessions[]"> </td>';
            html += '<td> <input type="number" class="form-control total" name="total[]" readonly> </td>';
            html += '<td> <button type="button" name="add" class="btn btn-danger btn-sm btnRemove">Remove</button> </td>';
             
            $('#orderTable').append(html);

        })

        $(document).on('click', '.btnRemove', function(){
            $(this).closest('tr').remove();
        })

    });
</script>