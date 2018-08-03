<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>



<form action="" method="post">

<div class='input-group date'>

  <input type='text' name="datetime" class="form-control datetimepicker" />

  <span class="input-group-addon datetimepicker-addon">

    <span class="glyphicon glyphicon-calendar"></span>

  </span>

</div>

<input type="submit" name="send"/>

</form>



<?

    if(isset($_POST["send"])) {

            echo $_POST["datetime"];
            echo $_POST["datetime"];
            echo "oldu her sey";
            echo "Deyesen olmadi hesne ama baxmaq lazimdir.";
            echo "Sanki indi daha dogru oldu";
            echo "Mecburi sekilde burda yene deywiklikler eledim.";
    }

?>



<script>

    $(function() {

      $('.datetimepicker').datetimepicker({ format: 'DD.MM.YYYY HH:mm' });



      $('.datetimepicker-addon').on('click', function() {

            $(this).prev('input.datetimepicker').data('DateTimePicker').toggle();

      });

    });

</script>

