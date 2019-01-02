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
    $query="SELECT * FROM categories WHERE id=".$id;
    
    //run query
    
    $category=$db->select($query)->fetch_assoc();
    
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
         $name=mysqli_escape_string($db->link, $_POST['name']);
        
           //validation
  
         if($name==''){
  
                  //set error
                  $error="please fill out all required fileds ";
    
      }else{
              $query="UPDATE categories SET
              name='$name'
              WHERE id=".$id;
              
              
              
        
            
               $update_row=$db->update($query);
     }
   }
    
    
    ?>
    
     <?php
    
     if(isset($_POST['delete'])){
      
      //call delete method
      $query="DELETE FROM categories WHERE id=".$id;
        $delete_row=$db->delete($query);
      
      
     }
   ?>
   
<form role="form" action="edit_category.php?id=<?php echo $id; ?>" method="post">
  <div class="form-group">
    <label>catagory name</label>
    <input name="name" type="text" class="form-control"  placeholder=" Enter category " value="<?php echo $category['name'];?>">
  </div>
<div>
    
     <input name="submit" type="submit" class="btn btn-default" value="submit">
        <a href="index.php" class="btn btn-default">cancel</a>
          <input name="delete" type="submit" class="btn btn-danger" value="delete">
          
</div>
<br>
</form>
<?php include 'includes/footer.php';?>