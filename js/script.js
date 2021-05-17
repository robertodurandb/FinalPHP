function sumar(){
    let val1 = getId('valor01').value;
    let val2 = getId('valor02').value;
    if(val1=='' || val2==''){
        getId('resultado').innerHTML = 'Ingrese valores.';
    }else{
    let total = eval(val1)+eval(val2);
    getId('resultado').innerHTML = total;
    }
}

function restar(){
    let val1 = getId('valor01').value;
    let val2 = getId('valor02').value;
    if(val1=='' || val2==''){
        getId('resultado').innerHTML = 'Ingrese valores.';
    }else{
    let total = eval(val1)-eval(val2);
    getId('resultado').innerHTML = total;
    }
}

function multiplicar(){
    let val1 = getId('valor01').value;
    let val2 = getId('valor02').value;
    if(val1=='' || val2==''){
        getId('resultado').innerHTML = 'Ingrese valores.';
    }else{
    let total = eval(val1)*eval(val2);
    getId('resultado').innerHTML = total;
    }
}

function dividir(){
    let val1 = getId('valor01').value;
    let val2 = getId('valor02').value;
    if(val1=='' || val2==''){
        getId('resultado').innerHTML = 'Ingrese valores.';
    }else{
    let total = eval(val1)/eval(val2);
    getId('resultado').innerHTML = total;
    }
}



function getId(id){
    return document.getElementById(id);
}