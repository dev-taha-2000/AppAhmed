<table class="table mt-3">
    <thead class="bg-primary">
        <tr>
            <th>Date</th> 
            <th>Nome</th>
            <th>Date d'absence</th> 
            <th>La durée</th>
            <th>Justification</th>  
            <th>Options</th>  
        </tr>
    </thead>  
    <tbody>
        <?php foreach($Data as $value):?>
        <tr>
           <td><?=$value['date_saisie']?></td> 
           <td><?=$value['nom']?></td>
           <td><?=$value['date']?></td>
           <td><?=$value['durée']?></td> 
           <td><?=$value['justification']?></td>
           <td>  
               <a onclick="Delete(<?= $value['id_persone']?>)"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill ms-1" viewBox="0 0 16 16" style="cursor:pointer">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg>
               </a> 
               <a onclick="fill(<?=$value['id_persone']?>,'<?=$value['date_saisie']?>','<?=$value['nom']?>','<?=$value['date']?>','<?=$value['durée']?>','<?=$value['justification']?>')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill ms-2" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
               </a>
           </td>
        </tr>
        <?php endforeach;?>
    </tbody>

</table>
    <?php   
    $totalPage=ceil($rowCount/12);  
    ?>
    <div class="d-flex mb-5 p-2" style="display:inline-block;margin-top:-20px"> 
       <?php for($i=1;$i<=$totalPage;$i++):?>
       <button class="pagination" id="<?=$i?>" style="border:2px;width:30px;"><?=$i?></button>
       <?php endfor ;?>
    </div>     