<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
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
                                <select class="form-select">
                                    <option selected disabled>Select Class</option>
									<?php foreach ($class_dropdown_search as $classs) : ?>
										<option value="<?= $classs['class_name_auto_id'] ?>"><?= $classs['class_name_s'] ?></option>
									<?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2 d-grid align-items-end">
                                <button type="button" class="btn btn-primary mt-4">Search</button>
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
							<tbody>
								<tr>
									<td>Tanvir</td>
									<td>Class 1</td>
									<td>Father Name</td>
									<td>Mother Name</td>
									<td>Address</td>
									<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">View</button></td>
								</tr>
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
    $(document).ready(function() {
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
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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