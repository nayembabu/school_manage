<div class="content-wrapper">
    <div class="container-full">
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
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?= substr($notice['title'], 0, 100) . '...' ?></td>
                                <td><?= substr($notice['description'], 0, 100) . '...' ?></td>
                                <td>
                                    <a href="/notices/<?= $notice['id'] ?>" class="btn btn-primary btn-sm">View</a>
                                    <a href="/admin/notice/edit-notice/<?= $notice['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a onclick="return confirm('Do you want to delete this?')" href="/admin/notice/delete-notice/<?= $notice['id'] ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
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
</div>