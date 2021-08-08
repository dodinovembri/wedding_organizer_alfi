<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Breadcrumb container end -->

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">
            <div class="card-header">
                <div class="card-title">Profile</div>
            </div>
            <div class="card-body">

                <div id="example-form">

                    <section>
                        <?php $this->load->view('admin/components/flash') ?>
                        <h6 class="h-0 m-0">&nbsp;</h6>
                        <div class="row gutters">
                            <form action="<?php echo base_url('admin/profile/update/');
                                            echo $profile->id; ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="email" value="<?php echo $profile->email ?>" required>
                                        <div class="field-placeholder">Email <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="name" value="<?php echo $profile->name ?>" required>
                                        <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <img src="<?php echo base_url('uploads/profile/');
                                                    echo $profile->image; ?>" width="20%" alt="">
                                        <input type="file" name="image">
                                        <div class="field-placeholder">Image</div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="status" class="form-select" id="formSelect">
                                            <option value="<?php echo $profile->status ?>"><?php echo check_status($profile->status) ?></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <div class="field-placeholder">Status</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo base_url('admin/home') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </section>

                </div>

            </div>
        </div>

    </div>
</div>
<!-- Row end -->
<?php $this->load->view('admin/layouts/bottom') ?>