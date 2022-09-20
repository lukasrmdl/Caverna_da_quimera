window.onload = function(){
let cep=document.getElementById("cep")

cep.addEventListener("blur",carregaAjax)
}


// evento disparado quando a requisição for completa
   function buscaDados(event) {
        if(this.status == 200 && this.readyState==4) {
           
           var dados = JSON.parse(this.responseText);
            if (dados) {
            document.getElementById("logradouro").value=dados.logradouro
			     document.getElementById("bairro").value=dados.bairro
			     document.getElementById("cidade").value=dados.localidade
        	}

            } else {
           	 console.log('Erro:',this.status);
                } 
        }

function carregaAjax(event){
        const ajax = new XMLHttpRequest();
        ajax.addEventListener('load', buscaDados);
        ajax.open('GET', 'https://viacep.com.br/ws/'+this.value+'/json');
        ajax.send(); 
}




