<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/wedding_invitation') ?>">Wedding Invitation List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <div class="card-title">Edit</div>
            </div>
            <div class="card-body">

                <div id="example-form">

                    <section>
                        <h6 class="h-0 m-0">&nbsp;</h6>
                        <div class="row gutters">
                            <form action="<?php
                                            echo base_url('admin/wedding_invitation/update/');
                                            echo $wedding_invitation->id;
                                            ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="code" value="<?php echo $wedding_invitation->code ?>" required>
                                        <div class="field-placeholder">Code <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="file" name="home_background">
                                        <div class="field-placeholder">Home Image <span class="text-danger"></span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="groom_name" value="<?php echo $wedding_invitation->groom_name ?>" required>
                                        <div class="field-placeholder">Groom Name <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="file" name="groom_image">
                                        <div class="field-placeholder">Groom Image <span class="text-danger"></span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper m-0">
                                        <textarea name="groom_text" id="" cols="30" rows="5"><?php echo $wedding_invitation->groom_text ?></textarea>
                                        <div class="field-placeholder">Groom Description <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="groom_facebook_id" value="<?php echo $wedding_invitation->groom_facebook_id ?>" required>
                                        <div class="field-placeholder">Groom Facebook ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="groom_twitter_id" value="<?php echo $wedding_invitation->groom_twitter_id ?>" required>
                                        <div class="field-placeholder">Groom Twitter ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="groom_instagram_id" value="<?php echo $wedding_invitation->groom_instagram_id ?>" required>
                                        <div class="field-placeholder">Groom Instagram ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="bride_name" value="<?php echo $wedding_invitation->bride_name ?>" required>
                                        <div class="field-placeholder">Bride Name <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="file" name="bride_image">
                                        <div class="field-placeholder">Bride Image <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper m-0">
                                        <textarea name="bride_text" id="" cols="30" rows="5"><?php echo $wedding_invitation->bride_text ?></textarea>
                                        <div class="field-placeholder">Bride Description <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="bride_facebook_id" value="<?php echo $wedding_invitation->bride_facebook_id ?>" required>
                                        <div class="field-placeholder">Bride Facebook ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="bride_twitter_id" value="<?php echo $wedding_invitation->bride_twitter_id ?>" required>
                                        <div class="field-placeholder">Bride Twitter ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="bride_instagram_id" value="<?php echo $wedding_invitation->bride_instagram_id ?>" required>
                                        <div class="field-placeholder">Bride Instagram ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="date" name="main_ceremony_date" value="<?php echo $wedding_invitation->main_ceremony_date ?>" required>
                                        <div class="field-placeholder">Main Ceremony Date <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="main_ceremony_time" value="<?php echo $wedding_invitation->main_ceremony_time ?>" required>
                                        <div class="field-placeholder">Main Ceremony Time <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="main_ceremony_location" value="<?php echo $wedding_invitation->main_ceremony_location ?>" required>
                                        <div class="field-placeholder">Main Ceremony Location <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="main_ceremony_latitude" value="<?php echo $wedding_invitation->main_ceremony_latitude ?>" required>
                                        <div class="field-placeholder">Main Ceremony Latitude <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="main_ceremony_longitude" value="<?php echo $wedding_invitation->main_ceremony_longitude ?>" required>
                                        <div class="field-placeholder">Main Ceremony Longitude <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="date" name="wedding_date" value="<?php echo $wedding_invitation->wedding_date ?>" required>
                                        <div class="field-placeholder">Wedding Date <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="wedding_time" value="<?php echo $wedding_invitation->wedding_time ?>" required>
                                        <div class="field-placeholder">Wedding Time <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="wedding_location" value="<?php echo $wedding_invitation->wedding_location ?>" required>
                                        <div class="field-placeholder">Wedding Location <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="wedding_latitude" value="<?php echo $wedding_invitation->wedding_latitude ?>" required>
                                        <div class="field-placeholder">Wedding Latitude <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="wedding_longitude" value="<?php echo $wedding_invitation->wedding_longitude ?>" required>
                                        <div class="field-placeholder">Wedding Longitude <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper m-0">
                                        <textarea name="special_message" id="" cols="30" rows="7"><?php echo $wedding_invitation->special_message ?></textarea>
                                        <div class="field-placeholder">Special Message <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="special_message_by" value="<?php echo $wedding_invitation->special_message_by ?>" required>
                                        <div class="field-placeholder">Special Message By <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="status" class="form-select" id="formSelect">
                                            <option value="<?php echo $wedding_invitation->status ?>"><?php echo check_status($wedding_invitation->status) ?></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <div class="field-placeholder">Status <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo base_url('admin/wedding_invitation') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
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