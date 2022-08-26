<div>
    <div class="container">
        <div class="section-header">
            <h2></h2>
        </div>
    </div>

    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h4 style="font-weight:bold">Properties</h4>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <div class="service">
                <h2 style=" font-weight:bold; text-align:center;" >Properties</h2>
                <div class="container">
                    <div class="row">
                         <!-- List of links -->
                            <?php 
                                    $List=["Lands and Properties", "Land and Properties for Sale and To-let"];
                                    $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                    if($line>=6){$Space="col-lg-6 col-md-6";}
                                    else{$Space="col-lg-4 col-md-4";}
                                    $i=1;
                                    foreach($List as $item){
                            
                            ?>
                          <div class="<?php echo $Space?> btn ">
                              <a href="Services/Ev/1.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>&&Page=<?php echo $List[$i-1]?>">
                                  <div class="service-item">
                                      <h3> <?php echo $item?>
                                      <i class="far fa-arrow-alt-circle-right"></i>
                                      </h3>
                                  </div>
                              </a>
                          </div>
                          <?php $i++;}?>
                    </div>
                </div>
                <div class="container">
                    <h3 style="font-weight:bold;">Lorem, ipsum dolor sit amet cons</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iusto debitis excepturi obcaecati assumenda perferendis laboriosam eius magnam voluptatem cum asperiores nulla, tempore facilis libero</p>
                    <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                </div>
            </div>
          </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h4 style="font-weight:bold">Environment</h4>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="service">
                <h2 style=" font-weight:bold; text-align:center;" >Environment</h2>
                <div class="container">
                    <div class="row">
                         <!-- List of links -->
                            <?php 
                                    $List=["Envirnonmental  Protection", "Eco News"];
                                    $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                    if($line>=6){$Space="col-lg-6 col-md-6";}
                                    else{$Space="col-lg-4 col-md-4";}
                                    $i=1;
                                    foreach($List as $item){
                            
                            ?>
                          <div class="<?php echo $Space?> btn ">
                              <a href="Services/Ev/2.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>&&Page=<?php echo $List[$i-1]?>">
                                  <div class="service-item">
                                      <h3> <?php echo $item?>
                                      <i class="far fa-arrow-alt-circle-right"></i>
                                      </h3>
                                  </div>
                              </a>
                          </div>
                          <?php $i++;}?>
                    </div>
                </div>
                <div class="container">
                    <h3 style="font-weight:bold;">Lorem, ipsum dolor sit amet cons</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iusto debitis excepturi obcaecati assumenda perferendis laboriosam eius magnam voluptatem cum asperiores nulla, tempore facilis libero</p>
                    <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                </div>
            </div>
          </div>
    </div>
  </div>
</div>

</div>