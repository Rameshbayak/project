<?php
    if($_GET['openmodal'] == 1){ ?>
        <script>
                 $(function(){
                     $('#cekulang').modal('show');
                 });
        </script>
<?php         
    }
?>
success: function(data){
    window.location = window.location.href + "?openmodal=1";
}