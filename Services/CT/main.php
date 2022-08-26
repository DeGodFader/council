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
          <h4 style="font-weight:bold">Tax</h4>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="service">
                <h2 style=" font-weight:bold; text-align:center;" >Tax</h2>
                <div class="container">
                    <div class="row justify-content-center">
                         <!-- List of links -->
                            <?php 
                                    $List=["Your Council Tax", "Information for Land Lords", "Get Money Off Council tax", "Council Tax Support"];
                                    $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                    if($line>=6){$Space="col-lg-6 col-md-6";}
                                    else{$Space="col-lg-4 col-md-4";}
                                    $i=1;
                                    foreach($List as $item){
                            
                            ?>
                          <div class="<?php echo $Space?> btn ">
                              <a href="Services/BS/2.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>">
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