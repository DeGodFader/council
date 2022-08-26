<!-- Function -->
    <!-- Add -->
    <?php
        if(isset($_POST["A_S"])){
            if(!in_array($_POST["Secondary_C"],$VC->F_All("Secondary_C"))){
                unset($_GET["add"]);
                $VC->New($_POST["Primary_C"],$_POST["Secondary_C"]);
                
            }
            else{$_GET["error_C"]=0;}
        }

        if(isset($_POST["U_S"]) ){
            if(in_array($_POST["Secondary_C"],$VC->F_All("Secondary_C"))){
                $_GET["error_a"]=0;
                }
            else{
                $VC->Update($_POST["Primary_C"],$_POST["Secondary_C"],$_GET["edit"]);
                unset($_GET["edit"]);
            }
        }


        if(isset($_POST["A_V"])){
            if(!in_array($_POST["Link"],$LV->F_All("Link"))){
                $Cat=$VC->F_Par($_GET["M"], "Secondary_C");
                $LV->New($Cat->Primary_C, $_POST["Title"], $Cat->Secondary_C, $_POST["Source"], $_POST["Link"],$Cat->ID);
            }
        }

        if(isset($_POST["U_V"]) ){
            if(in_array($_POST["Title"],$LV->F_All("Title"))){
                $_GET["error_a"]=0;
                }
            else{
                $LV->Update($_POST["Title"],$_POST["Source"],$_GET["edit"]);
                unset($_GET["edit"]);
            }
        }
    ?>


