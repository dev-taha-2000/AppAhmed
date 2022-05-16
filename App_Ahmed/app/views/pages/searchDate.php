<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="from_date" id="from_date" class="form-control mb-2" placeholder="From Date" />  
        <input type="text" name="to_date" id="to_date"     class="form-control" placeholder="To Date" />  
      </div> 
      <div class="modal-footer">
        <button type="button" name="filter" class="btn btn-info w-100" id="filter" data-bs-dismiss="modal">Filter</button> 
      </div>
    </div>
  </div> 
</div>
<script>
$(document).ready(function(){  
    $.datepicker.setDefaults({  
        dateFormat:'yy-mm-dd'    
    });  
    $(function(){ 
        $("#from_date").datepicker();  
        $("#to_date").datepicker();  
    });
    $('#filter').click(function(){   
        var from_date = $('#from_date').val();  
        var to_date = $('#to_date').val(); 
        if(from_date != '' && to_date != '')  
        {  
            $.ajax({  
                url:"<?php echo URLROOT?>/Ashat/ajax",  
                method:"POST",  
                data:{from_date:from_date, to_date:to_date},  
                success:function(data)  
                {  
                    $('#fetch').html(data);  
                }  
            });  
        }  
        else  
        {  
            alert("Please Select Date");  
        }  
    });  
});  
</script>