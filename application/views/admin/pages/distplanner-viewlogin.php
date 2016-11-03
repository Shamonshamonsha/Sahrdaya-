<div class="row">
    <h3>View Local Body Officer  logins</h3>
    <br>
    <table class="table">
        <tr>
            <td>#</td>
            <th>Officer Name</th>
            <th>Username</th>
            <th>Local Body</th>
        </tr>
        <?php foreach($distplanner_users as $key=>$value){ ?>
        <tr>
            <td><?=($key+1)?></td>
            <td><?=$value->name ?></td>
            <td><?=$value->username ?></td>
            <td><?=$value->local_bodyname.' '.$value->local_bodytype?></td>
            <?php }?>
    </table>
</div>