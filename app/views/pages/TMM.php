<div class="row bg-light">
    <div class="col-4 text-center border border-2">
        <h5>TOTAL HT</h5>
        <?php
        echo $mantant_ht=$SUM[0]['total_HT'] ;
        ?>   
    </div> 
    <div class="col-4 text-center border border-2">
        <h5>TVA</h5>
        <?php
        echo $TVA=($mantant_ht)*0.2 ;  
        ?> 
    </div>
    <div class="col-4 text-center border border-2">
        <h5>MANTANT TTC</h5>
        <?php
         echo $mantant_ttc=$TVA+$mantant_ht;
        ?>
    </div>
</div>  