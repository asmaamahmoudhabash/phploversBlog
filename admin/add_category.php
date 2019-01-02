<?php include 'includes/header.php';?>

<?php

//create db object
    $db=new Database();
    
   
       if(isset($_POST['submit'])){
          //assign vars
         $name=mysqli_escape_string($db->link, $_POST['name']);
       
           //validation
  
         if($name==''){
  
                  //set error
                  $error="please fill out all required fileds ";
    
      }else{
              $query="INSERT INTO categories
               (name)
               VALUES ('$name')";
               $update_row=$db->update($query);
     }
   }

?>
<form role="form" action="add_category.php" method="post">
  <div class="form-group">
    <label>catagory name</label>
    <input name="name" type="text" class="form-control"  placeholder=" Enter category ">
  </div>
<div>
    
        <input name="submit" type="submit" class="btn btn-default" value="submit">
               <a href="index.php" class="btn btn-default">cancel</a>
                        

            
            
</div>
<br>
</form>
<?php include 'includes/footer.php';?>