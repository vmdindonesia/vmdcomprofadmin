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
      $dataTeam .="
      <tr>
        <td>$team_id</td>
        <td>$team_name</td>
        <td>$team_divisi</td>
        <td>$team_jabatan</td>
        <td><input type='hidden' value='$team_img' id='team_img'><img width='100px' src= '$team_img'/></td>
        <td><span onClick='delete_team(\"$team_id\")' class='btn btn-primary'>X</span></td>
        <th><a href='".base_url()."/team/edit_team/".$team_id."' class='btn btn-primary'>Edit</a></th>
      </tr>
      "; 
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
            <form id="formteam" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Angggota</label>
                  <input name="nama_anggota" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Divisi Anggota</label>
                  <input name="nama_divisi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Divisi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <input name="nama_jabatan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jabatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="image_team" id="exampleInputFile">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

            <table class = "table">
      <thead>
        <tr>
          <th>ID Team</th>
          <th>Nama Team</th>
          <th>Divisi</th>
          <th>Jabatan</th>
          <th>Gambar</th>
        </tr>
      </thead>
      <tbody>
        <?=$dataTeam?>
      </tbody>
    </table>
          </div>
          </section>