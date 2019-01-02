<?php include 'includes/header.php';?>
<?php

//create db object
    $db=new Database();
    
   
       if(isset($_POST['submit'])){
          //assign vars
         $title=mysqli_escape_string($db->link, $_POST['title']);
         $body=mysqli_escape_string($db->link, $_POST['body']);
         $category=mysqli_escape_string($db->link, $_POST['category']);
         $author=mysqli_escape_string($db->link, $_POST['author']);
         $tags=mysqli_escape_string($db->link, $_POST['tags']);
           //validation
  
         if($title==''||$body==''||$category==''||$author==''){
  
                  //set error
                  $error="please fill out all required fileds ";
    
      }else{
              $query="INSERT INTO posts
               (title,body,category,author,tags)
               VALUES ('$title','$body','$category','$author','$tags')";
               $insert_row=$db->insert($query);
     }
   }

?>
<?php

    
      /*
     *categerious
     *
     */
    //create query
    $query="SELECT * FROM categories";
    
    //run query
    
    $categories=$db->select($query);
    
    ?>
   
<form role="form" method="post" action="add_post.php"> 
  <div class="form-group">
    <label>post title</label>
    <input name="title" type="text" class="form-control"  placeholder="title">
  </div>
   <div class="form-group">
   <label>post Body</label>
    <textarea name="body"  class="form-control"  placeholder="Enter post title"></textarea>
  </div>
   
    <div class="form-group">
   <label>Category</label>
     <select name="category" class="form-control">
      <?php while($row=$categories->fetch_assoc()): ?>
      <?php if($row['id']==$post['category']){
         $selected='selected';
      }else{
         $selected='';
      }
      
      
      ?>
     
        <option <?php echo $selected ;?> value="<?php echo $row['id']; ?>"><?php echo $row['name']?></option>
      <?php endwhile; ?>
        
    </select>
  </div>
    
    <div class="form-group">
    <label>post Author</label>
    <input name="author" type="text" class="form-control"  placeholder="Enter author name">
  </div>
    
    <div class="form-group">
    <label>post tages</label>
    <input name="tages" type="text" class="form-control"  placeholder="Enter tages">
  </div>
  <div>
         <input name="submit" type="submit" class="btn btn-default" value="submit">
  <a href="index.php" class="btn btn-default">cancel</a>

  </div>
  <br>
 
</form>



<?php include 'includes/footer.php';?>