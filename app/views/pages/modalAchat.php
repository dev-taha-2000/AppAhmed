   <div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">  
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">enregistré acha</h5> 
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
                  <div class="modal-body">  
                    <input type="hidden"         name="id_Achat"    id="id_Achat"> 
                    <input type="text" placeholder="date"         autocomplete='off' id="date"             name="date"        class="w-100 form-control mt-2"  required>
                    <input type="text" placeholder="Designation"  autocomplete='off' id="Designation"  list='dropDesignation'    name="Designation" class="w-100 form-control mt-2"  required> 
                    <div class="input-group mt-2 w-100"> 
                     <select name="Type" class="form-select"      autocomplete='off' id="Type"             aria-label="Default select example">
                        <option selected>TYPE</option>
                        <option value="U">U</option>
                        <option value="ML">ML</option>
                        <option value="ENS">ENS</option> 
                     </select>
                    </div>  
                    <input type="text" placeholder="FRS"           autocomplete='off' id="frs"         list='dropfrs'     name="Frs"           class="w-100 form-control mt-2" required> 
                    <datalist  id="dropfrs" class='position-absolute'> </datalist>  
                    <input type="text" placeholder="Quantité"      autocomplete='off' id="Quantité"         name="Quantité"      class="w-100 form-control mt-2" required>
                    <input type="text" placeholder="prix Unitaire" autocomplete='off' id="prix_Unitaire"    name="prix_Unitaire" class="w-100 form-control mt-2" required> 
                    <input type="text" placeholder=" Mantant HT"   autocomplete='off' id="Mantant_HT"       name="Mantant_HT"    class="w-100 form-control mt-2" required>
                    <input type="text" placeholder="Chantier"      autocomplete='off' id="Chantier"         name="Chantier"      class="w-100 form-control mt-2  chantier" required> 
                        <datalist  id="dropChantier" class='position-absolute'> </datalist>   
                </div>   
                <div class="modal-footer" id="modal_footer">   
                    <input   type="btn" value="SAVE" id='addAchat' class="btn btn-primary w-100" data-bs-dismiss="modal">
                </div> 
        </div>     
    </div> 
        <input type="hidden" id='autoCompleteChantier'    value='<?php echo URLROOT?>/Ashat/autoCompletChantier'>       
        <input type="hidden" id='autoCompleteFrs'         value='<?php echo URLROOT?>/Ashat/autoCompleteFrs'>       
        <input type="hidden" id='autoCompleteDesignation' value='<?php echo URLROOT?>/Ashat/autoCompleteDesignation'>       
        <script src="<?php echo URLROOT; ?>/js/Achatautocomplete.js"></script>  