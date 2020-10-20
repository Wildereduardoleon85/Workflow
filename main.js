$(document).ready(()=>{
   
    const verde = '#27BD36';
    const rojo = '#EA1D24';
    const status = $('#status').text();

    if( status == 'Estado1'){
        $('#rombo1').removeClass('rombo1').addClass('rombo1-verde');
        $('#check1').css('color' , verde );
        $('#check2').removeClass('fas fa-check').addClass('fas fa-exclamation-triangle').css('color' , rojo );
        $('#rombo2').removeClass('rombo2').addClass('rombo2-rojo');

    } if (status == 'Estado2'){
        $('#rombo1').removeClass('rombo1').addClass('rombo1-verde');
        $('#check1').css('color' , verde );
        $('#check2').css('color' , verde );
        $('#rombo2').removeClass('rombo2').addClass('rombo2-verde');
        $('#rombo3').removeClass('rombo3').addClass('rombo2-rojo');
        $('#check3').removeClass('fas fa-check').addClass('fas fa-exclamation-triangle').css('color' , rojo );

    } if (status == 'Estado3'){
        $('#rombo1').removeClass('rombo1').addClass('rombo1-verde');
        $('#check1').css('color' , verde );
        $('#check2').css('color' , verde );
        $('#rombo2').removeClass('rombo2').addClass('rombo2-verde');
        $('#rombo3').removeClass('rombo3').addClass('rombo2-verde');
        $('#check3').css('color' , verde );
        $('#rombo4').removeClass('rombo4').addClass('rombo2-rojo');
        $('#check4').removeClass('fas fa-check').addClass('fas fa-exclamation-triangle').css('color' , rojo );

    } if (status == 'Estado4'){
        $('#rombo1').removeClass('rombo1').addClass('rombo1-verde');
        $('#check1').css('color' , verde );
        $('#check2').css('color' , verde );
        $('#rombo2').removeClass('rombo2').addClass('rombo2-verde');
        $('#rombo3').removeClass('rombo3').addClass('rombo2-verde');
        $('#check3').css('color' , verde );
        $('#rombo4').removeClass('rombo4').addClass('rombo2-verde');
        $('#check4').css('color' , verde );
        $('#rombo5').removeClass('rombo5').addClass('rombo2-rojo');
        $('#check5').removeClass('fas fa-check').addClass('fas fa-exclamation-triangle').css('color' , rojo );

    }if (status == 'Estado5'){
        $('#rombo1').removeClass('rombo1').addClass('rombo1-verde');
        $('#check1').css('color' , verde );
        $('#check2').css('color' , verde );
        $('#rombo2').removeClass('rombo2').addClass('rombo2-verde');
        $('#rombo3').removeClass('rombo3').addClass('rombo2-verde');
        $('#check3').css('color' , verde );
        $('#rombo4').removeClass('rombo4').addClass('rombo2-verde');
        $('#check4').css('color' , verde );
        $('#rombo5').removeClass('rombo5').addClass('rombo2-verde');
        $('#check5').css('color' , verde );
    }
    

});
    

