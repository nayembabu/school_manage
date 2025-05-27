<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-4">
                <div class="card-body p-5">
                    <h3 class="text-center text-primary mb-4">🎯 Student Search</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-5">
                                <label class="form-label">Select Class</label>
                                <select class="form-select select_class">
                                    <option value="" selected disabled>Select Class</option>
                                    <?php foreach ($class_dropdown_search as $classs) : ?>
                                    <option value="<?= $classs['class_name_auto_id'] ?>">
                                        <?= $classs['class_name_s'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2 d-grid align-items-end">
                                <button type="button" class="btn btn-primary mt-4 stu_search_btn ">Search</button>
                            </div>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Class </th>
                                    <th>Father </th>
                                    <th>Mother</th>
                                    <th>Address </th>
                                    <th>View Full Details</th>
                                </tr>
                            </thead>
                            <tbody class="alltablehtmldata">
                                <!-- <tr>
									<td>Tanvir</td>
									<td>Class 1</td>
									<td>Father Name</td>
									<td>Mother Name</td>
									<td>Address</td>
									<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">View</button></td>
								</tr> -->
                                <!-- Repeat similar rows as needed -->

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function () {
        $('#example1').DataTable({
            "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
            "pageLength": 10,
            "language": {
                "lengthMenu": "Show _MENU_ entries per page",
                "search": "🔍 Search:"
            }
        });
    });
</script>

</div>
</div>
</div>
</div>
</div>

<!-- Student Details Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="studentModalLabel">Student Full Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <img src="" alt="">
                    <p class="col-lg-6"><strong>Name(Bangla): </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Name(English): </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Date Of Birth </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Birth Registration No: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Address: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Father Name(Bangla): </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Father Name(English): </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Mother Name(Bangla): </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Mother Name(English): </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Class: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Guardian Name: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Guardian Number 1st: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Guardian Number 2nd: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Relationship With Guardian: </strong> Tanvir</p>
                    <p class="col-lg-6"><strong>Admission Time: </strong> Tanvir</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).on('click', '.stu_search_btn', function () {
        if ($('.select_class option:selected').val() == "") {
            alert('Please select a class');
            return false;
        } else {
            $.ajax({
                url: 'student_search',
                type: 'POST',
                data: {
                    class_name_auto_id: $('.select_class option:selected').val()
                },
                success: function (res) {
                    let alltablehtmldata = '';
                    let response = JSON.parse(res);
                    console.log(response);
                    for (let stu = 0; stu < response.student_info.length; stu++) {
                        alltablehtmldata += `
                            
								<tr>
									<td>${response.student_info[stu].student_info_bn_names}</td>
									<td>
                                        Class ${response.student_info[stu].class_iddddd}
                                    </td>
									<td>
                                        ${response.student_info[stu].student_info_father_name_en}
                                    </td>
									<td>${response.student_info[stu].student_info_mother_en}</td>
									<td> ${response.student_info[stu].student_info_addresss} </td>
                                    <td><button type="button" class="btn btn-primary std_view_details" data-bs-toggle="modal" data-bs-target="#studentModal" data-id=${response.student_info[stu].student_info_sets_at_iddddds}>View</button></td>
								</tr>
                            
                            
                            `

                    }
                    $('.alltablehtmldata').html(alltablehtmldata);
                }

            });

        }

    });
    $(document).on('click', '.std_view_details', function () {
        let student_id = $(this).data('id');
        $.ajax({
            url: 'single_student_info',
            type: 'POST',
            data: {
                student_id: student_id
            },
            success: function (res) {
                let response = JSON.parse(res);
                console.log(response);
                $('#studentModal .modal-body').html(`
        <div class="row">
            <img src="${response.single_student_info.student_picture_pathssss ? response.single_student_info.student_picture_pathssss : ''}" alt="">
            <p class="col-lg-6"><strong>Name(Bangla): </strong> ${response.single_student_info.student_info_bn_names}</p>
            <p class="col-lg-6"><strong>Name(English): </strong> ${response.single_student_info.student_info_names_en}</p>
            <p class="col-lg-6"><strong>Date Of Birth: </strong> ${response.single_student_info.birth_date_dob}</p>
            <p class="col-lg-6"><strong>Birth Registration No: </strong> ${response.single_student_info.birth_registration_nos}</p>
            <p class="col-lg-6"><strong>Address: </strong> ${response.single_student_info.student_info_addresss}</p>
            <p class="col-lg-6"><strong>Father Name(Bangla): </strong> ${response.single_student_info.student_info_bn_father_name}</p>
            <p class="col-lg-6"><strong>Father Name(English): </strong> ${response.single_student_info.student_info_father_name_en}</p>
            <p class="col-lg-6"><strong>Mother Name(Bangla): </strong> ${response.single_student_info.student_info_bn_mother}</p>
            <p class="col-lg-6"><strong>Mother Name(English): </strong> ${response.single_student_info.student_info_mother_en}</p>
            <p class="col-lg-6"><strong>Class: </strong> Class ${response.single_student_info.class_iddddd}</p>
            <p class="col-lg-6"><strong>Guardian Name: </strong> ${response.single_student_info.gardian_name}</p>
            <p class="col-lg-6"><strong>Guardian Number 1st: </strong> ${response.single_student_info.student_info_gradian_phone1}</p>
            <p class="col-lg-6"><strong>Guardian Number 2nd: </strong> ${response.single_student_info.student_info_gradian_phone2nd}</p>
            <p class="col-lg-6"><strong>Relationship With Guardian: </strong> ${response.single_student_info.gardian_relationss}</p>
            <p class="col-lg-6"><strong>Admission Time: </strong> ${response.single_student_info.create_timess ? response.single_student_info.create_timess : ''}</p>
        </div>
    `);
            }


        });
    });
</script>