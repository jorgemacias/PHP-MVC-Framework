<?function Style($context){?>
<style type="text/css">
   form {margin: 30px auto;}
</style>
<?}?>

<?function Script($context){?>
<script type ="text/javascript">
    $(function(){
        
    });
</script>
<?}?>

<?function Body($context){?>
    
    <div class="form-group-lg">
        <form action="#" method="post">
        <label>Hello! Here you can enter some text to see it in return by POST method</label>
        <textarea class="form-control" name ="sometext"></textarea>
        <p><button class="btn btn-success btn-lg" type="submit">OK!</button></p> 
        </form>
    </div>
    

    <?if($context->text){?>
    <div class="alert alert-success alert-dismissable">
        <h2>Here is your text!</h2>
        <p><?=$context->text?></p>
    </div>
    <?}?>

<?}?>

