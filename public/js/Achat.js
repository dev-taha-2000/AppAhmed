load_table();
function load_data(Search){  
    
    $.ajax({ 
        url:$('#URLROOT').val(), 
        method:'POST', 
        data:{Search:Search},    
        success:function(data){   
            $('#fetch').html(data);
            console.log('table'); 
        }
    });             
}   
function load_table(page){  
    
    $.ajax({ 
        url:$('#URLROOT').val(), 
        method:'POST', 
        data:{page:page},    
        success:function(data){   
            $('#fetch').html(data);
            console.log('table'); 
        }
    });             
}   
$(document).ready(function(){ 
   
    $(document).on('click','.pagination',function(){
        var page=$(this).attr("id"); 
       load_table(page) 
    }); 
    
    $('#search').keyup(function(){  
       var search = $(this).val(); 
       load_data(search);  
    });     
    $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'    
    });  
    
    $(function(){  
        $("#date").datepicker();  
    }); 
  
});  
