
<div class="container row " style="width:100%">
  <form action="Services/JC/3.php?Service=<?php echo $Service->Name?>" method="post" class="form" style="width:100%">
    <div class="row" style="width:100%">
      <div class="col-md-4 btn" style="width:31%">
        <input type="submit" value="Search Jobs by Title" class="btn" style="background-color:#f2f7f7; width:100%;" name="1">
      </div>
      <div class="col-md-4 btn" style="width:31%">
        <input type="submit" value="Search Professionals" class="btn" style="background-color:#f2f7f7; width:100%;" name="2">
      </div>
      <div class="col-md-4 btn" style="width:31%">
        <input type="submit" value="Search Job by Company" class="btn" style="background-color:#f2f7f7; width:100%;" name="3">
      </div>
    </div>
  </form>
</div>

<div>
  <?php 
    $Jobs=$Jobb->S_All();
    if($Jobs){
      foreach($Jobs as $Job){
  
  ?>
  <div class="container" style="background-color:#f2f7f7; border-radius:20px; margin-bottom:15px;">
    <div>
      <h3 style="font-weight:bold;"><?php echo $Job->Title?></h3>
    </div>
    <div>
      <span class="badge badge-primary" style="width:100px; height: 23px; border-radius:20px; padding-top:5px; margin:5px;"> <i class="fas fa-user-alt"></i> <?php echo $Job->Want?></span>
      <span class="badge badge-primary" style="width:100px; height: 23px; border-radius:20px; padding-top:5px; margin:5px;"> <i class="fas fa-briefcase"></i> <?php echo $Job->Type?></span>
      <span class="badge badge-primary" style="width:100px; height: 23px; border-radius:20px; padding-top:5px; margin:5px;"> <i class="fas fa-map-marker-alt"></i> <?php echo $Job->Location?></span>
      <span class="badge badge-primary" style="width:100px; height: 23px; border-radius:20px; padding-top:5px; margin:5px;"> <i class="far fa-clock"></i> <?php echo $Job->Date?></span>
    </div>
    <div>
      <?php echo $Job->Brief?>
    </div>
    <div>
      <a href="Services/JC/1.php?M=<?php echo $Job->ID;?>&&Service=<?php echo $Service->Name?>"><button class="col-md-12 btn" style="border-style: groove; border-color:#c7c9c9; border-radius:5px;">Show More</button></a>
      <a href="Services/JC/2.php?M=<?php echo $Job->ID;?>&&Service=<?php echo $Service->Name?>"><button class="col-md-12 btn" style="border-style: groove; border-color:#c7c9c9; border-radius:5px;">Apply</button></a>
    </div>
  </div>
  <?php }}?>
</div>


