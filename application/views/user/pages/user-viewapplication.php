<div class="row">
    <h3>Application Details</h3>
    <br>
    <table class="table">
        <tr>
            <th>Applicant Name</th>
            <td><?=$application->applicant_name?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?=$application->email?></td>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <td><?=$application->mobile_number?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?=$application->city?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?=$application->gender?></td>
        </tr>
        <tr>
            <th>Application Type</th>
            <td><?=$application->name?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?=$application->address?></td>
        </tr>
        <tr>
            <th>District</th>
            <td><?=$application->district?></td>
        </tr>
        <tr>
            <th>Local Body</th>
            <td><?=$application->localbody_name.' '.$application->localbody_type?></td>
        </tr>
        <tr>
            <th>Ward Number</th>
            <td><?=$application->ward?></td>
        </tr>
        <tr>
            <th>Building usage</th>
            <td><?=$application->build_usage?></td>
        </tr>
        <tr>
            <th>Building category</th>
            <td><?=$application->build_category?></td>
        </tr>
        <tr>
            <th>Plot number</th>
            <td><?=$application->plot_number?></td>
        </tr>
        <tr>
            <th>Building Height</th>
            <td><?=$application->build_height?></td>
        </tr>
        <tr>
            <th>Ploat Area</th>
            <td><?=$application->build_size?></td>
        </tr>
        <tr>
            <th>Plinth Area</th>
            <td><?=$application->plinth_area?></td>
        </tr>
        <tr>
            <th>Open area</th>
            <td><?=$application->open_area?></td>
        </tr>
        <tr>
            <th>upper floor  area</th>
            <td><?=$application->upper_floorarea?></td>
        </tr>
        <tr>
            <th>Ground floor  area</th>
            <td><?=$application->ground_floorarea?></td>
        </tr>
        <tr>
            <th>Parking  area</th>
            <td><?=$application->parking_area?></td>
        </tr>
        <tr>
            <th>Total building area</th>
            <td><?=$application->totalbuild_area?></td>
        </tr>
        <tr>
        <tr>
            <th>Plan uploaded On</th>
            <td><?=date('d-M-y',$application->time_stamp)?></td>
        </tr>
        <tr>
            <th>Plan</th>
            <td><a target="_blank" href="<?=base_url().'uploads/plans/'.$application->plan?>">view/download</a></td>
        </tr>
        <tr>
            <th>Deed Certificate</th>
            <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$application->deedcopy?>">view/download</a></td>
        </tr>
        <tr>
            <th>Tax Recipt</th>
            <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$application->tax_recipt?>">view/download</a></td>
        </tr>
        <tr>
            <th>Pocession Certificate</th>
            <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$application->pes_certificate?>">view/download</a></td>
        </tr>
        <tr>
            <th>Encumbrance Certificate</th>
            <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$application->encumb_cer?>">view/download</a></td>
        </tr>
        <tr>
            <th>NOC & Affidavit Certificate</th>
            <td><a target="_blank" href="<?=base_url().'uploads/docs/'.$application->noc_cer?>">view/download</a></td>
        </tr>
    </table>
</div>