<table class="table mt-2 ">  
    <thead>
     <tr class="bg-primary">
        <th>ORDER</th>
        <th>FACT_NUM</th>
        <th>DESIGNATION</th>
        <th>M_HT</th>
        <th>TVA</th>
        <th>M_TTC</th>  
        <th>IF</th>
        <th>ICE_FRS</th>
        <th>LIB_FRSS</th>
        <th>TAUX</th>     
        <th>ID_PAIE</th>        
        <th>DATE_PAIE</th>        
        <th>DATE_FACT</th>         
        <th>OPTIONS</th>         
     </tr> 
    </thead>
    <?php foreach($Data as $value):?> 
    <tbody>    
        <tr>
            <td><?=$value['ORDER']?></td>
            <td><?=$value['FACT_NUM']?></td> 
            <td><?=$value['DESIGNATION']?></td>
            <td><?=$value['M_HT']?></td>
            <td><?=$value['TVA']?></td>
            <td><?=$value['M_TTC']?></td>  
            <td><?=$value['IF']?></td>
            <td><?=$value['ICE_FRS']?></td>
            <td><?=$value['LIB_FRSS']?></td>
            <td><?=$value['TAUX']?></td> 
            <td><?=$value['ID_PAIE']?></td>      
            <td><?=$value['DATE_PAIE']?></td>
            <td><?=$value['DATE_FACT']?></td> 
            <td>     
                <a onclick="Delete(<?php echo $id=$value['id_TVA']?>)">  
                    <svg class="ms-2 cursor-pointer " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="cursor:pointer;color:red">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>  
                </a> 
                <a onclick="update(<?= $value['id_TVA']?>,'<?=  $value['ORDER']?>','<?= $value['DESIGNATION'] ?>','<?= $value['FACT_NUM'] ?>','<?= $value['M_HT']?>','<?= $value['TVA'] ?>','<?= $value['M_TTC']?>','<?= $value['IF']?>','<?= $value['ICE_FRS']?>','<?= $value['LIB_FRSS']?>','<?= $value['TAUX']?>','<?= $value['ID_PAIE']?>','<?= $value['DATE_PAIE']?>','<?= $value['DATE_FACT']?>')"> 
                    <svg  class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor:pointer;color:green">
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    </svg> 
                </a> 
            </td> 
        </tr>
    </tbody>    
    <?php endforeach;?>  
</table> 

    <?php
        $totalPage=ceil($rowCount/11);  
    ?>
    <div class="d-flex mb-5 p-2" style="display:inline-block;margin-top:-20px"> 
       <?php for($i=1;$i<=$totalPage;$i++):?>
       <button class="pagination " style="border:2px;width:30px;" id="<?=$i?>"><?=$i?></button> 
       <?php endfor ;?> 
    </div> 