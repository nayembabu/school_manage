<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <h3>Edit Notices</h3>
        <div class="card">
            <div class="card-body">
                <form action="/admin/notice/update-notice/<?= $notice['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" value="<?= $notice['title'] ?>" class="form-control"
                            id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"
                            class="form-control"><?= $notice['description'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
</div>
</div>