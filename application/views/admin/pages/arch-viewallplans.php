<div class="row">
    <h3>All Plans</h3>
    <br>
    <table class="table">
        <tr>
            <td>#</td>
            <th>Application Name</th>
            <th>Address</th>
            <th>Application ID</th>
            <th>Password</th>
        </tr>
        <?php foreach($allplans as $key=>$value){ ?>
        <tr>
            <td><?=($key+1)?></td>
            <td><?=$value->name ?></td>
            <td><?=$value->address ?></td>
            <td><?=$value->application_id ?></td>
            <td><?=$value->password?></td>
            <?php }?>
    </table>
</div>