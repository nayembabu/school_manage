    <div class="container py-5">
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card shadow-lg rounded-4 border-0">
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h2 class="mb-0 fw-bold"><i class="bi bi-person-plus-fill me-2"></i>Add Teacher</h2>
                        <p class="mb-0">Enter all the information below</p>
                    </div>
                    <div class="card-body bg-white rounded-bottom-4">
                        <form action="<?= base_url('teacher_save') ?>" method="post" enctype="multipart/form-data"">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-primary">Full Name</label>
                                    <input type="text" name="full_name" class="form-control form-control-lg border-primary" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-success">Father’s Name</label>
                                    <input type="text" name="father_name" class="form-control border-success">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-success">Mother’s Name</label>
                                    <input type="text" name="mother_name" class="form-control border-success">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-info">Gender</label>
                                    <select name="gender" class="form-select border-info" >
                                        <option value="">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-info">Date of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control border-info" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-danger">Blood Group</label>
                                    <input type="text" name="blood_group" class="form-control border-danger" placeholder="e.g. A+, B-">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-warning">Email</label>
                                    <input type="email" name="email" class="form-control border-warning" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-warning">Mobile Number</label>
                                    <input type="text" name="mobile_number" class="form-control border-warning" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-secondary">National ID / Birth Certificate No</label>
                                    <input type="text" name="national_id" class="form-control border-secondary">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-secondary">Photo</label>
                                    <input type="file" name="photo" class="form-control border-secondary">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-primary">Present Address</label>
                                    <input type="text" name="present_address" class="form-control border-primary">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-primary">Permanent Address</label>
                                    <input type="text" name="permanent_address" class="form-control border-primary">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-success">Qualification</label>
                                    <input type="text" name="qualification" class="form-control border-success">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-success">Subject(s) Specialization</label>
                                    <input type="text" name="subject_specialization" class="form-control border-success">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-info">Experience (Years)</label>
                                    <input type="number" name="experience" class="form-control border-info" min="0" max="60">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-danger">Emergency Contact</label>
                                    <input type="text" name="emergency_contact" class="form-control border-danger">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-info">Marital Status</label>
                                    <select name="marital_status" class="form-select border-info">
                                        <option value="">Select</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-warning">Bank Account Details</label>
                                    <input type="text" name="bank_account_details" class="form-control border-warning">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-secondary">Reference</label>
                                    <input type="text" name="reference_details" class="form-control border-secondary">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-secondary">Religion</label>
                                    <input type="text" name="religion" class="form-control border-secondary">
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <button type="submit" class="btn btn-success btn-lg px-5 fw-bold shadow">Save Teacher</button>
                                <button type="reset" class="btn btn-outline-secondary btn-lg ms-2">Reset</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end bg-white rounded-bottom-4 border-0">
                        <small class="text-muted">School Management System • Powered by CI4</small>
                    </div>
                </div>
            </div>
        </div>
    </div>