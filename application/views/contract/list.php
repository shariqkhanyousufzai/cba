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
                        <h3 class="card-label">Contract Listing
                            <span class="d-block text-muted pt-2 font-size-sm">Manage Your Contracts</span>
                        </h3>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <!-- <h4><i class="flaticon2-next"></i> New Customers Accounts</h4>
                    <hr> -->
                    <table class="table  table-bordered table-checkable" id="kt_datatable1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Language</th>
                                <th>Type</th>
                                <th>Created On</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($contracts as $contract) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $contract->language ?></td>
                                <td><?= $contract->type ?></td>
                                <td><?= $contract->created_on ?></td>
                                <td>
                                    <a href="<?php echo base_url('contract/view/'.$contract->id); ?>" class="btn btn-sm btn-clean btn-icon" title="View Investor">
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