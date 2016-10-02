$(document).ready(function() {

	$(".sobrenome").blur(function() {
		if($(".nome").val() == ""){
			if($(".sobrenome").val() == ""){
				alert("Digite o seu nome e sobrenome!");
			}else{
				alert("Digite o seu nome!");
			}
		} else{
			var nome = $(".nome").val() + " " + $(".sobrenome").val();
			nome = nome.toLowerCase();
			var splitNome = nome.split(/(\s+)/);
			var usuario = splitNome[0] + "." + splitNome[splitNome.length - 1];
			$(".usuario").val(usuario);
		}
	});

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $(".rua").val("");
        $(".bairro").val("");
        $(".cidade").val("");
        $(".uf").val("");
        $(".ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $(".cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $(".rua").val(dados.logradouro);
                        $(".bairro").val(dados.bairro);
                        $(".cidade").val(dados.localidade);
                        $(".uf").val(dados.uf);
                        $(".ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});