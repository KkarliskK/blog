<?php
include '../controller/blog_ctr.php';

$blogi = index();

// print_r($blogi);



?>
    <?php include '../view/include/header.php'; ?>
    <title>kikd.lv</title>
    <div class="blog-container"><!--Here will all blogs-->
        <?php 
            foreach($blogi['posts'] as $blog){
                // echo "<pre>";
                // print_r($blog);
        ?>  
        <div class="blog-container-item" id="blog-container-item" style="background-size: cover; background-image: url('<?php echo $blog['img_url'] ?>')"><!--This is for single blog container-->
            <div class="blog-title">
                <h3><?php echo $blog['head']; ?></h3>
            </div>
            <div class="blog-description">
                <p><?php echo $blog['desc']; ?></p>
            </div>
            <div class="blog-down-bar">
                <!-- <button id="like" name="like"><i id="like" class="bi bi-heart"></i></button>
                <button id="comment" name="comment"><i id="comment" class="bi bi-chat-left-text"></i></button> -->
                <a href="blogView.php?id=<?php echo $blog['id']; ?>"><button id="see" name="see">See more<i class="bi bi-eye"></i></button></a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <?php include '../view/include/footer.html'; ?>
