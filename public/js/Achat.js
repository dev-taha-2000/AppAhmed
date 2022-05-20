function load_data(Search=null){ 
    $.ajax({ 
        url:$('#URLROOT').val(), 
        method:'POST', 
        data:{Search:Search},   
        success:function(data){   
            $('#fetch').html(data); 
        }
    });             
} 
$(document).ready(function(){
    load_data(data=null);  
    $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'    
    });  
    
    $(function(){  
        $("#date").datepicker();  
    }); 

    $('#search').keyup(function(){  
       var search = $(this).val(); 
    if(search != ''){ 
       load_data(search); 
    }else{    
       load_data();  
    } 
    });      
});  