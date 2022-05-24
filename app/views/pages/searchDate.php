<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <h4 class="modal-title text-center" id="staticBackdropLabel">recherché</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <div>
          <input type="text" name="from_date" id="from_date" autocomplete='off' class="form-control mt-2" placeholder="depuis la date 2022/01/05" /> 
          <input type="text" name="to_date" id="to_date"     autocomplete='off' class="form-control mt-3" placeholder="à la date 2022/02/07" />   
        </div>   
        <div id='precise'> 
          <input type="text"  id="frsR" autocomplete='off' class="form-control mt-2" placeholder="FRS" /> 
          <input type="text"  id="ChantierR" autocomplete='off' class="form-control mt-2" placeholder="Chantier" /> 
        </div> 
        <div class="text-center" id="sélectionner">  
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16" style='cursor:pointer' >
            <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
          </svg>
        </div>
      <div class="modal-footer">
        <button type="button" name="filter" class="btn btn-primary w-100" id="filterDate" data-bs-dismiss="modal">recherché</button> 
      </div>
    </div>
  </div> 
</div> 
<input type="hidden" id='searchDate' value="<?php echo URLROOT?>/Ashat/tableAchat"> 
<input type="hidden" id='SUM' value="<?php echo URLROOT?>/Ashat/SUM"> 
<script src="<?php echo URLROOT; ?>/js/searDateAchat.js"></script>    
<script> 
  $('#precise').css('display','none'); 
  $('#sélectionner').click(function(){ 
    $('#precise').css('display','block');
  });
  $('#sélectionner').dblclick(function(){  
    $('#precise').css('display','none');   
  });   
</script>