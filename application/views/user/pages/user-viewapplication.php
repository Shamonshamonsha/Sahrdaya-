<div class="row">
    <h3>Application Details</h3>
    <br>
    <table class="table">
        <tr>
            <th>Application Name</th>
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
            <th>Plan uploaded On</th>
            <td><?=date('d-M-y',$application->time_stamp)?></td>
        </tr>
        <tr>
            <th>Plan</th>
            <td><a target="_blank" href="<?=base_url().'uploads/plans/'.$application->plan?>">view/download</a></td>
        </tr>
    </table>
</div>