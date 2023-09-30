<?php
include '../controller/blog_ctr.php';

$view = blogView($_GET['id']);

$comment = comment();
// print_r($comment);

// print_r($view);
?>
<?php include '../view/include/header.php'; ?>
<title><?php echo $view['singleView']['head']; ?> | kikd.lv</title>


    <div class="single-view-container-card">
        <div class="single-view-container" style="background-size: cover; background-image: url('<?php echo $view['singleView']['img_url'] ?>')"></div>
            <div class="single-view-title">
                   <h1> <?php echo $view['singleView']['head']; ?> </h1>
                   <h3>Posted by:<?php echo $view['singleView']['username']; ?></h3>
            </div>
            <div class="single-view-description">
                <p> <?php echo $view['singleView']['desc']; ?> </p>
            </div>
            <div class="single-view-downbar">
                <!---TO DO: put heart button--->
            </div>
            <div class="single-view-commentars"><!--This is the whole comment area--->
                <h2>Comments:</h2>
                <div class="input-commentar">
                    <form id="commentForm">
                        <label for="commentar">Add comment:</label><!---Need to make only logged in people can write a commentar---->
                        <textarea id="commentar" name="commentar"></textarea>
                        <button onclick="submitt('commentForm')">Add Commentar</button>
                        <input type="hidden" name="blog_id"  value="<?php echo $view['singleView']['id'] ?>">
                        <p id="errComment"></p>
                        <p id="msgComment"></p>
                    </form>
                </div>
                <?php 
                    foreach($comment['commentars'] as $commentar){
                        if($commentar['blog_id'] == $view['singleView']['id']){
                    ?>
                    <div class="single-view-commentar">
                        <h4><?php echo $commentar['user_id'];?></h4><p><?php echo $commentar['comment']; ?></p>
                    </div>
                    <?php
                        }
                    }
                    ?>
            </div> 
    </div>


    <script src="../public/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<?php include '../view/include/footer.html'; ?>