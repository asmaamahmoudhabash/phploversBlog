<?php include 'includes/header.php';?>
<?php

//create DB object
$db=new Database;
//create aquery
$query="SELECT  posts.* , categories.name FROM posts
     INNER JOIN categories ON posts.category=categories.id
     ORDER BY posts.title DESC";
//run aquery
$posts=$db->select($query);

    $query="SELECT * FROM categories ORDER BY name";
    $categories=$db->select($query);

?>
            
       <table class="table table-striped">
        <tr>
           <th>post id#</th>
           <th>post title</th>
             <th>post body</th>
           <th>category</th>
           <th>Author</th>
           <th>Date</th> 
           
            
            
        </tr>
       
      
             <?php while($row=$posts->fetch_assoc()): ?>
             <tr>
               <td><?php echo $row['id'];?></td>
               <td><a href="edit_post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
               <td><?php echo $row['body'];?></td>
               <td><?php echo $row['name'];?></td>
               <td><?php echo $row['author'];?></td>
               <td><?php echo formatDate($row['date']);?></td>
          </tr>
           <?php endwhile;?>
            
      
  
       </table>
       
          <table class="table table-striped">
        <tr>
           <th>category id#</th>
           <th>category name</th>
    
            
        </tr>
        
       
             <?php while($row=$categories->fetch_assoc()): ?>
             <tr>
               <td><?php echo $row['id'];?></td>
               <td><a href="edit_category.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></td>
              
            </tr>
           <?php endwhile;?>
            
  
       </table>
<?php include'includes/footer.php';?>