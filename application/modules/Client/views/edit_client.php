<?php
$dataclient = "";
  if($client){
    foreach($client as $row) 
    {
      $id_client =  $row->id_client;
      $name_client =  $row->name_client;
      $logo_client =  $row->logo_client;
    }
  }  
  else
  {
    $client = ""; 
  }
?>


<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?=$module_name?>
      </h3>
    </div>
            <!-- form start -->
    <form id="formeditclient"  enctype="multipart/form-data">>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Company Name</label>
          <input name="namaclient"type="text" value="<?=$name_client?>" class="form-control" id="exampleInputEmail1" placeholder="Enter company name">
          <input name="id_client"type="hidden" value="<?=$id_client?>" class="form-control" id="exampleInputEmail1" placeholder="Enter company name">
        </div>
        
      <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="edit_logo" id="exampleInputFile">
                  <input type="hidden" name="logo_before" value="<?=$logo_client?>"/>
                </div>
                <img src="<?=$logo_client?>" width="200" />


      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</section>
            
              <!-- /.box-body -->
