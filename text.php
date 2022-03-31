<!DOCTYPE html> 
  <html lang="en"> 
  <head> 
    <title>Listing</title> 
  </head> 
  <body> 
    
  <div class="container">    
    <table class="table table-striped"> 
      <thead> 
        <h4>Student Record </h4>
        <tr> 
          <th>Id</th>
          <th>Name</th> 
          <th>Mobile</th> 
          <th>Email</th> 
          <th>Age</th> 
          <th>Course</th> 
          <th>Fee</th>
          <th>Edit</th> 
          <th>delete</th> 
        </tr> 
      </thead> 
      <tbody> 
      <?php 
        $student= new student(); 
        $result = $student->selectalldata("student"); 
        while($data = mysqli_fetch_array($result)) 
        { 
       ?>  
        <tr> 
          <td><?php echo $data['id']; ?></td> 
          <td><?php echo $data['name']; ?></td> 
          <td><?php echo $data['phone']; ?></td> 
          <td><?php echo $data['email']; ?></td> 
          <td><?php echo $data['age']; ?></td> 
          <td><?php echo $data['course']; ?></td> 
          <td><?php echo $data['fee']; ?></td>
          <td><a href="update.php?editid=<?php echo $data['id'];?>">edit</td> 
          <td><a href="listing.php?delid=<?php echo $data['id'];?>" onclick=" return confirm('Do You really want to delete this data')">delete</td> 
        </tr> 
      <?php } ?> 
      </tbody> 
    </table> 
  </div> 
  </body> 
</html> 