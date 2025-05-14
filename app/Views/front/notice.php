<style>
    .notice-box {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .notice-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1);
    }
</style>
<section class="bg-img pt-150 pb-20" data-overlay="7"
    style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container py-5">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary">📢 Notice Board</h1>
                        <p class="lead text-secondary">Stay updated with the latest announcements</p>
                        <hr class="w-25 mx-auto">
                    </div>
                </div>
            </div>
        </div>
</section>
<!--Page content -->
<section class="py-50">
    <div class="container">
        <div class="row">
            <!-- Notice List -->
             <?php 
             foreach($allNotice as $notice): ?>
             <a href="/notices/<?php echo $notice['id']; ?>" class="text-decoration-none">
                 <div class="mb-4 p-4 bg-white border-start border-4 border-primary shadow-sm rounded notice-box">
                <h5 class="mb-2 text-primary">🔔 <?php echo $notice['title']; ?></h5>
                <p class="mb-1"><?php echo substr($notice['description'], 0, 100) . '...'; ?></p>
                <p class="text-muted small mb-0">📅 Published on: <?php echo date("d-m-Y",strtotime($notice['created_at'])); ?></p>
            </div>
             </a>
                <?php endforeach; ?>
            <!-- <div class="mb-4 p-4 bg-white border-start border-4 border-success shadow-sm rounded notice-box">
                <h5 class="mb-2 text-success">📄 New Assignment Deadline</h5>
                <p class="mb-1">Assignment for Web Development course is due by May 20. Submit it online before
                    midnight.</p>
                <p class="text-muted small mb-0">📅 Published on: May 8, 2025</p>
            </div>

            <div class="mb-4 p-4 bg-white border-start border-4 border-danger shadow-sm rounded notice-box">
                <h5 class="mb-2 text-danger">🏫 Campus Closed</h5>
                <p class="mb-1">Campus will remain closed on May 15 due to maintenance work.</p>
                <p class="text-muted small mb-0">📅 Published on: May 6, 2025</p>
            </div> -->
        </div>
    </div>
</section>