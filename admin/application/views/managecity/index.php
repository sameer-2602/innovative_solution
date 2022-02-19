
<div class="container">
<div class="row-fluid">
    <div class="span9">
        
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"><h3>CITY DETAILS</h3></div>
                <div class="" style="padding-left: 1000px;">
                    <a href="<?= base_url(); ?>managecity/add" class="btn btn-success">Add</a>
                </div>
            </div>
            <div class="block-content collapse in">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>City_id</th>
                            <th>City_name</th>
                            <th>State_name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $val): ?>
                        <tr>
                            <td><?=$val['cid'];?></td>
                            <td><?=$val['cname'];?></td>
                            <td><?=$val['sname'];?></td>
                            <td>
                                <a href="<?=base_url()?>managecity/edit/<?=$val['cid']?>" class="btn  btn-warning">Edit</a>
                                <a href="<?=base_url()?>managecity/delete/<?=$val['cid']?>" class="btn btn-danger">Delete</a>
                            </td>  
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /block -->
    </div>

    <!-- block -->

</div>
</div>
