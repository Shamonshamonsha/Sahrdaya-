<div class="row">
    <?php
     $old =$user_data[0];
   // print_r($user_data);
    ?>
    <?php if($this->session->flashdata('server_msg')!== NULL): ?>
        <?php $display =$this->session->flashdata('server_msg') ?>
        <div class="alert alert-<?=$display['class']; ?> text-center">
            <strong><?=$display['title']; ?></strong>
            <?=$display['msg']; ?>
        </div>
    <?php endif; ?>
    <form class="form-horizontal" method="post" action="<?=base_url()?>user/edit_data" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">UID(Aadhar):</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['aadhar_no']?>" name="aadhar_no" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <h2>Building Details</h2>
        <hr/>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Vacant land survey no:</label>
            <div class="col-sm-10">
                <input type="text" name="survey_no" value="<?=$old['survey_no']?>" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Building usage:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['build_usage']?>" name="build_usage" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Building Category</label>
            <div class="col-sm-10">
                <select class="form-control" name="build_category" required>
                    <option>Residential</option>
                    <option>Non-Residential</option>
                    <option>Commercial</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Plot number:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['plot_number']?>" name="plot_number" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Locality:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['locality']?>" name="locality" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Street:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['street']?>" name="street" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Block number:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['block_number']?>" name="block_number" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <h2>Technical Data( In m<sup>2</sup>)</h2>
        </hr>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Height of building:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['build_height']?>" name="build_height" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Size/Ploat area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['build_size']?>" name="build_size" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Plinth area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['plinth_area']?>" name="plinth_area" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Open  area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['open_area']?>" name="open_area" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Stilt floor  area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['still_floorarea']?>" name="still_floorarea" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Upper floor  area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['upper_floorarea']?>" name="upper_floorarea" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Ground floor  area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['ground_floorarea']?>" name="ground_floorarea" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Parking  area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['parking_area']?>" name="parking_area" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Total build  area:</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$old['totalbuild_area']?>" name="totalbuild_area" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>