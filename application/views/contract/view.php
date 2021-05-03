<link rel="stylesheet" type="text/css" href="<?=$assets?>/css/mentioned.css">
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
                        <h3 class="card-label">Contract View <?=$contract->language?>
                            <span class="d-block text-muted pt-2 font-size-sm">Edit Your Contract</span>
                        </h3>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                    <div id="contract_view" style="height: 400px"><?=$contract->body?></div>
                    <div class="col-sm-12 mb-4 mt-4" align="right">
                        <form id="contractForm" method="post" action="<?=base_url('contract/save')?>">
                            <input type="hidden" name="id" value="<?=$contract->id?>">
                            <input type="hidden" class="body" name="body">
                            <button type="button" class="themebtn btn btn-primary savecontract">Save</button>
                        </form>
                    </div>

                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<script src="<?=$assets?>/js/contract/view.js"></script>
