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
$('#search').keyup(function(){  
    var search = $(this).val(); 
    load_data(search);  
});    
//:::::::::::::::::::controle page::::::::::::::::::::::::::::::  
load_table(); 
function load_table(page){  
    
    $.ajax({ 
        url:$('#URLROOT').val(),  
        method:'POST', 
        data:{page:page},    
        success:function(data){   
            $('#fetch').html(data);
        } 
    });             
}   
$(document).ready(function(){ 
   
    $(document).on('click','.pagination',function(){
        var page=$(this).attr("id"); 
        load_table(page) 
    });   
    $.datepicker.setDefaults({  
        dateFormat: 'dd-mm-yy'    
    });  
    
    $(function(){  
        $("#date").datepicker();  
    }); 
  
});  
