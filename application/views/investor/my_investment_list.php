<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <div class="card card-custom gutter-b"></div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="row" style="width: 100%">
                    <div class="card-title" style="width: 100%">
                            <div class="col-sm-6">
                                <h3 class="card-label">My Investment
                        </h3>
                            </div>
                            <!-- <div class="col-sm-2" align="right">Status: </div> -->
                            <!-- <div class="col-sm-4">
                                <select class="form-control status">
                                    <option value="">All</option>
                                    <option value="pending">Pending</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <!-- <h4><i class="flaticon2-next"></i> New Customers Accounts</h4>
                    <hr> -->
                    <table class="table table-bordered table-checkable" id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <?php
                                if($this->session->userdata('user_id') != 1){
                                ?>
                                <th>Name</th>
                                <?php
                                }
                                ?>
                                <th>Payment Method</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Date </th>
                                <th>Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($getPayments['data']['data'] as $getPayment) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <?php
                                if($this->session->userdata('user_id') != 1){
                                ?>
                                <td><?= $getPayment->first_name.' '.$getPayment->last_name?></td>
                                <?php
                                }
                                ?>
                                <td><?= $getPayment->bank?></td>
                                <td><?= asDollars(round($getPayment->total_investment)) ?></td>
                                <td>
                                    <?php
                                    if($getPayment->status == 0){
                                    ?>
                                    <span class="badge badge-warning"> Pending </span>
                                    <?php
                                    }else{
                                    ?>
                                    <span class="badge badge-success"> Completed </span>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td><?= date('M-d-Y',strtotime($getPayment->created_on)) ?></td>
                                <td>
                                    <?php
                                    if($getPayment->status == 0){
                                    ?>
                                    <a href="<?php echo base_url('investor/pay_investment/'.$getPayment->id); ?>" class="btn btn-md w-lg-100 btn-dark btn-icon actionsbtn" title="Pay Now">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="fab la-amazon-pay"></i>
                                        </span>
                                    </a>
                                    <?php
                                    }else{
                                    ?>
                                    <a href="<?php echo base_url('investor/view_investment/'.$getPayment->id); ?>" class="btn btn-md w-lg-100 btn-dark btn-icon actionsbtn" title="Contract">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="flaticon-doc"></i>
                                        </span>
                                    </a>
                                    <?php
                                    }
                                    ?>
                                    <!-- <a href="#" data-id="<?=$getPayment->id?>" class="btn  btn-md w-lg-100 btn-dark btn-icon send_msg actionsbtn ml-1" title="Send Message">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </a> -->
                                </td>
                            </tr>
                            <?php
                            $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!-- message modal -->
<!-- Modal-->
<div class="modal fade" id="msgmodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Type Your Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="investment_id" class="investment_id">
                <textarea class="messagetext" style="width: 100%"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark font-weight-bold sendnow">Send</button>
            </div>
        </div>
    </div>
</div>
<!-- message modal end-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?=$assets?>/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    $(document).on('click','.send_msg',function(){
        var getTheId = $(this).data('id');
        $('.investment_id').val(getTheId);
        $('#msgmodal').modal('show');
    });
    $(document).on('click','.sendnow',function(){
        var getTheId = $('.investment_id').val();
        var getTheMsg = $('.messagetext').val();
        $.ajax({
              url:"<?=base_url('investor/sendmsg')?>",
              method: 'post',
              data: {
                getTheId : getTheId,
                getTheMsg : getTheMsg
            },
            dataType: "json",
            success: function( response ) {
                console.log(response);
                Swal.fire('Message has been Send!');
                $('#msgmodal').modal('hide');
            }
        })

    });

     $(document).on('change','.status',function(){
        window.location.href = '<?=base_url()?>'+'investor/my_investment_list?status='+ $(this).val();
    });

    });
</script>

<?php
     if(isset($_GET['status'])){
?>
    <script>
        $(document).ready(function(){
            $('.status').val("<?=$_GET['status']?>");
        })
    </script>
<?php
     }
?>