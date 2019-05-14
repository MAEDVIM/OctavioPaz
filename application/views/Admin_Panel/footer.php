

</main> <!-- .cd-main-content -->
<script src="<?php echo base_url() ?>assets/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.menu-aim.js"></script>
<script src="<?php echo base_url().'assets/jquery-ui/jquery-ui.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/main.js"></script> <!-- Resource jQuery -->

<script>
      $(function() {
      var menues = $(".cd-side-nav li"); 
      menues.click(function() {
         menues.removeClass("active");
         $(this).addClass("active");
      });
		  
    });
    
    $(document).ready(function() {

        $('select[name="eCodEstado"]').on('change', function() {
            var eCodEstado = $(this).val();
            if(eCodEstado) {
                $.ajax({
                    url: '/myform/ajax/'+eCodEstado,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="eCodMunicipio"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="eCodMunicipio"]').append('<option value="'+ value.eCodMunicipio +'">'+ value.tNombre +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="eCodMunicipio"]').empty();
            }
        });
		
		$("#GetOperador").click(function() {
            var eCodOperador = $(this).val();
            if(eCodOperador) {
                $.ajax({
                    url: '/myform/ajax/'+eCodOperador,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="eCodMunicipio"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="eCodMunicipio"]').append('<option value="'+ value.eCodMunicipio +'">'+ value.tNombre +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="eCodMunicipio"]').empty();
            }
        });
		
		$( "#title" ).autocomplete({
              source: "<?php echo site_url('Admin_Panel/EmpresaAuto/?');?>"
            });

    });
	
	$(".Elementos").hide();
	$("#Lista1").show();

	$(".ElementosLista").on("click",function(){
	  $(".Elementos").hide();
	  $("#Lista"+ $(this).attr("id")).show();
	});
	
    </script>


</body>
</html>