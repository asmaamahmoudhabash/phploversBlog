
<?php include "includes/header.php"; ?>

<?php


//create db object
    $db=new Database();
    
    /*
     *posts
     *
     */
    
     //create query
    $query="SELECT * FROM posts";
    
    //run query
    
    $posts=$db->select($query);
    
      /*
     *categerious
     *
     */
    //create query
    $query="SELECT * FROM categories";
    
    //run query
    
    $categories=$db->select($query);
    
    ?>
  <?php if($posts) :?>
  <?php while($row=$posts->fetch_assoc()):?>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
              <p class="blog-post-meta"> <?php echo formatDate($row['date']);?>  <a href="#"><?php echo $row['author'];?></a></p>
                <?php echo shortenText($row['body']);?>
              <a class="readmore" href="post.php?id=<?php echo  urlencode($row['id']);?>">read more</a>
          </div><!-- /.blog-post -->
          <?php endwhile;?>

         <?php else :?>
         
         <p>there no are posts yet</p>
         <?php endif ;?>
         
         
         
          <?php include "includes/footer.php"; ?>