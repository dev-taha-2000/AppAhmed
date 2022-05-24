
$(document).ready(function(){  
        $.datepicker.setDefaults({  
            dateFormat:'yy-mm-dd'    
        });  
        $(function(){ 
            $("#from_date").datepicker();  
            $("#to_date").datepicker();  
        }); 
    $(document).ready(function(){
        $.ajax({  
            url:$('#SUM').val(),  
            method:"POST",       
            success:function(data)  
            {  
              $('#tmm').html(data);    
            }   
        }); 
    });
        $('#filterDate').click(function(){    
            var from_date = $('#from_date').val();   
            var to_date = $('#to_date').val();
            var frsR = $('#frsR').val();   
            var ChantierR = $('#ChantierR').val();  
                $.ajax({  
                    url:$('#SUM').val(),  
                    method:"POST",  
                    data:{from_date:from_date,to_date:to_date,frsR:frsR,ChantierR:ChantierR},     
                    success:function(data)  
                    {  
                      $('#tmm').html(data);    
                    }   
                }); 

                $.ajax({  
                    url:$('#searchDate').val(),  
                    method:"POST",  
                    data:{from_date:from_date,to_date:to_date,frsR:frsR,ChantierR:ChantierR},     
                    success:function(data)  
                    {  
                      $('#fetch').html(data);    
                    }  
                });   
               
        });            
});  