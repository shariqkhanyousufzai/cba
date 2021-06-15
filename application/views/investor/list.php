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
                        <h3 class="card-label">Investor Listing
                            <span class="d-block text-muted pt-2 font-size-sm">Take Track On Investor</span>
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
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>country</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($investors as $investor) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $investor->full_name ?></td>
                                <td><?= $investor->email?></td>
                                <td><?= $investor->group_name ?></td>
                                <td><?= $investor->country ?></td>
                                <td><?= $investor->created_date ?></td>
                                <td>
                                    <a href="<?php echo base_url('investor/investor_profile/'.$investor->id); ?>" class="btn btn-sm btn-clean btn-icon" title="View Customer">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="ki ki-eye"></i>
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