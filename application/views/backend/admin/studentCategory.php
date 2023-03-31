<style>
    body {
        background-color: #E5F7E8;
        margin: 0;
        padding: 0;
    }

    .row {
        margin: 50px auto;
        max-width: auto;
    }

    .panel {
        background-color: #FFFFFF;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .panel-heading {
        background-color: #4CAF50;
        color: #FFFFFF;
        font-weight: bold;
        padding: 15px;
    }

    .form-control {
        border: 1px solid #CCCCCC;
        border-radius: 3px;
        box-shadow: none;
        padding: 10px;
    }

    .form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 0 1px #4CAF50;
    }

    .btn-info {
        background-color: #4CAF50;
        border-color: #4CAF50;
        color: #FFFFFF;
    }

    .btn-info:hover {
        background-color: #3E8E41;
        border-color: #3E8E41;
    }

    table {
        background-color: #FFFFFF;
        border-collapse: collapse;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        width: 100%;
    }

    th {
        background-color: #4CAF50;
        color: #FFFFFF;
        font-weight: bold;
        padding: 15px;
        text-align: left;
    }

    td {
        border-bottom: 1px solid #CCCCCC;
        padding: 10px 15px;
    }

    .btn-circle {
        border-radius: 50%;
        padding: 6px 10px;
    }

    .btn-xs {
        font-size: 12px;
        padding: 3px 6px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('student_category'); ?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body table-responsive">

                        <!----CREATION FORM STARTS---->

                        <?php echo form_open(base_url() . 'studentcategory/studentCategory/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('name'); ?></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('description'); ?></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i>
                            class="fa fa-plus"></i>  <?php echo get_phrase('create'); ?></button>
</div>
<?php echo form_close(); ?>
<!----CREATION FORM ENDS-->
                            <!----CREATION FORM ENDS---->

</div>
</div>
</div>
</div>
<div class="col-sm-7">
<div class="panel panel-info">
<div class="panel-heading"><i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('student_category_list'); ?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

    <!----TABLE LISTING STARTS-->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><?php echo get_phrase('name'); ?></th>
                <th><?php echo get_phrase('description'); ?></th>
                <th><?php echo get_phrase('options'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $studentcategories = $this->db->get('student_category')->result_array();
            foreach ($studentcategories as $row) :
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td align="center">
                        <a href="#" class="btn btn-info btn-circle btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!----TABLE LISTING ENDS-->

</div>
</div>
</div>
</div>
</div>
