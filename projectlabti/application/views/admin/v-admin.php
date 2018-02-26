<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="assets/img/logo_icon.ico">
    <title>Mangan.co</title>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha256-yMjaV542P+q1RnH6XByCPDfUFhmOafWbeLPmqKh11zo=" crossorigin="anonymous" />
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php base_url(); ?>home">Mangan.co</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hallo, <?php echo $this->session->userdata("nama"); ?></a></li>
                <li><a href="<?php echo base_url('login/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
        </div>
    </nav>
    
	<h1 align="center">Dashboard Admin</h1>

<div class="container">
        <h3>Data Makanan</h3>
        <button class="btn btn-info" onclick="add_food()"><i class="glyphicon glyphicon-plus"></i> Tambah Makanan</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nama Makanan</th>
                    <th>Range Harga</th>
                    <th>Rating</th>
                    <th>Detail</th>
                    <th>Bahan</th>
                    <th>Cara Buat</th>
                    <th>Photo</th>
                    <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>Nama Makanan</th>
                <th>Range Harga</th>
                <th>Rating</th>
                <th>Detail</th>
                <th>Bahan</th>
                <th>Cara Buat</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -2 ], //2 last column (photo)
                "orderable": false, //set not orderable
            },
        ],

    });


    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});



function add_food()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Makanan'); // Set Title to Bootstrap modal title

    $('#photo-preview').hide(); // hide photo preview modal

    $('#label-photo').text('Upload Photo'); // label photo upload
}

function edit_food(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('admin/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="name_food"]').val(data.name_food);
            $('[name="range_h"]').val(data.range_h);
            $('[name="rating"]').val(data.rating);
            $('[name="detail"]').val(data.detail);
            $('[name="bahan"]').val(data.bahan);
            $('[name="c_buat"]').val(data.c_buat);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Makanan'); // Set title to Bootstrap modal title

            $('#photo-preview').show(); // show photo preview modal

            if(data.pic_food)
            {
                $('#label-photo').text('Change Photo'); // label photo upload
                $('#photo-preview div').html('<img src="'+base_url+'upload/'+data.pic_food+'" class="img-responsive">'); // show photo
                $('#photo-preview div').append('<input type="checkbox" name="remove_photo" value="'+data.pic_food+'"/> Remove photo when saving'); // remove photo

            }
            else
            {
                $('#label-photo').text('Upload Photo'); // label photo upload
                $('#photo-preview div').text('(No photo)');
            }


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('admin/ajax_add')?>";

    } else {
        url = "<?php echo site_url('admin/ajax_update')?>";
    }

    // ajax adding data to database

    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_food(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('admin/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>


<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Food</h3>
            </div>
            <div class="modal-body form">
                <h5 style="text-align: center; font-size: 15pt"><?php echo $this->session->flashdata('msg'); ?></h5>
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Name Makanan</label>
                            <div class="col-md-9">
                                <input name="name_food" placeholder="Nama Makanan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Range Harga</label>
                            <div class="col-md-9">
                                <input name="range_h" placeholder="Range Harga" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Rating</label>
                            <div class="col-md-9">
                                <input name="rating" placeholder="Rating (0/10)" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Detail</label>
                            <div class="col-md-9">
                                <input name="detail" placeholder="Detail" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bahan</label>
                            <div class="col-md-9">
                                <input name="bahan" placeholder="Bahan" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Cara Pembuatan</label>
                            <div class="col-md-9">
                                <input name="c_buat" placeholder="Cara Pembuatan" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group" id="photo-preview">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-9">
                                (No photo)
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label-photo">Upload Photo </label>
                            <div class="col-md-9">
                                <input name="pic_food" type="file">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
</body>
</html>