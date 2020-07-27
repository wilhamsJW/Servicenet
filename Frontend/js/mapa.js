
//O envento ready é disparado quando todo o html é carregado sem a necessidade de carregar as imagens ou estilos da página, isso torna o carregamento do uso do ready mais rápido. diferente do onload q espera toda a página ser carregada
$(document).ready(function() {
    
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {
        
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');
        
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
            
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;
            
            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                
                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");
                
                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                    
                    if (!("erro" in dados)) {

                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        
                        $("#map-view").empty();
                        $("#map-view").append(`<iframe width="450px" text_align="center" margin-left="10px" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=${String(dados.logradouro).replace(/ /g, '%20')},${String(dados.bairro).replace(/ /g, '%20')}-${String(dados.cidade).replace(/ /g, '%20')}-${String(dados.uf).replace(/ /g, '%20')}+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>`);
                        // $("#map-view").append(`<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=${String(dados.logradouro)},${String(dados.bairro)}-${String(dados.cidade)}-${String(dados.uf)}+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>`);
                        
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