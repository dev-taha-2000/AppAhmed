$(document).ready(function(){
    function  autocomplete(){
        var chantier=$('#Chantier').val();
        var frs=$('#frs').val();
        var designation=$('#Designation').val();
        if(chantier != ''){ 
            $('#dropChantier').css('display','block') 
            $.ajax({
                url:$('#autoCompleteChantier').val(),
                method:'POST',
                data:{chantier:chantier},
                success:function(data){
                    $('#dropChantier').html(data); 
                }
            }); 
        }else{ 
            $('#dropChantier').css('display','none') 
        }   
        if(frs != ''){ 
            $('#dropfrs').css('display','block') 
            $.ajax({
                url:$('#autoCompleteFrs').val(), 
                method:'POST',
                data:{frs:frs},
                success:function(data){
                    $('#dropfrs').html(data); 
                }
            }); 
        }else{ 
            $('#dropfrs').css('display','none') 
        }   
        if(designation != ''){ 
            $('#dropDesignation').css('display','block') 
            $.ajax({
                url:$('#autoCompleteDesignation').val(),
                method:'POST',
                data:{designation:designation},
                success:function(data){
                    $('#dropDesignation').html(data); 
                }
            }); 
        }else{ 
            $('#dropDesignation').css('display','none') 
        }   
    }                                         
    $('#Chantier').on('input',autocomplete); 
    $('#frs').on('input',autocomplete); 
    $('#Designation').on('input',autocomplete); 
});