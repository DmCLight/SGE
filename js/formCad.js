$(document).ready(function() {

    // Validação de e-mail
    $(".email").blur(function(){
        var email = $(".email").val();
        var filtroEmail = /^.+@.+\..{2,}$/;
        var caracteresIlegais= /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

        if(!(filtroEmail.test(email)) || email.match(caracteresIlegais)){
            $("#email").addClass("has-error");
        } else{
            $("#email").removeClass("has-error");
            $("#email").addClass("has-success");
        }
    });

    $(".emailC").blur(function(){
        var email = $(".emailC").val();
        var filtroEmail = /^.+@.+\..{2,}$/;
        var caracteresIlegais= /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

        if(!(filtroEmail.test(email)) || email.match(caracteresIlegais)){
            $("#email2").addClass("has-error");
        } else{
            $("#email2").removeClass("has-error");
            $("#email2").addClass("has-success");
        }

        if($(".email").val() == ""){
            if($(".emailC").val() == ""){
                alert("Digite o e-mail e confirme-o!");
            } else{
                alert("Digite o e-mail!");
            }
        }

        if($(".email").val() != $(".emailC").val()){
            alert("Os e-mails são diferentes!");
            $("#email").removeClass("has-success");
            $("#email2").removeClass("has-success");

            $("#email").addClass("has-error");
            $("#email2").addClass("has-error");
        }
    });

    //Validação da senha
    $(".senha").blur(function(){

    }

    //Mascáras de entrada
    $(".cep").mask('00000-000');
    $(".telefone").mask('(00)0000-0000');
    $(".celular").mask('(00)0000-00009')	
    $(".uf").mask("SS");

    //Cria o usuário
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


    // Retorna os valores de endereço
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