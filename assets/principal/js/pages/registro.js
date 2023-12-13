const frm = document.querySelector('#formulario');
document.addEventListener('DOMContentLoaded', function() {
    frm.addEventListener('submit', function(e){
        e.preventDefault();
        if (frm.nombre.value == '' || frm.correo.value == ''
        || frm.usuario.value == '' || frm.clave.value == '') {
            alertaSW('TODO LOS CAMPOS SON REQUERIDOS', 'warning');
        }else {
            const http = new XMLHttpRequest();
 
    const url = base_url + 'registro/crear';
    
    http.open("POST", url, true);
  
    http.send(new FormData(frm));
  
    http.onreadystatechange = function() {
    
        if (this.readyState == 4 && this.status == 200) {
        
            console.log(this.responseText);
            
        }
        
    };

        }
    })
})