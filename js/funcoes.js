	/******************************************************************
	IMPLEMENTAÇÕES JQUERY
	*******************************************************************/

	$('.novidades').addClass('painel-compacto');
	$('.novidades .bt-mostrar-mais').click(
		function() {
			$('.novidades').removeClass('painel-compacto');
		}
	);

	$('.mais-vendidos').addClass('painel-compacto');
	$('.mais-vendidos .bt-mostrar-mais').click(
		function() {
	
			$('.mais-vendidos').removeClass('painel-compacto');
		}
	);


/*	
	auteração do valor do input range (tamanho da roupa) (produtos.php)

		$('[name=tamanho]').on('input', function(){
  		$('[name=valortamanho]').val(this.value);
	});
*/
	//------------------FIM IMPLEMENTAÇÕES JQUERY----------------------



	/******************************************************************
	VALIDAR CAIXA DE PESQUISA ANTES DA SUBMISSÃO
	*******************************************************************/


	function validaBusca(){
		
		
		  if (document.querySelector('#q').value == ''){
			  document.querySelector('.busca').style.background = 'linear-gradient(red, black)';
		      alert('Preencha o campo de pesquisa, por favor!');
		      return false;
		  }
		  
		  else{ 
			  alert('Legal, o google vai pesquisar...');
		  }
	};
	
	//associação do evento com o formulário
	document.querySelector('#form-busca').onsubmit = validaBusca;
	
	//------------------FIM VALIDA BUSCA-----------------------------

	
	
	/*********************************************************************
	TROCA AUTOMÁTICA DO BANNER DESTAQUE	
	*********************************************************************/

	var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
	var bannerAtual = 0;
	var timer; //guarda a função que controla o tempo
	
	function trocaBanner() {
	  bannerAtual = (bannerAtual + 1) % 2;
	  document.querySelector('.banner-destaque').src = banners[bannerAtual];
	};

	//timer para troca automática
	timer = setInterval(trocaBanner, 3000);
	
	
	//-----------FIM TROCA AUTOMÁTICA BANNER DESTAQUE------------------

	
	
	/**********************************************************************
	CONTROLE (play/pause) da troca automática do banner destaque
	**********************************************************************/
	
	var controle = document.querySelector('.pause');

	controle.onclick = function() {
	  if (controle.className == 'pause hvr-buzz-out') {
	    controle.className = 'play hvr-buzz-out';
	    controle.src = "img/player-play.png";
	    clearInterval(timer);
	  } else {
	    controle.className = 'pause hvr-buzz-out';
	    controle.src = "img/player-pause.png";
	    timer = setInterval(trocaBanner, 3000);
	  }

	  return false;
	};


with(document.form-conf-compra){
	/**********************************************************************
	VALIDAÇÃO DE CAMPOS DE FORMULÁRIOS
	**********************************************************************/

	function validarCampos() {

	var cont = 0;
	var form = document.forms;


	    for(ne=0; ne<=form[0].elements.length; ne++){
    		
	    		if(!form[0].elements[ne].value){

	    			/*lert("Preencha o campo: "+form[0].elements[ne].name);*/
	    			form[0].elements[ne].style.borderColor = "red";
	    			form[0].elements[ne].focus();
	    	}
			
	    }
	};

	//associação do evento com o formulário
	this.onsubmit = validarCampos;



}