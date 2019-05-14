    <!-- Footer -->
    <footer class="py-5" style="background: #1a5276;">
      <div class="container">
        <p class="m-0 text-center text-white">COCOSOURCE &copy;2019, Todos los Derechos Reservados</p>
      </div>
    </footer>
    
    

    <!-- Bootstrap core JavaScript -->
   	<script src="<?php echo base_url() ?>assets/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script>
      $(function() {
      var menues = $(".navbar li"); 
      menues.click(function() {
         menues.removeClass("active");
         $(this).addClass("active");
      });
    
    });
		
    //Ocultamos todos los div al iniciar
$(".Elementos").hide();
$("#Lista1").show();

$(".ElementosLista").on("click",function(){
  $(".Elementos").hide();
  $("#Lista"+ $(this).attr("id")).show();
});

$(function(){

  $('.list-group-item').click(function(){
    $('.list-group-item.active').removeClass('active');
    $(this).addClass('active');
 
  });

});
    </script>

  </body>

</html>


