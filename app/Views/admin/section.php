<div class="container">
    <div class='d-flex justify-content-between align-items-center mb-3'>
        <h1>Section</h1>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary addSectionNew" data-bs-toggle="modal" data-bs-target="#addSectionModal">
                    <i class="fa-solid fa-plus"></i> Add Section
                </button>
            </div>
        </div>
    </div>
    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php elseif (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Class</th>
                            <th scope="col">Sections</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sections as $section): ?>
                        <tr>
                            <td><?= $section['class_name_s'] ?></td>
                            <td id="sectionNameField"><?= $section['section_namesss'] ?></td>
                        <td>
                            <button type="button" class="btn btn-danger SectionTableDelete" data-bs-toggle="modal"
                            data-bs-target="#deleteClassModal" data-id="<?= $section['section_pr_iddds'] ?>">
                                <i class="fa-solid fa-triangle-exclamation text-warning me-1"></i> Delete
                            </button>
                            <button type="button" class="btn btn-secondary editSectionName">
                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit</button>
                            <button type="button" class="btn btn-info updateSectionName" style="display:none;" data-id="<?= $section['section_pr_iddds'] ?>">
                                <i class="fa-solid fa-check me-1"></i> Update</button>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Delete Class Modal -->
    <div class="modal fade" id="deleteClassModal" tabindex="-1" aria-labelledby="deleteClassModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteClassModalLabel">Delete Class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Section? This action cannot be undone.</p>
                    <button type="button" class="btn btn-danger" id="confirmDeleteSectionBtn" data-id=''>Delete</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Section Modal -->
    <div class="modal fade" id="addSectionModal" tabindex="-1" aria-labelledby="addSectionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSectionModalLabel">Add Section</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addSectionForm" action="admin/section/add-section" method="POST">
                        <div class="mb-3">
                            <label for="classSelect" class="form-label">Class Name</label>
                            <select class="form-select" id="classSelect" name="class_name" require>
                                <option disabled selected hidden>Select a Class</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sectionNameInput" class="form-label">Section Name</label>
                            <input type="text" class="form-control" id="sectionNameInput" name="section_name" placeholder="Enter section name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Section</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).on('click', '.SectionTableDelete', function () {
    let sectionId = $(this).data('id');
    $('#confirmDeleteSectionBtn').data('id', sectionId);
});
$(document).on('click', '#confirmDeleteSectionBtn', function (){
    let sectionId = $(this).data('id');
    $.ajax({
        url: 'admin/section/delete-section',
        type: 'POST',
        data: { id: sectionId },
        success: function (response) {
            if (response.status === '200') {
                $('#deleteClassModal').modal('hide');
                location.reload(); // Reload the page to reflect changes
            } else {
                alert(response.message);
            }
        },
        error: function () {
            alert('An error occurred while deleting the section.');
        }
    });
});
$(document).on('click', '.addSectionNew', function (){
    $.ajax({
        url: 'admin/section/viewClassName',
        type: 'GET',
        success: function (response) {
            if (response.data && response.data.length > 0) {
                let classSelect = $('#classSelect');
                classSelect.empty(); // Clear existing options
                classSelect.append('<option disabled selected hidden>Select a Class</option>');
                response.data.forEach(function (classItem) {
                    classSelect.append(new Option(classItem.class_name_s, classItem.class_name_auto_id));
                });
            } else {
                alert('No class names found.');
            }
        },
        error: function () {
            alert('An error occurred while fetching class names.');
        }
    });
});
$(document).on('click', '.editSectionName', function(){
    let sectionNameField = $(this).closest('tr').find('#sectionNameField');
    let currentSectionName = sectionNameField.text();
    sectionNameField.html(`<input type="text" class="form-control sectionNameInput" value="${currentSectionName}">`);
    $(this).hide();
    $(this).siblings('.updateSectionName').show();
});
$(document).on('click', '.updateSectionName', function(){
    let sectionId = $(this).data('id');
    let sectionNameField = $(this).closest('tr').find('#sectionNameField');
    let newSectionName = sectionNameField.find('.sectionNameInput').val();
    if (newSectionName.trim() === '') {
        alert('Section name cannot be empty.');
        return;
    }else {
        $.ajax({
            url: 'admin/section/update-section',
            type: 'POST',
            data: { id: sectionId, section_name: newSectionName },
            success: function (response) {
                if (response.status === '200') {
                    sectionNameField.text(newSectionName);
                    alert('Section name updated successfully.');
                    location.reload(); // Reload the page to reflect changes
                    
                } else {
                    alert('Failed to update section name.');
                }
            },
            error: function () {
                alert('An error occurred while updating the section name.');
            }
        });
    }
});
</script>