<div class="col-md-3 col-sm-12">
            <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">app_registration</i>
                    </div>

                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                        <h6 class="text-white text-capitalize ps-3">Editor</h6>
                    </div>
                    </div>
            
                    <div class="card-body bg-gray-200">
                        <div class="col-12">
                            <div class="row">
                            <div class="col-12">
                                <a href="videos.php<?php if (!isset($_GET["E"])){?>?E=SC<?php }?>">
                                    <div class="col-12 mb-xl-0 mb-4 btn bg-gray-400">
                                        <i class="material-icons opacity-10">border_color</i>
                                        Category
                                    </div>
                                </a>
                                <br>
                                <br>
                                <?php if(isset($_GET["E"])){
                                        if($_GET["E"]=="SC"){ ?>
                                        <div class="row">
                                            <?php $Cats=$VC->F_All("Secondary_C");
                                                foreach($Cats as $Cat){$Cat2=$VC->Search($Cat,"Secondary_C");?>
                                                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                                        <div class="d-flex flex-column">
                                                            <h6 class="mb-1 text-dark font-weight-bold"><?php echo $Cat?>:     <small><?php echo $Cat2[0]->Primary_C?></small></h6>
                                                        </div>
                                                        <div class="d-flex align-items-center text-sm">
                                                            <a href="videos.php?E=SC&&edit=<?php echo $Cat2[0]->ID?>"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">edit</i></button></a>
                                                            <a href="videos.php?E=SC&&delete=<?php echo $Cat2[0]->ID?>"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">delete</i></button></a>
                                                        </div>
                                                        </li>

                                                <?php }?>
                                                    <div class="text-center">
                                                        <a href="videos.php?E=SC&&add=add_SC" class="bg-gray-400"><i class="material-icons text-lg position-relative me-1">add</i></a>
                                                    </div>
                                        </div>
                                        
                                        <?php if(isset($_GET["add"])){
                                            if($_GET["add"]=="add_SC"){?>
                                            <form role="form" method="post">
                                                <?php if(isset($_GET["error_C"])){?>
                                                <div class="g-danger">Category Already Exists</div>
                                                <?php }?>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Primary Category</label>
                                                <input type="text" class="form-control" name="Primary_C" required>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Secondary Category</label>
                                                <input type="text" class="form-control" name="Secondary_C" required>
                                                </div>
                                                <?php if(isset($_GET["success_C"])){?>
                                                <a href="videos.php"><div class="input-group input-group-outline mb-3">Done</div></a>
                                                <?php }?>
                                                <div class="text-center">
                                                <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="ADD" name="A_S">
                                                </div>
                                            </form>
                                        <?php }}?>
                                            
                                        <?php if(isset($_GET["edit"])){
                                            $Cat2=$VC->Search($_GET['edit'],"ID");?>
                                            <form role="form" method="post">
                                                <?php if(isset($_GET["error_a"])){?>
                                                <div class="g-danger">Category Already Exists <br> NO Update Done</div>
                                                <?php }?>
                                                <?php if(isset($_GET["success_C"])){?>
                                                <div class="g-danger">Category Successfully Added</div>
                                                <?php }?>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="Primary_C" required value="<?php echo $Cat2[0]->Primary_C?>">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="Secondary_C" required value="<?php echo $Cat2[0]->Secondary_C?>">
                                                </div>
                                                <?php if(isset($_GET["success_C"])){?>
                                                <a href="videos.php"><div class="input-group input-group-outline mb-3">Done</div></a>
                                                <?php }?>
                                                <div class="text-center">
                                                <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="UPDATE" name="U_S">
                                                </div>
                                            </form>
                                        <?php }?>



                                        <?php if(isset($_GET["delete"])){$Id=$VC->S_Par($_GET["delete"]);
                                            if(!empty($LV->Search($Id->Secondary_C, "Topic"))){?>
                                               <div class="bg-danger" style="color:#212529">This Category Has Videos Tied to it<br>Deleting It Deletes The Videos</div> <hr>    
                                               <div class="row">
                                               <a href="includes/functions.php?Del=Yes" class="btn col-md-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                                               <a href="includes/functions.php?Del=No" class="btn col-md-6 col-xs-12 bg-success" style="color:#212529">No</a>
                                               </div> 
                                        <?php }else{?>
                                            <div class="bg-danger" style="color:#212529">Delete <?php echo $Id->Secondary_C?>?</div> <hr>    
                                               <div class="row">
                                               <a href="includes/functions.php?Del=Yes&&id=<?php echo($Id->ID)?>" class="btn col-md-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                                               <a href="includes/functions.php?Del=No" class="btn col-md-6 col-xs-12 bg-success" style="color:#212529">No</a>
                                               </div> 
                                    <?php }}?>
                                        

                                <?php }}?>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="row">
                            <?php if(isset($_GET["M"])){?>
                                <div class="col-12">
                                    <a href="videos.php">
                                        <div class="col-12 mb-xl-0 mb-4 btn bg-gray-400">
                                            <i class="material-icons opacity-10">border_color</i>
                                            Videos
                                            <i class="material-icons opacity-10">arrow_drop_down</i>
                                        </div>
                                    </a>
                                    <br>
                                    <br>
                                    <?php if($_GET["M"]!="all"){?>
                                <div class="row">
                                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark font-weight-bold"><?php echo $VC->Search($_GET["M"],"Secondary_C")[0]->Primary_C?> -><small><?php echo $_GET["M"]?></small></h6>
                                        </div>
                                    </li>
                                    <?php $Vids=$LV->Search($_GET["M"], "Topic");
                                        foreach($Vids as $Vid){?>
                                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark font-weight-bold"><?php echo $Vid->Title?>: <small><?php echo $Vid->Source?></small></h6>
                                                </div>
                                                <div class="d-flex align-items-center text-sm">
                                                    <a href="videos.php?M=<?php echo $_GET["M"]?>&&E=VC&&edit=<?php echo $Vid->ID?>"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">edit</i></button></a>
                                                    <a href="videos.php?M=<?php echo $_GET["M"]?>&&E=VC&&delete=<?php echo $Vid->ID?>"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">delete</i></button></a>
                                                </div>
                                                </li>
                                        <?php }?>
                                    <?php if(!isset($GET_["E"])){?>
                                    <div class="text-center">
                                        <a href="videos.php?M=<?php echo $_GET["M"]?>&&E=Vid&&add=add_VC" class="bg-gray-400"><h2><i class="material-icons text-lg position-relative me-1">video_call</i></h2></a>
                                    </div>
                                    <?php }?>
                                    <?php if(isset($_GET["add"])){
                                            if($_GET["add"]=="add_VC"){?>
                                            <form role="form" method="post">
                                                <?php if(isset($_GET["error_C"])){?>
                                                <div class="g-danger">Category Already Exists</div>
                                                <?php }?>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Video Title</label>
                                                <input type="text" class="form-control" name="Title" required>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Video Source</label>
                                                <input type="text" class="form-control" name="Source" required>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label"></label>
                                                <textarea type="text" class="form-control" name="Link" required placeholder="Paste link hre"></textarea>
                                                </div>
                                                <div class="text-center">
                                                <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="ADD" name="A_V">
                                                </div>
                                            </form>
                                        <?php }}?>
                                        <?php if(isset($_GET["edit"])){
                                            $Vid=$LV->S_Par($_GET['edit']);?>
                                            <form role="form" method="post">
                                                <?php if(isset($_GET["error_a"])){?>
                                                <div class="g-danger">Category Already Exists <br> NO Update Done</div>
                                                <?php }?>
                                                <?php if(isset($_GET["success_C"])){?>
                                                <div class="g-success">Category Successfully Added</div>
                                                <?php }?>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="Title" required value="<?php echo $Vid->Title?>">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="Source" required value="<?php echo $Vid->Source?>">
                                                </div>
                                                <?php if(isset($_GET["success_C"])){?>
                                                <a href="videos.php"><div class="input-group input-group-outline mb-3">Done</div></a>
                                                <?php }?>
                                                <div class="text-center">
                                                <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="UPDATE" name="U_V">
                                                </div>
                                            </form>
                                        <?php }?>

                                        <?php if(isset($_GET["delete"])){ $Vid->S_Par($_GET["delete"])?>
                                            <div class="bg-danger" style="color:#212529">Delete <?php echo $Vid->Title?>?</div> <hr>    
                                               <div class="row">
                                               <a href="includes/functions.php?Dele=Yes&&id=<?php echo $_GET["delete"]?>" class="btn col-md-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                                               <a href="includes/functions.php?Del=No" class="btn col-md-6 col-xs-12 bg-success" style="color:#212529">No</a>
                                               </div> 
                                    <?php }?>

                                </div>
                            <?php }}?>
                            </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>