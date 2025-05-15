<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <h3>Add New Notices</h3>
        <div class="card">
            <div class="card-body">
                <form action="/admin/notice/create-notice/submit" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="featured_image" class="form-label">Featured Image</label>
                        <input type="file" name="featured_image" class="form-control" id="featured_image"
                            accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>