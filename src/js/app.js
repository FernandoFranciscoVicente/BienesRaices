document.addEventListener('DOMContentLoaded', function(){
    eventListeners();

    darkMode();
})

function darkMode(){
    //Dark mode por preferencia del usuario
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    //Lee las preferencias del usuario
    //console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }
    else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        
    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }
    else{
        document.body.classList.remove('dark-mode');
    }
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function(){
        //Agrega y remueve la clase 'dark-mode' al body al dar click
        document.body.classList.toggle('dark-mode');
    });
}

//Tan pronto como cargue el documento, la función se ejecutará
function eventListeners(){
   const mobileMenu = document.querySelector('.mobile-menu');

   mobileMenu.addEventListener('click', navegacionResponsive);

   
}

function navegacionResponsive(){
    //Cambiar de display block a display none al hacer click
    const navegacion = document.querySelector('.navegacion');

    //Si el elemento tiene la clase 'mostrar'
    if(navegacion.classList.contains('mostrar')){
        //Entonces se la remueve
        navegacion.classList.remove('mostrar');
    }
    else{
        //Si no la tiene, se la agrega
        navegacion.classList.add('mostrar');
    }
}