<?php include 'includes/header.php';?>
<?php
$id= $_GET['id'];

//create db object
    $db=new Database();
    
    /*
     *posts
     *
     */
    
     //create query
    $query="SELECT * FROM posts WHERE id=".$id;
    
    //run query
    
    $post=$db->select($query)->fetch_assoc();
    
      /*
     *categerious
     *
     */
    //create query
    $query="SELECT * FROM categories";
    
    //run query
    
    $categories=$db->select($query);
    
    ?>
    <?php
    
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
              $query="UPDATE posts SET
              title='$title',
              body='$body',
              category='$category',
              author='$author',
              tags='$tags'
              WHERE id=".$id;
              
              
              
        
            
               $update_row=$db->update($query);
     }
   }
    
    
    ?>
    
   <?php
    
     if(isset($_POST['delete'])){
      
      //call delete method
      $query="DELETE FROM posts WHERE id=".$id;
        $delete_row=$db->delete($query);
      
      
     }
   ?>

<form role="form" method="post" action="edit_post.php?id=<?php echo $id?>"> 
  <div class="form-group">
    <label>post title</label>
    <input name="title" type="text" class="form-control"  placeholder="title" value="<?php echo $post['title'];?>">
  </div>
   <div class="form-group">
   <label>post Body</label>
    <textarea name="body"  class="form-control"  placeholder="Enter post body">
      <?php echo $post['body'];?>
    </textarea>
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
     
        <option value="<?php echo $row['id'] ;?>" <?php echo $selected ;?>><?php echo $row['name']?></option>
      <?php endwhile; ?>
        
    </select>
  </div>
    
    <div class="form-group">
    <label>post Author</label>
    <input name="author" type="text" class="form-control"  placeholder="Enter author name" value="<?php echo $post['author'];?>">
  </div>
    
    <div class="form-group">
    <label>post tags</label>
    <input name="tags" type="text" class="form-control"  placeholder="Enter tags" value="<?php echo $post['tags'];?>">
  </div>
  <div>
     <input name="submit" type="submit" class="btn btn-default" value="submit">
  <a href="index.php" class="btn btn-default">cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="delete">
    
  </div>
  <br>
 
</form>



<?php include 'includes/footer.php';?>