<section class="bg-img pt-200 pb-120" data-overlay="7" style="background-image: url(../images/front-end-img/banners/banner-1.jpg); background-position: top center;">
    <div class="container mt-5">
        <div class="text-center mb-4">
        <?php if (session()->getFlashdata('success')) : ?>
            <p class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </p>
             <?= session()->getFlashdata('success') ?>
            </p>
        <?php endif; ?>
        </div>
        <h2 class="text-center mb-4">Student Admission Form</h2>
        <form id="studentForm" action="studentadmissionform" method="post" enctype="multipart/form-data">
            <!-- Form Fields -->
            <div class="mb-3">
                <label class="form-label">Student Name Bangla</label>
                <input type="text" class="form-control" id="student_info_bn_names" name="student_info_bn_names" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Student Name English</label>
                <input type="text" class="form-control" id="student_info_names_en" name="student_info_names_en" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="birth_date_dob" name="birth_date_dob" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Birth Registration No</label>
                <input type="number" class="form-control" id="birth_registration_nos" name="birth_registration_nos" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Student Address</label>
                <input type="text" class="form-control" id="student_info_addresss" name="student_info_addresss" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Father's Name English </label>
                <input type="text" class="form-control" id="student_info_father_name_en" name="student_info_father_name_en" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Father's Name Bangla </label>
                <input type="text" class="form-control" id="student_info_bn_father_name" name="student_info_bn_father_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mother's Name English</label>
                <input type="text" class="form-control" id="student_info_mother_en" name="student_info_mother_en" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mother's Name Bangla</label>
                <input type="text" class="form-control" id="student_info_bn_mother" name="student_info_bn_mother" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Guardian Phone 01</label>
                <input type="text" class="form-control" id="student_info_gradian_phone1" name="student_info_gradian_phone1" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Guardian Phone 02</label>
                <input type="text" class="form-control" id="student_info_gradian_phone2nd"  name="student_info_gradian_phone2nd" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Guardian Name</label>
                <input type="text" class="form-control" id="gardian_name" name="gardian_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Relationship with Guardian</label>
                <input type="text" class="form-control" id="gardian_relationss" name="gardian_relationss" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Class ID</label>
                <select class="form-control" name="class_id" id="class_id" required>
                    <option value="">Select Class</option>
                    <?php foreach ($all_class as $class) : ?>
                        <option value="<?= $class['class_name_auto_id'] ?>">Class <?= $class['class_name_s'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary text-center" id="checkInfo">Submit</button>
        </form>
    </div>
</section>
