window.addEventListener("load",function(){






 var formFoodtruck = document.querySelector(".formFoodtruck");
 var nombre = document.querySelector("input[name = 'Contacto_Nombre']");
 var apellido = document.querySelector("input[name = 'Contacto_Apellidos']");
 var telefono = document.querySelector("input[name = 'Móvil']");
 var mail = document.querySelector("input[name = 'Email']");
 var plan1 = document.getElementById("control_COLUMN26_0");
 var plan2 = document.getElementById("control_COLUMN26_1");
 var radioButtons = document.querySelector(".radioButtons");


 var Nombre_error=document.getElementById("Nombre_error");
 var Apellido_error=document.getElementById("Apellido_error");
 var Mail_error=document.getElementById("Mail_error");
 var Movil_error=document.getElementById("Movil_error");
 var Plan_error=document.getElementById("Plan_error");


 if(formFoodtruck){

     formFoodtruck.addEventListener("submit",function(event){

               if(nombre.value === ""){

                  nombre.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
                  Nombre_error.innerHTML = "El campo es requerido.";
                  event.preventDefault();
               }
               if(apellido.value === ""){

                  apellido.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
                  Apellido_error.innerHTML = "El campo es requerido.";
                  event.preventDefault();
               }
               if(telefono.value === ""){

                  telefono.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
                  Movil_error.innerHTML = "El campo es requerido.";
                  event.preventDefault();
               }
               if(mail.value === ""){

                  mail.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
                  Mail_error.innerHTML = "El campo es requerido.";
                  event.preventDefault();
               }
               if (!plan1.checked  && !plan2.checked ) {

                  radioButtons.style.backgroundColor = "rgba(217, 83, 79, 0.4)";
                  Plan_error.innerHTML = "Debes seleccionar un plan.";

                  event.preventDefault();
               } else {
                 Plan_error.innerHTML = "";
                 radioButtons.style.backgroundColor = "";
               }


     });

 }

 nombre.addEventListener("blur",function(){

      if(nombre.value === ""){

        nombre.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
        Nombre_error.innerHTML = "El campo es requerido.";

      }else {
        nombre.style.backgroundColor = "";
        Nombre_error.innerHTML = "";
      }


 });

 apellido.addEventListener("blur", function(){

   if(apellido.value === ""){

     apellido.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
     Apellido_error.innerHTML = "El campo es requerido.";

   }else {
     apellido.style.backgroundColor ="" ;
     Apellido_error.innerHTML ="";
   }


 });
 mail.addEventListener("blur", function(){
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     if(mail.value === ""){

     mail.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
     Mail_error.innerHTML = "El campo es requerido.";

   }
     if (!re.test(String(mail.value).toLowerCase())) {
     mail.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
     Mail_error.innerHTML = "El campo debe ser de tipo email.";
   }
     else {
     mail.style.backgroundColor ="" ;
     Mail_error.innerHTML ="";
   }
 });

 telefono.addEventListener("blur",function(){

      var reNum = /[0-9]/;

      if(telefono.value === ""){

      telefono.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
      Movil_error.innerHTML = "El campo es requerido.";


    } if (!reNum.test(String(telefono.value).toLowerCase())){

       telefono.style.backgroundColor= "rgba(217, 83, 79, 0.4)";
       Movil_error.innerHTML = "El teléfono no es válido.";

     }

     else {
     telefono.style.backgroundColor ="" ;
     Movil_error.innerHTML ="";
   }

 });



plan1.addEventListener("change",function(){

  if (!plan1.checked ) {

     radioButtons.style.backgroundColor = "rgba(217, 83, 79, 0.4)";
     Plan_error.innerHTML = "Debes seleccionar un plan.";

     event.preventDefault();
  } else {
    Plan_error.innerHTML = "";
    radioButtons.style.backgroundColor = "";
  }


});
plan2.addEventListener("change",function(){

  if (!plan2.checked ) {

     radioButtons.style.backgroundColor = "rgba(217, 83, 79, 0.4)";
     Plan_error.innerHTML = "Debes seleccionar un plan.";

     event.preventDefault();
  } else {
    Plan_error.innerHTML = "";
    radioButtons.style.backgroundColor = "";
  }


});




})
