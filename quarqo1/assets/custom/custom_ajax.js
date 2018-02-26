var save_method; //for save method string
var base_url = '<?php echo base_url();?>';

	$(document).ready(function() {

		// Input Tanggal
		$('.datepicker').datepicker({
			autoclose: true,
			format: "yyyy-mm-dd",
			orientation: "bottom auto",
			todayBtn: true,
			todayHighlight: true,  
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
	
	// Biografi modal
    function biografi_modal()
    {
      save_method = 'add';
      $('#biografi_form')[0].reset();
      $('#biografi_modal').modal('show');
	  $('.form-group').removeClass('has-error'); // clear error class
	  $('.help-block').empty();
    //$('.modal-title').text('Add Person'); // judul modal
    }
	
	// Pendidikan modal
    function pendidikan_modal()
    {
      save_method = 'add';
      $('#pendidikan_form')[0].reset();
      $('#pendidikan_modal').modal('show');
	  $('.help-block').empty(); // clear error string
    //$('.modal-title').text('Add Person'); // judul modal
    }
	
	function edit_data(id) {
      save_method = 'update';
      $('#biografi_form')[0].reset();

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('profile/read')?>/" + id, // Read method
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="biografi_textarea"]').val(data.biografi);


            $('#biografi_modal').modal('show');
            //$('.modal-title').text('Edit bio'); // judul modal

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	function save_data() {
	$('#btnSave').text('Menyimpan...');
    $('#btnSave').attr('disabled',true);
      var url;
      if(save_method == 'add') {
		url = "<?php echo site_url('profile/create')?>"; // Create method
      }
      else {
        url = "<?php echo site_url('profile/update')?>"; // Update method
      }
          $.ajax({
            url : url,
            type: "POST",
            data: $('#biografi_form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               $('#biografi_modal').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / Update data');
            }
        });
    }
