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
                        <h3 class="card-label">Investment Listing
                            <span class="d-block text-muted pt-2 font-size-sm">Take Track On Investment</span>
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
                            foreach ($getPayments['data']['data'] as $getPayment) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $getPayment->name ?></td>
                                <td><?= $getPayment->bank?></td>
                                <td><?= round($getPayment->total_investment,2) ?></td>
                                <td><span class="badge badge-warning"> Pending </span></td>
                                <td><?= date('Y-M-d',strtotime($getPayment->created_on)) ?></td>
                                <td>
                                    <a href="<?php echo base_url('investor/pay_investment/'.$getPayment->id); ?>" class="btn btn-md w-lg-100 btn-dark btn-icon" title="Pay Now">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="fab la-amazon-pay"></i>
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