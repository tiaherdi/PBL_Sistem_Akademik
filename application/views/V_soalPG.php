<h3> Tes Ketuntasan</h3>
	<form class="form-horizontal" action="" method="POST">
        <?php
            $i = 1;foreach ($datauser as $key) {
        ?>
  <?php echo $i; ?>. <?php echo $key['t_soal'];
  ?>
         <div class="form-group">
    <label>
     <input type="radio" class="minimal-blue" name="S<?php echo $key['ID_soal']; ?>" value="A"> 
       A. <?php echo $key['pilihan1']; ?> &nbsp;
    </label>
    <label>
     <input type="radio" class="minimal-blue" name="S<?php echo $key['ID_soal']; ?>" value="B"/>
       B. <?php echo $key['pilihan2']; ?> &nbsp;
    </label>
    <label>
     <input type="radio" class="minimal-blue" name="S<?php echo $key['ID_soal']; ?>" value="C"/>
       C. <?php echo $key['pilihan3']; ?> &nbsp;
    </label>
    <label>
     <input type="radio" class="minimal-blue" name="S<?php echo $key['ID_soal']; ?>" value="D"/>
       D. <?php echo $key['pilihan3']; ?> &nbsp;
    </label>
    <label>
     <input type="radio" class="minimal-blue" name="S<?php echo $key['ID_soal']; ?>" value="E"/>
       E. <?php echo $key['pilihan3']; ?> &nbsp;
    </label>
    <hr/>
    </div>
      <input type="text" name="idSoalSesi" value="<?php echo $key['ID_soal']; ?>" hidden>
                        <?php $i++; } ?>
     <input type="submit" name="submit" value="submit" class="btn btn-responsive btn-primary btn-sm">
    </form>
<br><br>