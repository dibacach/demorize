var card1   = card2 = '';
var row1    = row2 = -1;
var column1 = column2 = -1;
var timeout = 0;
var errors  = success = 0;
var points  = 0;
var total_cards = 36;

function rotate (row, column) {
    alert("rotate baby!");

    $("#card_content_"+row+"_"+column).removeClass('rotate-back').addClass('rotate');
    $("#card_face_"+row+"_"+column).removeClass('tile-back').addClass('tile');
    
    setTimeout(function(){
        $("#card_"+row+"_"+column).addClass($("#card_image_"+row+"_"+column).val());
    }, 250);

    if(card1 === ''){
        card1 = $("#card_image_"+row+"_"+column).val();
        row1 = row;
        column1 = column;
        $("#card_content_"+row1+"_"+column1).off("onclick");
    }
    else if(card2 === ''){
        card2 = $("#card_image_"+row+"_"+column).val();
        row2 = row;
        column2 = column;
        $("#card_content_"+row2+"_"+column2).off("click");
    }

    if(card1 === card2){
        card1 = card2 = '';
        row1 = row2 = column1 = column2 = -1;
        success++;
        total_cards -= 2;

        if(total_cards === 0){
            play();
            alert("You win! Your score was:"+(success*10-errors).toString()+", you had "+errors+" errors and your time was: "+$("#crono").html());
        }
    }
    else if(card1 !== '' && card2 !== ''){
        errors++;
        
        setTimeout(function(){
            rotate_reverse();
            $("#card_"+row1+"_"+column1).removeClass($("#card_image_"+row1+"_"+column1).val());
            $("#card_"+row2+"_"+column2).removeClass($("#card_image_"+row2+"_"+column2).val());
            card1 = card2 = '';
            row1 = row2 = column1 = column2 = -1;

            $("#card_content_"+row1+"_"+column1+" a").on("click", rotate);
            $("#card_content_"+row2+"_"+column2+" a").on("click", rotate);
        }, 500);
    }

}

function rotate_reverse(){
    $("#card_content_"+row1+"_"+column1).removeClass('rotate').addClass('rotate-back');
    $("#card_face_"+row1+"_"+column1).removeClass('tile').addClass('tile-back');
    $("#card_content_"+row2+"_"+column2).removeClass('rotate').addClass('rotate-back');;
    $("#card_face_"+row2+"_"+column2).removeClass('tile').addClass('tile-back');
}




//----------------------------

var inicio=0;
 
	
 
function running()
{
    // obteneos la fecha actual
    var actual = new Date().getTime();

    // obtenemos la diferencia entre la fecha actual y la de inicio
    var diff=new Date(actual-inicio);

    // mostramos la diferencia entre la fecha actual y la inicial
    var result=LeadingZero(diff.getUTCHours())+":"+LeadingZero(diff.getUTCMinutes())+":"+LeadingZero(diff.getUTCSeconds());
    document.getElementById('crono').innerHTML = result;

    // Indicamos que se ejecute esta función nuevamente dentro de 1 segundo
    timeout=setTimeout("running()",1000);
}

/* Funcion que pone un 0 delante de un valor si es necesario */
function LeadingZero(Time) {
    return (Time < 10) ? "0" + Time : + Time;
}