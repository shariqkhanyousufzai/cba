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
                    <div class="card-title">
                        <h3 class="card-label">Create Promo Code 
                        </h3>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                  <form method="post" action="<?=base_url('promo/add')?>">
                      <div class="row">
                      <div class="col-sm-4">
                          <label>Code: </label>
                          <input type="text" name="code" class="form-control" style="width: 100%">
                      </div>
                      <div class="col-sm-4">
                          <label>Amount:</label>
                           <input type="number" name="amount" class="form-control" style="width: 100%">
                      </div>
                      <div class="col-sm-4" align="left">
                          <br>
                          <button class="btn btn-dark mt-2">Create Promo Code</button>
                      </div>
                  </div>
                  </form>
                </div>
            </div>
            <div class="card card-custom gutter-b mt-5">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Promo Code Listing
                        </h3>
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
                                <th>Code</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($promos as $promo) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $promo->code ?></td>
                                <td><?= $promo->amount." $" ?></td>
                                <td>
                                <?php
                                if($promo->status == 0){
                                ?>
                                <span class="badge badge-success">Active</span>
                                <?php
                                }else{
                                ?>
                                <span class="badge badge-danger">Deactive</span>
                                <?php
                                }
                                ?></td>
                                <td>
                                    <a href="<?php echo base_url('promo/deactive_promo/'.$promo->id); ?>" class="btn btn-sm btn-clean btn-icon" title="View Customer">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="flaticon-refresh"></i>
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
<!--begin::Page Vendors(used by this page)-->
<script src="<?=$assets?>/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>