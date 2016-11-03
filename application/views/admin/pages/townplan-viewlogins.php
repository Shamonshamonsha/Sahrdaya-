<div class="row">
    <h3>View District  Planning officer logins</h3>
    <br>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Officer Name</th>
            <th>Username</th>
        </tr>
        <?php foreach($tp_distplanners as $key=>$value){ ?>
        <tr>
            <td><?=($key+1)?></td>
            <td><?=$value->name ?></td>
            <td><?=$value->username ?></td>
            <?php }?>
    </table>
</div>