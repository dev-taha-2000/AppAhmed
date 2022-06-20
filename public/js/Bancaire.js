  function FillTr(clas,id,tr,tbody){
    var td=document.createElement('td');
    var input=document.createElement('input'); 
    input.setAttribute('type',"text");
    input.setAttribute('id',id);
    input.setAttribute('class',clas);  
    td.appendChild(input);
    tr.appendChild(td);
    tbody.appendChild(tr);
  }
  function AjouterLigne(){
    var tbody=document.getElementById('tbody');
    var tr=document.createElement('tr');
    FillTr("w-100 text-center","compta_date",tr,tbody);  
    FillTr("w-100 text-center","compta_libelle",tr,tbody);
    FillTr("w-100 text-center","compta_debit",tr,tbody); 
    FillTr("w-100 text-center","compta_credit",tr,tbody);  
    FillTr("w-100 text-center","banque_date",tr,tbody); 
    FillTr("w-100 text-center","banque_libelle",tr,tbody); 
    FillTr("w-100 text-center","banque_debit",tr,tbody);
    FillTr("w-100 text-center","banque_credit",tr,tbody);  
  } 
  $.datepicker.setDefaults({  
    dateFormat: 'yy-mm-dd'    
  });   

  $(function(){  
    $("#compta_date").datepicker();  
    $("#Date_compta").datepicker();  
    $("#Date_banque").datepicker();  
    $("#banque_date").datepicker();  
  });    
  var plus=document.getElementById('plus');
  plus.addEventListener('click',AjouterLigne);

  
         
                                                       
  