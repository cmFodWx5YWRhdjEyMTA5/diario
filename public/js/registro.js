$(document).ready( 
    
    setTimeout(function(){
    
    $('.content-form').css("opacity", "1");
    }, 100)
)
//nombre

$('#nombre').on('focus', function(){
    
    $('.lbl-nombre').css("margin-top", "-10px");
    $('.lbl-nombre').css("font-size", "14px");
})

$('#nombre').on('focusout', function(){
    
    if($('#nombre').val().length < 1){
        
        $('.lbl-nombre').css("margin-top", "10px");
        $('.lbl-nombre').css("font-size", "20px");
    }else{
        $('.lbl-nombre').css("margin-top", "-20px");
    $('.lbl-nombre').css("font-size", "14px");
    }
})
//apellidos

$('#apellido').on('focus', function(){
    
    $('.lbl-apellido').css("margin-top", "-10px");
    $('.lbl-apellido').css("font-size", "14px");
})

$('#apellido').on('focusout', function(){
    
    if($('#apellido').val().length < 1){
        
        $('.lbl-apellido').css("margin-top", "10px");
        $('.lbl-apellido').css("font-size", "20px");
    }else{
        $('.lbl-apellido').css("margin-top", "-20px");
    $('.lbl-apellido').css("font-size", "14px");
    }
})
//Email

$('#email').on('focus', function(){
    
    $('.lbl-email').css("margin-top", "-10px");
    $('.lbl-email').css("font-size", "14px");
})

$('#email').on('focusout', function(){
    
    if($('#email').val().length < 1){
        
        $('.lbl-email').css("margin-top", "10px");
        $('.lbl-email').css("font-size", "20px");
    }else{
        $('.lbl-email').css("margin-top", "-20px");
    $('.lbl-email').css("font-size", "14px");
    }
})

//Contraseña

$('#clave').on('focus', function(){
    
    $('.lbl-clave').css("margin-top", "10px");
    $('.lbl-clave').css("font-size", "14px");
})

$('#clave').on('focusout', function(){
    
    if($('#clave').val().length < 1){
        
        $('.lbl-clave').css("margin-top", "30px");
        $('.lbl-clave').css("font-size", "20px");
    }else{
        $('.lbl-clave').css("margin-top", "20px");
    $('.lbl-clave').css("font-size", "14px");
    }
})
//confirmar Contraseña

$('#confirmar-clave').on('focus', function(){
    
    $('.lbl-confirmar-clave').css("margin-top", "10px");
    $('.lbl-confirmar-clave').css("font-size", "14px");
})

$('#confirmar-clave').on('focusout', function(){
    
    if($('#confirmar-clave').val().length < 1){
        
        $('.lbl-confirmar-clave').css("margin-top", "30px");
        $('.lbl-confirmar-clave').css("font-size", "20px");
    }else{
        $('.lbl-confirmar-clave').css("margin-top", "20px");
    $('.lbl-confirmar-clave').css("font-size", "14px");
    }
})

