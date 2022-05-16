<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profile.css">
    <title>[Les Achats]</title>
</head>
<body class="overflow-hidden"> 
    <div></div>
    <div class="row w-100">    
        <?php include_once 'aside.php'?>  
        <div class="col-10">   
            
            <div class="d-flex justify-content-between mt-3">
               <div>
                    <button onclick="insertAchat()" class=" btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Achat 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus-fill mb-1" viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
                        </svg> 
                    </button>   
                    <button class="btn btn-primary ms-3 " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Resultat
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill mb-1" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </button>   
                    <button class="btn btn-primary ms-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        SEARCH
                        <svg  class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                        </svg> 
                    </button>     
               </div>       
                <div> 
                    <input  type="text" class="form-control border-3" id="search" placeholder="Search...">
                </div>     
            </div>
           
            <div class="collapse mt-2" id="collapseExample">
                <div class="card card-body">
                    <div class="d-flex"> 
                        <h4>TOTAL HT : <?php echo $Calc['Mantant_HT']?>DH</h4> 
                    </div>
                    <div class="d-flex"> 
                        <h4>TVA : <?php echo ($Calc['Mantant_HT'])*(0.2)?></h4> 
                    </div>
                    <div class="d-flex">
                        <h4>MONTANT TTC:</h4> 
                        <h4>VSV534534B</h4> 
                    </div> 
                </div>
            </div> 
            <div class="table-responsive"  id='fetch'>
               
            </div>   
        </div>
    </div>  

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog"> 
        <form id="form_edit" action="<?php echo URLROOT;?>/Ashat/insertAchat" method="post">  
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
                <div class="modal-body">  
                    <input type="hidden"         name="id_Achat"  id="id_Achat"> 
                    <input type="text" placeholder="date"         id="date"             name="date"        class="w-100 form-control mt-2"  required>
                    <input type="text" placeholder="Designation"  id="Designation"      name="Designation" class="w-100 form-control mt-2"  required> 
                    <div class="input-group mt-2 w-100"> 
                     <select name="Type" class="form-select"      id="Type"             aria-label="Default select example">
                        <option selected>TYPE</option>
                        <option value="U">U</option>
                        <option value="ML">ML</option>
                        <option value="ENS">ENS</option> 
                     </select>
                    </div> 
                    <input type="text" placeholder="Fas"           id="Fas"              name="Fas"           class="w-100 form-control mt-2" required> 
                    <input type="text" placeholder="Quantité"      id="Quantité"         name="Quantité"      class="w-100 form-control mt-2" required>
                    <input type="text" placeholder="prix Unitaire" id="prix_Unitaire"    name="prix_Unitaire" class="w-100 form-control mt-2" required> 
                    <input type="text" placeholder=" Mantant HT"   id="Mantant_HT"       name="Mantant_HT"    class="w-100 form-control mt-2" required>
                    <input type="text" placeholder="Chantier"      id="Chantier"         name="Chantier"      class="w-100 form-control mt-2" required>  
                </div>   
                <div class="modal-footer">   
                    <input  type="submit" value="save"  id="save" class="btn btn-primary w-100">
                </div>
              </div>  
        </form>        
        </div>        
    </div> 
    <?php include_once 'searchDate.php'?> 
</body>  
</html>
<script> 
$(document).ready(function(){
    load_data();
    $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'    
    });  
    $(function(){  
        $("#date").datepicker();  
    });
    function load_data(query){ 
        $.ajax({ 
            url:"<?php echo URLROOT?>/Ashat/ajax", 
            method:"POST",
            data:{query:query},
        success:function(data){ 
          $('#fetch').html(data);
        }
        }); 
    }  
    $('#search').keyup(function(){  
       var search = $(this).val();
    if(search != ''){ 
       load_data(search); 
    }else{    
       load_data();  
    }
    });    
});  


document.getElementById("image").onchange = function(){
    document.getElementById("form").submit();   
    };   
    function DeleteAchat(id_Achat){    
    if(window.confirm('Voulez-vous vraiment supprimer ?')) 
    {
      window.location.href = "Ashat/DeleteAchat/?id_Achat="+id_Achat;        
    }    
}    
function insertAchat(){
    document.getElementById('date').value="";  
    document.getElementById('Designation').value="";
    document.getElementById('Type').value="TYPE"; 
    document.getElementById('Fas').value="";
    document.getElementById('Quantité').value="";
    document.getElementById('prix_Unitaire').value="";
    document.getElementById('Mantant_HT').value="";
    document.getElementById('Chantier').value="";  
}  
function UpdateAchat(id_Achat,date,designation,Type,Fas,Quantité,prix_Unitaire,Mantant_HT,Chantie){
    document.getElementById('id_Achat').value=id_Achat;
    document.getElementById('date').value=date; 
    document.getElementById('Designation').value=designation; 
    document.getElementById('Type').value=Type;
    document.getElementById('Fas').value=Fas;
    document.getElementById('Quantité').value=Quantité;
    document.getElementById('prix_Unitaire').value=prix_Unitaire;
    document.getElementById('Mantant_HT').value=Mantant_HT;
    document.getElementById('Chantier').value=Chantie; 
    document.getElementById('form_edit').action="<?php echo URLROOT;?>/Ashat/UpdateAchat";
}    
</script> 
