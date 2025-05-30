


function validar(){
    var titulo = document.getElementById('title');
    var pags = document.getElementById('pages');
    var gen = document.getElementById('genre');
    var autor = document.getElementById('author');

    var alerts = document.querySelector('.alerts');
    var erros = [];
    [titulo,pags,gen,autor].forEach(element=>{
        if(element.value == '' || (element.value < 1 || element.value > 10080)){
            element.style.borderColor = 'red';
            if(element.id == 'title'){
                tipoAlert = 'título';
            }else if(element.id == 'pages'){
                tipoAlert = 'número de páginas'
            }else if(element.id == 'genre'){
                tipoAlert = 'gênero'
            }else if(element.id =='author'){
                tipoAlert = 'autor'
            }
            erros.push('Informe o '+ tipoAlert +'!');
            
        }else{
            element.style.borderColor = 'black';
        }

    });
    if(erros.length > 0 ){
        alerts.style.display = 'block';
        alerts.innerHTML = erros.join("<br>");
    }else{
        alerts.style.display = 'none';
    }
    // alert(titulo.value+'  '+pags.value+'   '+gen.value+'    '+autor.value);

    return (pags.value >= 1 && pags.value <= 10080)
    && (titulo.value !='') 
    && (gen.value !='') 
    && (autor.value !='');
}

