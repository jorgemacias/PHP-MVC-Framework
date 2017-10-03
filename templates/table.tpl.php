<?function Style($context){?>
<style type="text/css">
   #mydiv {margin-top: 30px;}
</style>
<?}?>

<?function Script($context){?>
<script type ="text/javascript">
    $(function(){
        $('#NewRowButton').click(function(){
            var row = $('#mytable').find('tr').last().clone();
            $('#mytable').append(row);
            $(row).find('td').text( $('#mytable tr').length - 1 );
        });
        
        $('#NewColumnButton').click(function(){
            $('#mytable tr').each(function(){
               var col = $(this).find('td:visible:last').clone();
               $(this).append(col);
            });
        });
        
        $('#ShowAllButton').click(function(){
            $('#mytable td').show();
        });
        
        $('#mytable').on('click', 'input.btn-hide', function(){
           var index = $(this).index('.btn-hide');
           $('#mytable tr').each(function(){
              $(this).find('td').eq(index).hide(); 
           });
        });
    });
</script>
<?}?>

<?function Body($context){?>
<div id ="mydiv" class="col-md-6 col-md-offset-3">
    <h3>Play with the table</h3>
    <p>
        <input type="button" class="btn btn-info" id ="NewRowButton" value="New Row">
        <input type="button" class="btn btn-primary" id ="NewColumnButton" value="New Column">
        <input type="button" class="btn btn-warning" id ="ShowAllButton" value="Show All">
    </p>
    <table class="table table-striped table-hover" id ="mytable">
        <tr>
            <td><input type="button" class="btn btn-sm btn-danger btn-hide" value="Hide"></td>
            <td><input type="button" class="btn btn-sm btn-danger btn-hide" value="Hide"></td>
            <td><input type="button" class="btn btn-sm btn-danger btn-hide" value="Hide"></td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td>3</td>
        </tr>
    </table>
</div>
<?}?>

