<div class="row">
    <h3>View Chief Town Planning officer logins</h3>
    <br>
    <table class="table">
        <tr>
            <th>#</th>
            <th>District</th>
            <th>Officer Name</th>
            <th>Username</th>
        </tr>
        <?php foreach($sp_townplanners as $key=>$value){ ?>
        <tr>
            <td><?=($key+1)?></td>
            <td><?=$value->district ?></td>
            <td><?=$value->name ?></td>
            <td><?=$value->username ?></td>
        <?php }?>
    </table>
</div>