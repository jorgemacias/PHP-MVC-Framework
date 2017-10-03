function AjaxSend(form, url, fnOk, fnError){
    var data = new FormData();
    $(form).find('input:not("button"), select, textarea').each(function(){
        var val = null;
        var name = null;
        if($(this).is(':file')){
            var inputFileImage = document.getElementById($(this).attr('id'));
            val = (inputFileImage?inputFileImage.files[0]:null);   
            name = $(this).attr('name');
        }else if($(this).is(':radio') || $(this).is(':checkbox')){
            if($(this).is(':checked')){
                val = $(this).val();
                name = $(this).attr('name');
            }
        }else{ 
            val = $(this).val();
            name = $(this).attr('name');
        }
        if(name) data.append(name, val);
    });
    $.ajax({
         url: url,
         type:'POST',
         contentType:false,
         data: data,
         processData:false,
         cache:false, 
         success: function(msg){
             if(msg){
                 if(fnError)
                     fnError(msg);
                 else{
                    alert(msg);
                 }
             }else{
                 fnOk(msg);
             }
         }
    });
}