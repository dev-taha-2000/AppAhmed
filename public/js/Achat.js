function load_data(Search){   
    
    $.ajax({ 
        url:'http://localhost/AppAhmed/Achat/tableAchat', 
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
        url:'http://localhost/AppAhmed/Achat/tableAchat',  
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
        dateFormat: 'yy-mm-dd'    
    });  
    
    $(function(){  
        $("#date").datepicker();  
    }); 
  
});  
