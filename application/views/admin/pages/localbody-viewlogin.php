<div class="row">
    <h3>View logins</h3>
    <br>
    <table class="table">
        <tr>
            <td>#</td>
            <th>Officer Name</th>
            <th>Username</th>
            <th>Usertype</th>
        </tr>
        <?php foreach($localbody_users as $key=>$value){ ?>
        <tr>
            <td><?=($key+1)?></td>
            <td><?=$value->name ?></td>
            <td><?=$value->username ?></td>
            <td><?=$value->localbody_usertype?></td>
            <?php }?>
    </table>
</div>