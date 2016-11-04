<style>
    .disabled {
        pointer-events: none;
        cursor: default;
    }
</style>
<div class="row">
    <?php if($this->session->flashdata('server_msg')!== NULL): ?>
        <?php $display =$this->session->flashdata('server_msg') ?>
        <div class="alert alert-<?=$display['class']; ?> text-center">
            <strong><?=$display['title']; ?></strong>
            <?=$display['msg']; ?>
        </div>
    <?php endif;?>
    <div class="panel-group" id="accordion">
        <?php  foreach ($dt_pendingapps as $key=>$value){ ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>">
                            <?=$value->applicant_name.'/'.$value->application_id?></a>
                    </h4>
                    <div style="float:right; margin-top: -20px">
                        <?php
                        if($value->status=='1'){
                            echo '<strong style="color: #c9302c">Pending with BI</strong>';
                        }else if($value->status=='3'){
                            echo '<strong style="color: #acc97b">Approved</strong>';
                        }else if($value->status=='4'){
                            echo '<strong style="color: #c9302c">Pending with AEE</strong>';
                        }else if($value->status=='5'){
                            echo '<strong style="color: #c9302c">Pending with EE</strong>';
                        }else if($value->status=='2'){
                            echo '<strong style="color: #c9302c">Pending with Secretary</strong>';
                        }else if($value->status=='6'){
                            echo '<strong style="color: #c9302c">Pending with AE</strong>';
                        }
                        else if($value->status=='7'){
                            echo '<strong style="color: #c9302c">Pending with DTO</strong>';
                        }
                        else if($value->status=='8'){
                            echo '<strong style="color: #c9302c">Forward to CTO</strong>';
                        }
                        ?>
                    </div>
                </div>
                <div id="collapse<?=$key?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Applicant Name</th>
                                <td><?=$value->applicant_name?></td>
                            </tr>
                            <tr>
                                <th>Aaadhar number</th>
                                <td><?=$value->aadhar_no?></td>
                            </tr>
                            <tr>
                                <th>Application Type</th>
                                <td><?=$value->name?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?=$value->gender?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?=$value->email?></td>
                            </tr>
                            <tr>
                                <th>Mobile number</th>
                                <td><?=$value->mobile_number?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?=$value->address?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><?=$value->city?></td>
                            </tr>
                            <tr>
                                <th>District</th>
                                <td><?=$value->district?></td>
                            </tr>
                            <tr>
                                <th>Local Body</th>
                                <td><?=$value->localbody_name.' '.$value->localbody_type?></td>
                            </tr>
                            <tr>
                                <th>Ward Number</th>
                                <td><?=$value->ward?></td>
                            </tr>
                            <tr>
                                <th>Building usage</th>
                                <td><?=$value->build_usage?></td>
                            </tr>
                            <tr>
                                <th>Building category</th>
                                <td><?=$value->build_category?></td>
                            </tr>
                            <tr>
                                <th>Plot number</th>
                                <td><?=$value->plot_number?></td>
                            </tr>
                            <tr>
                                <th>Building Height</th>
                                <td><?=$value->build_height?></td>
                            </tr>
                            <tr>
                                <th>Ploat Area</th>
                                <td><?=$value->build_size?></td>
                            </tr>
                            <tr>
                                <th>Plinth Area</th>
                                <td><?=$value->plinth_area?></td>
                            </tr>
                            <tr>
                                <th>Open area</th>
                                <td><?=$value->open_area?></td>
                            </tr>
                            <tr>
                                <th>upper floor  area</th>
                                <td><?=$value->upper_floorarea?></td>
                            </tr>
                            <tr>
                                <th>Ground floor  area</th>
                                <td><?=$value->ground_floorarea?></td>
                            </tr>
                            <tr>
                                <th>Parking  area</th>
                                <td><?=$value->parking_area?></td>
                            </tr>
                            <tr>
                                <th>Total building area</th>
                                <td><?=$value->totalbuild_area?></td>
                            </tr>
                            <tr>
                                <th>Plan uploaded On</th>
                                <td><?=date('d-M-y',$value->time_stamp)?></td>
                            </tr>
                            <tr>
                                <th>Plan</th>
                                <td><a target="_blank" href="<?=base_url().'uploads/plans/'.$value->plan?>">view/download</a></td>
                            </tr>
                            <tr>
                                <th>Deed Certificate</th>
                                <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$value->deedcopy?>">view/download</a></td>
                            </tr>
                            <tr>
                                <th>Tax Recipt</th>
                                <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$value->tax_recipt?>">view/download</a></td>
                            </tr>
                            <tr>
                                <th>Pocession Certificate</th>
                                <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$value->pes_certificate?>">view/download</a></td>
                            </tr>
                            <tr>
                                <th>Encumbrance Certificate</th>
                                <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$value->encumb_cer?>">view/download</a></td>
                            </tr>
                            <tr>
                                <th>NOC & Affidavit Certificate</th>
                                <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$value->noc_cer?>">view/download</a></td>
                            </tr>
                        </table>
                        <a  href="<?=base_url().'common/forward_ct/'.$value->id?>" class="btn btn-primary <?php if($value->status=='8')echo 'disabled';?>">Forward to CTO</a>
                        <a style="float: right" href="<?=base_url().'common/approve_appdt/'.$value->id?>" class="btn btn-primary <?php if($value->status=='3'||$value->status=='8')echo 'disabled';?>">Approve</a>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <form class="form-horizontal" action="<?=base_url()?>common/app_communications/0" method="post">
                                    <label class="control-label col-sm-2" for="email">Remarks:</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id" value="<?=$value->id?>">
                                        <textarea name="remarks" class="form-control" id="email" placeholder="" ></textarea>
                                        <br>
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <?php
                            $remarks_data = $this->dashboard_model->get_remarks($value->id)->result();
                            foreach ($remarks_data as $value){
                                ?>
                                <div class="alert alert-warning">
                                    Message:<?=$value->content?>
                                    <br>
                                    Posted_by:<strong><?=$value->added_by?></strong>
                                    <?php if(!empty($value->name)) {?>
                                        <br>
                                        Officer Name:<strong><?=$value->name?></strong>
                                    <?php } ?>
                                    <br>
                                    Posted On:<strong><?=date('d-M-y',$value->time_stamp)?></strong>
                                </div>
                            <?php }?>
                        </div>
                        <!--<button type="button" app-id="<?=$value->id?>" class="remark-btn btn btn-primary">Add Fees</button>-->
                        <!--<a href="<?=base_url().'common/forward_ae/'.$value->id?>" class="btn btn-primary <?php if($value->status=='2')echo 'disabled';?>">Submit to AE</a>
                <button type="button" app-id="<?=$value->id?>" class="req-btn btn btn-danger">Request for Site visit</button>
                <button type="button" app-id="<?=$value->id?>" class="report-btn btn btn-primary">Site Visit Report</button>-->
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Site visit request</h4>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url()?>common/add_remark/request" method="post">
                        <input type="hidden" name="id" id="app-uniqid">
                        <textarea class="form-control" name="remarks" required></textarea>
                        <br>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"   class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="reportModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Enter Report</h4>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url()?>common/add_remark/report" method="post">
                        <input type="hidden" name="id" id="app2-uniqid">
                        <textarea class="form-control" name="remarks" required></textarea>
                        <br>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"   class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="remarkModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Enter the amount to be paid</h4>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url()?>common/add_applicationamount" method="post">
                        <input type="hidden" name="id" id="app1-uniqid">
                        <input type="text" class="form-control" name="amount" required>
                        <br>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"   class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $('.req-btn').click(function () {
        var id=$(this).attr('app-id');
        $('#app-uniqid').val(id);
        $('#myModal').modal('show');
    });
    $('.report-btn').click(function () {
        var id=$(this).attr('app-id');
        $('#app2-uniqid').val(id);
        $('#reportModal').modal('show');
    })
    $('.remark-btn').click(function () {
        var id=$(this).attr('app-id');
        alert(id);
        $('#app1-uniqid').val(id);
        $('#remarkModal').modal('show');
    })
</script>