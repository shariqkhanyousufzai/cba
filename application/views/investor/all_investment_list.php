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
                                <h3 class="card-label">Investment Listing
                            <span class="d-block text-muted pt-2 font-size-sm">Take Track On Investment</span>
                        </h3>
                            </div>
                            <div class="col-sm-2" align="right">Status: </div>
                            <div class="col-sm-4">
                                <select class="form-control status">
                                    <option value="">All</option>
                                    <option value="pending">Pending</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
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
                                <th>Channel Name</th>
                                <th>Bank</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($getAllPayments['data']['data'] as $getPayment) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $getPayment->name ?></td>
                                <td><?= $getPayment->bank?></td>
                                <td><?= round($getPayment->total_investment,2) ?></td>
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
                                <td><?= date('Y-M-d',strtotime($getPayment->created_on)) ?></td>
                                <td>
                                    <a href="<?php echo base_url('investor/approve_investment/'.$getPayment->id); ?>" class="btn btn-md w-lg-100 btn-dark btn-icon" title="Approve Now">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                    </a>
                                    <a href="#" data-id="<?=$getPayment->id?>" class="btn mt-2 btn-md w-lg-100 btn-dark btn-icon get_msg" title="Send Message">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </span>
                                    </a>
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
                <h5 class="modal-title" id="exampleModalLabel">All Messages</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead align="center">
                        <th>s.no</th>
                        <th>Comments</th>
                        <th>Created</th>
                    </thead>
                    <tbody class="comments" align="center">
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
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
    $(document).on('click','.get_msg',function(){
        var getTheId = $(this).data('id');
        $.ajax({
              url:"<?=base_url('investor/getmsg')?>",
              method: 'post',
              data: {
                getTheId : getTheId,
            },
            dataType: "json",
            success: function( response ) {
                var data = response.data;
                if(data != ''){
                   var HTML = `<tr>`;
                    for(i in data){
                        HTML += `
                                <td>${parseInt(i) + 1}</td>
                                <td>${data[i].comment}</td>
                                <td>${data[i].created_on}</td>
                                `
                    }
                    HTML += `</tr>`;
                    $('.comments').html(HTML); 
                }else{
                     $('.comments').html('<tr><td></td><td>No data found</td><td></td></tr>'); 
                }
                
                $('#msgmodal').modal('show');

                console.log(response.data);
            }
        })
    });

    $(document).on('change','.status',function(){
        window.location.href = '<?=base_url()?>'+'investor/investments?status='+ $(this).val();
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