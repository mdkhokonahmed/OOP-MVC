  <span>
    <?php
      if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
    ?>
</span>
<table class="table table-bordered">
    <thead>
      <tr class="tablecolor">
        <th>SL</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Publications Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $count = 1;
        foreach ($categorys as $result) { ?>
        
      <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo $result->categoryname;?></td>
        <td><?php echo Text_helper::limit_text($result->description,100);?></td>
        <td><?php 
       
         if ($result->status == 1) {
           echo "Published";
         }else{
          echo "Unpublished";
         }
        ?></td>
        <td>
         
          <a href="<?php echo baseurl;?>/Category/editcategory/<?php echo $result->catid;?>">Edit</a>
          <a href="">Delete</a>
        </td>
      
      </tr>
      <?php } ?>
    </tbody>
  </table>
    

    
