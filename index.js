console.log("hello world");


$('#ingreso').submit(function(e){
	e.preventDefault();
var datos= document.getElementById("ingreso");
var formd= new FormData(datos);

    $.ajax({

        url:"index.php",

        type:"POST",

        data:formd,

        dataType:"json",

        contentType:false,

        processData:false,

        cache:false,
        success: function(z){

        	document.getElementById("ss").innerHTML=z;

        }

    })
})