<?function Style($context){?>
<style type="text/css">
   #myform {margin: 30px auto;}
</style>
<?}?>

<?function Script($context){?>
<script type ="text/javascript">
    $(function(){
        $('#SendAjaxButton').click(function(){
           AjaxSend($('#myform'), '#', null, function(data){
               $('#myform').find('div.alert').remove();
               var results = $("<div class = 'alert alert-danger'><h3>Here are the results!</h3></div>");
               $('#myform').append(results);
               $(results).append(data);
           });
        });
    });
</script>
<?}?>

<?function Body($context){?>
   
<form id="myform" class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Fill the form and then send it all by Ajax!</h3></div>
    <div class="panel-body">
        <div class="form-group-lg">
            <label>Input text type</label>
            <input type="text" class="form-control" name ="text" placeholder="Some text">
        </div>
        <div class="form-group-lg">
            <label>Select type</label>
            <select class="form-control" name ="select">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group-lg">
            <label>Textarea type</label>
            <textarea class="form-control" name ="textarea" placeholder="More text"></textarea>
        </div>
         <div class="form-group-lg">
            <label>Input radio type</label>
            <input type="radio" name="radio" value="1">
            <input type="radio" name="radio" value="0">
        </div>
        <div class="form-group-lg">
            <label>Input checkbox type</label>
            <input type="checkbox" name="check" value="1">
        </div>
        <div class="form-group-lg">
            <label>File type</label>
            <input type="file" id ="myfile" name ="file">
        </div>
    </div>
    <p><input type="button" class="btn btn-danger btn-lg" id ="SendAjaxButton" value="Send form by Ajax"></p>
</form>

<?}?>

