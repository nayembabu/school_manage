<div class="container">
    <div>
        <!-- Main content -->
        <h3>All Notices</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php 
             foreach($allNotice as $notice): 
             ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i++; ?>
                                </th>
                                <td>
                                    <?= substr($notice['title'], 0, 100) . '...' ?>
                                </td>
                                <td>
                                    <?= substr($notice['description'], 0, 100) . '...' ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary notice_view" data-bs-toggle="modal"
                                        data-bs-target="#noticeModal" data-id="<?= $notice['id'] ?>">View</button>
                                    <button type="button" class="btn btn-danger notice_delete" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal" data-id="<?= $notice['id'] ?>" >Delete</button>
                                    <button type="button" class="btn btn-warning notice_edit" data-bs-toggle="modal"
                                        data-bs-target="#editModal" data-id="<?= $notice['id'] ?>">Edit</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <!-- Add more static rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- Modal For Edit-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Notice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="edit_notice_form" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" value="" class="form-control edit_notice_title"
                                id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-control edit_notice_description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal For Delete-->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Notice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this notice?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger notice_delete_confirm" >Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal For View-->
    <div class="modal fade" id="noticeModal" tabindex="-1" aria-labelledby="noticeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noticeModalLabel">Notice Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body viewnotice_details">
                    <h5 id="noticeTitle"></h5>
                    <p id="noticeDescription"></p>
                    <p id="noticeDate"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.notice_edit', function (){
        let id = $(this).data('id');
        $('.edit_notice_form').attr('action', 'admin/notice/update-notice/' + id);
        $.ajax({
            url: 'admin/notice/edit-notice/',
            type: 'GET',
            dataType: 'json',
            data: {
                id: id
            },
            success: function (responce){
                if (responce.status == 200) {
                    $('.edit_notice_title').val(responce.notice_C.title);
                    $('.edit_notice_description').val(responce.notice_C.description);
                } else {
                    console.log(responce.message);
                }
            }   
        });
    });
    $(document).on('click', '.notice_delete', function (){
        let did = $(this).data('id');
        $('.notice_delete_confirm').attr('data-id', did);
    });
    $(document).on('click','.notice_delete_confirm', function (){
        $.ajax({
            url:'admin/notice/delete-notice',
            type: 'GET',
            data: {
                id: $(this).data('id')
            },
            dataType: 'json',
            success:function (responce){
                if (responce.status == 200) {
                    location.reload();
                } else {
                    console.log(responce.message);
                }
            }
        });
    });
    $(document).on('click', '.notice_view', function () {
        $('.viewnotice_details').html('<p>Loading...</p>');
        $.ajax({
            url: 'view-notice',
            type: 'POST',
            data: {
                id: $(this).data('id')
            },
            success: function (res) {
                let allHtml = '';
                let responce = JSON.parse(res);
                allHtml = `
                    <img src="${responce.notice_C.featured_image}" alt="Notice Image" class="img-fluid mb-3" style="width: 100%; height: auto;">
                    <h3>${responce.notice_C.title}</h3>
                    <p>${responce.notice_C.description}</p>
                    <p>${responce.notice_C.created_at}</p>
                `;
                $('.viewnotice_details').html(allHtml);
            }
        });

    });
</script>