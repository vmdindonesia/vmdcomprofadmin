<?php
$dataclient = "";
  if($Client){
    foreach($Client as $row) 
    {
      $id_client =  $row->id_client;
      $name_client =  $row->name_client;
      $logo_client =  $row->logo_client;
      $dataclient .="
      <tr>
        <td>$id_client</td>
        <td>$name_client</td>
        <td><img width='100px' src= '$logo_client'/> </td>
      </tr>
      "; 
    }
  }  
  else
  {
    $Client = ""; 
  }
?>


<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?=$module_name?>
      </h3>
    </div>
            <!-- form start -->
    <form id="formclient"  enctype="multipart/form-data">>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Company Name</label>
          <input name="namaclient"type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter company name">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">input logo</label>
          <input name="logo"type="file" id="exampleInputImage">
        </div>

      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    
    <table class = "table">
      <thead>
        <tr>
          <th>ID Client</th>
          <th>Nama Client</th>
          <th>Logo Client</th>
        </tr>
      </thead>
      <tbody>
        <?=$dataclient?>
      </tbody>
    </table>
  </div>
</section>
            
              <!-- /.box-body -->
