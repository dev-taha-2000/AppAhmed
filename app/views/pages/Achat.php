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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profile.css">
    <title>[Les Achats]</title>
</head>
<body class="overflow-hidden"> 
    <div></div>
    <div class="row w-100">    
        <?php include_once 'aside.php'?>  
        <div class="col-10">   
            
            <div class="d-flex justify-content-between mt-2"> 
               <div>
                    <button onclick="insertAchat()" id="modaladd" class=" btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Register Achat 
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
                        Search par la Date
                        <svg  class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                        </svg> 
                    </button>     
               </div>       
                <div> 
                    <input  type="text" autocomplete='off' class="form-control border-3" id="search" placeholder="Search...">
                </div>     
            </div>
           
            <div class="collapse mt-1" id="collapseExample">
                <div class="card card-body">
                    <div> 
                        <div class="d-flex"> 
                            <h5>TOTAL HT : <?php echo $Calc['Mantant_HT']?>DH</h5> 
                        </div>
                        <div class="d-flex"> 
                            <h5>TVA : <?php echo ($Calc['Mantant_HT'])*(0.2)?>DH</h5> 
                        </div>
                        <div class="d-flex">
                            <h5>MONTANT TTC : <?php echo (($Calc['Mantant_HT'])*(0.2))+($Calc['Mantant_HT'])?>DH</h5> 
                        </div> 
                    </div> 
                </div>
            </div> 
            <div class="table-responsive"  id='fetch'>  

            </div>   
        </div>
    </div>  
    <?php include_once 'searchDate.php'?>  
    <?php include_once 'modalAchat.php'?>
    <input type="hidden" id="URLROOT" value="<?php echo URLROOT?>/Ashat/tableAchat"> 
    <input type="hidden" id="modifyAchat" value="<?php echo URLROOT;?>/Ashat/UpdateAchat">  
    <input type="hidden" id="deleteAchat" value="<?php echo URLROOT;?>/Ashat/deleteAchat"> 
    <input type="hidden" id="insetAchat" value="<?php echo URLROOT;?>/Ashat/insertAchat"> 
    <script src="<?php echo URLROOT; ?>/js/Achat.js"></script> 
    <script src="<?php echo URLROOT; ?>/js/crdAchat.js"></script>  
</body>  
</html>
