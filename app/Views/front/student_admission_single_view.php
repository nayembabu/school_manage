<section class="bg-img pt-200 pb-120" data-overlay="7" style="background-image: url(../images/front-end-img/banners/banner-1.jpg); background-position: top center;">
    <div class="container mt-5">

        <div class="container mt-5">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h4 class="mb-0" text-center >🧑‍🎓 Student Admission Information</h4>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Student Name (Bangla):</strong>
                            <p><?= $student_info['student_info_bn_names'] ?? 'N/A' ?></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Student Name (English):</strong>
                            <p><?= $student_info['student_info_names_en'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Date of Birth:</strong>
                            <p><?= $student_info['birth_date_dob'] ?? 'N/A' ?></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Birth Registration No:</strong>
                            <p><?= $student_info['birth_registration_nos'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <strong>Student Address:</strong>
                            <p><?= $student_info['student_info_addresss'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Father's Name (Bangla):</strong>
                            <p><?= $student_info['student_info_bn_father_name'] ?? 'N/A' ?></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Father's Name (English):</strong>
                            <p><?= $student_info['student_info_father_name_en'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Mother's Name (Bangla):</strong>
                            <p><?= $student_info['student_info_bn_mother'] ?? 'N/A' ?></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Mother's Name (English):</strong>
                            <p><?= $student_info['student_info_mother_en'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Guardian Phone 01:</strong>
                            <p><?= $student_info['student_info_gradian_phone1'] ?? 'N/A' ?></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Guardian Phone 02:</strong>
                            <p><?= $student_info['student_info_gradian_phone2nd'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Guardian Name:</strong>
                            <p><?= $student_info['gardian_name'] ?? 'N/A' ?></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Relationship:</strong>
                            <p><?= $student_info['gardian_relationss'] ?? 'N/A' ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <strong>Class:</strong>
                            <p>Class <?= $student_info['class_name_s'] ?? 'N/A' ?> (ID: <?= $student_info['class_id'] ?? 'N/A' ?>)</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
        
    </div> 
</section>
