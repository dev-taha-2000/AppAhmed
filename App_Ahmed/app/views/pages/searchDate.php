<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center" id="staticBackdropLabel">recherché par la date</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <input type="text" name="from_date" id="from_date" autocomplete='off' class="form-control mt-3" placeholder="depuis la date" />  
        <input type="text" name="to_date" id="to_date"     autocomplete='off' class="form-control mt-4" placeholder="à la date" />  
      </div> 
      <div class="modal-footer">
        <button type="button" name="filter" class="btn btn-primary w-100" id="filterDate" data-bs-dismiss="modal">recherché</button> 
      </div>
    </div>
  </div> 
</div> 
<input type="hidden" id='searchDate' value="<?php echo URLROOT?>/Ashat/tableAchat"> 
<script src="<?php echo URLROOT; ?>/js/searDateAchat.js"></script>  
