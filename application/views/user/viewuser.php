 <!--begin::Content-->
 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->

            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Card header-->
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <div class="card card-custom">
                         <div class="card-header">
                          <h3 class="card-title">
                           View User
                       </h3>
                       <div class="card-toolbar">
                           <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form autocomplete="off" method="post" action="<?= base_url('auth/create_user') ?>">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>First name</label>
                                <input autocomplete="off" type="text" class="form-control"  placeholder="First name" name="first_name" readonly value="<?=$users->first_name?>" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control"  placeholder="Last name" name="last_name" readonly="" value="<?=$users->last_name?>" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control"  placeholder="Enter email" readonly="" value="<?=$users->email?>" name="email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                            </div>
                        </div>
                        <input type="hidden" name="company" value="none">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control"  placeholder="Phone" readonly="" value="<?=$users->phone?>" name="phone" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleSelect1">Select Group</label>
                                <select name="group_name" class="form-control" id="exampleSelect1" readonly disabled="">
                                 <option value=""><?=group_description_name_by_name($users->group_name)?></option>
                             </select>
                         </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="form-group row">
                            <div class="col-9">
                                <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(<?php echo base_url('assets/uploads/' . $users->avatar); ?>)">
                                    <div class="image-input-wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
<!--begin::Card body-->
</div>
<!--end::Card-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->