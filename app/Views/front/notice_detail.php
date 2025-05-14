<section class="bg-img pt-150 pb-20" data-overlay="7"
    style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container py-5">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary">
                            <?php echo $notice['title']; ?>
                        </h1>
                        <p class="lead text-secondary">Stay updated with the latest announcements</p>
                        <hr class="w-25 mx-auto">
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="py-50">
    <div class="container">
        <div class="row">
            <img src="<?php echo $notice['featured_image'] ?>" alt="" height="400px" class="mb-4" style="object-fit:contain">
            <div class="col-12">
                <div class="mb-4 p-4 bg-white shadow-sm rounded notice-box">
                    <p class="text-muted small mb-0">📅 Published on: <?php echo date("d-m-Y",strtotime($notice['created_at'])); ?></p>
                    <p class="mb-1" style="font-size:24px"><?php echo $notice['description']; ?></p>
        </div>
    </div>
</section>