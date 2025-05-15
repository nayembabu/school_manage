<div class="container mt-5">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-lg border-3 border-info rounded-4 animate__animated animate__fadeIn">
          <div class="card-header bg-info text-white text-center rounded-top-4">
            <h3>📋 ছাত্র/ছাত্রী তথ্য ফর্ম</h3>
          </div>
          <div class="card-body bg-dark text-white">

            <form action="<?= base_url('student_add_from_admin_panel_form') ?>" method="post" enctype="multipart/form-data"> 
              <div class="row g-3">

                <!-- Basic Info -->
                <div class="col-md-6"> 
                  <label class="form-label">নাম (বাংলা)</label>
                  <input type="text" class="form-control border-primary" name="student_info_bn_names">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Name (English)</label>
                  <input type="text" class="form-control border-success" name="student_info_names_en">
                </div>

                <div class="col-md-6">
                  <label class="form-label">জন্ম তারিখ</label>
                  <input type="date" class="form-control border-warning" name="birth_date_dob">
                </div>

                <div class="col-md-6">
                  <label class="form-label">জন্ম নিবন্ধন নম্বর</label>
                  <input type="text" class="form-control border-danger" name="birth_registration_nos">
                </div>

                <div class="col-md-12">
                  <label class="form-label">ঠিকানা</label>
                  <input type="text" class="form-control border-info" name="student_info_addresss">
                </div>

                <!-- Parent Info -->
                <div class="col-md-6">
                  <label class="form-label">Father's Name (English)</label>
                  <input type="text" class="form-control border-success" name="student_info_father_name_en">
                </div>

                <div class="col-md-6">
                  <label class="form-label">পিতার নাম (বাংলা)</label>
                  <input type="text" class="form-control border-primary" name="student_info_bn_father_name">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Mother's Name (English)</label>
                  <input type="text" class="form-control border-success" name="student_info_mother_en">
                </div>

                <div class="col-md-6">
                  <label class="form-label">মায়ের নাম (বাংলা)</label>
                  <input type="text" class="form-control border-primary" name="student_info_bn_mother">
                </div>

                <!-- Contact -->
                <div class="col-md-6">
                  <label class="form-label">অভিভাবকের মোবাইল নম্বর ১</label>
                  <input type="tel" class="form-control border-warning" name="student_info_gradian_phone1">
                </div>

                <div class="col-md-6">
                  <label class="form-label">অভিভাবকের মোবাইল নম্বর ২</label>
                  <input type="tel" class="form-control border-warning" name="student_info_gradian_phone2nd">
                </div>

                <div class="col-md-6">
                  <label class="form-label">অভিভাবকের নাম</label>
                  <input type="text" class="form-control border-info" name="gardian_name">
                </div>

                <div class="col-md-6">
                  <label class="form-label">সম্পর্ক</label>
                  <input type="text" class="form-control border-danger" name="gardian_relationss">
                </div>

                <!-- Class & Section -->
                <div class="col-md-6">
                  <label class="form-label">শ্রেণি</label>
                  <select class="form-control border-primary" name="class_iddddd">
                    <option value="">একটি শ্রেণি নির্বাচন করুন</option>
                    <?php if (!empty($classess)) : ?>
                      <?php foreach ($classess as $class) : ?>
                        <option value="<?= $class['class_name_auto_id'] ?>"><?= $class['class_name_s'] ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label">সেকশন</label>
                  <input type="text" class="form-control border-success" name="section_uniq_iddsss">
                </div>

                <!-- Admission ID -->
                <div class="col-md-6">
                  <label class="form-label">Online Admission ID (যদি থাকে)</label>
                  <input type="text" class="form-control border-warning" name="online_admission_auto_idddiiid">
                </div>

                <!-- Upload -->
                <div class="col-md-12">
                  <label class="form-label">ছবি আপলোড করুন</label>
                  <input type="file" class="form-control border-dark" name="student_picture_pathssss" accept="image/*">
                </div>

              </div>

              <div class="text-center mt-4">
                <button type="submit" class="btn btn-outline-primary px-4 py-2 fw-bold">✅ জমা দিন</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
