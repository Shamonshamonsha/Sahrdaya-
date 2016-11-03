<div class="row">
    <h3>Add Login</h3>
    <br>
    <form class="form-horizontal" method="post" action="<?=base_url()?>admin/login_action">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Officer Name:</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="email" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">User Name:</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="email" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Localbody type</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option>Corporation</option>
                    <option>Municipality</option>
                    <option>Panchayath</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Local Body name:</label>
            <div class="col-sm-10">
                <input type="text" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>