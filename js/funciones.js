jQuery(document).ready(function ($){
var alto_documento = $(document).height();
//var alto_documento = $(document).height();
//var ancho_documento = $(document).width();
//$("#general").css("height",alto_documento);
//$("#contenedor-general").css("width",ancho_documento);
 $("#modal").delay(600).fadeIn("slow").css("height",alto_documento); // fadeIn(234234324 milisegundos)
     // para que un fadein funcione debe estar oculto en el css
     $("#mensaje a").click(function(){ 
     $("#modal").fadeOut("slow");
     });

	$("#boton").click(function(){
    		$("#form").valid();
			$("#form").submit();
  		 });
	
	
		$("#form").validate({
			submitHandler: function(form) {
     	//	alert("Formulario fue enviado!");
     	$.ajax({
					url: "php/validate.php", 
					data: $("#form").serialize(),
					type: "POST",
					beforeSend: function(data){ //antes de enviar, hagamos esto:
						$("#form").hide(); //oculta el form
						$("#cargando").show(); //mostramos nuestro gif "cargando"
					},
					success: function(data){ // despues de enviar
						$("#cargando").hide(); // oculta mi gif "cargando"
						$("#respuesta").show(); // muestra la respuesta
					}
				});
		   	},
		   	rules: {
		         nombre: { //cada regla un mensaje
		            required: true
		            //email: true
		            //digits: true
		            //maxlength: 6
		            //max: 9
		            //date: true
		            // email: true
		           //digits:true
		           // minlength:3
		           //maxlength:10
		           //min:9 // minimo de compras a  hacer ejem y max
                   // range:[10,20]
                   // date:true
		         },
		         
		         edad:{
		         	required: true,
		         	digits: true

		         },
		         fono:{
		         	required: true
		         },
		         justificacion:{
		         	required: true
		         }
		      },

		   	messages: {
				nombre: {
					required: 'Ingrese su nombre pooo' //Mensaje de la regla nombre
					//required: 'Ingrese un email válido'
					//required: 'Ingrese solo Números'
					//required: 'Máximo 6 numeros'
				    //max:'max 9'

				},
				
				edad: {
					required: 'ingrese su edad caballero'
				},
				cuanto: {
					required: 'cuanto cuanto'
				},
				justificacion: {
					required: 'descargue sus penas '
				}
			}
		});


});