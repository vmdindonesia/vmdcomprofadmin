<?php
$dataTeam = "";
  if($Team_info){
    foreach($Team_info as $row) 
    {
      $team_id =  $row->team_id;
      $team_name =  $row->team_name;
      $team_divisi =  $row->team_divisi;
      $team_jabatan = $row->team_jabatan;
      $team_img = $row->team_img;
    }
  }  
  else
  {
    $Team_info = ""; 
   }
?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
      <div class="box box-primary">
            <div class="box-header with-border">
              <h2>Team</h2>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="formeditteam" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Angggota</label>
                  <input name="nama_anggota" value="<?=$team_name?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
                  <input name="team_id" value="<?=$team_id?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Divisi Anggota</label>
                  <input name="nama_divisi" type="text" value="<?=$team_divisi?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Divisi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <input name="nama_jabatan" type="text" value="<?=$team_jabatan?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jabatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="image_team" id="exampleInputFile">
                  <input type="hidden" name="logo_before" value="<?=$team_img?>"/>
                </div>
                <img src="<?=$team_img?>" />
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </section>