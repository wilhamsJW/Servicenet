O Projeto Servicenet trata-se de um sistema de cadastro e login onde o usuário ou a empresa
podem cadastrar um cliente com todos seus dados, visualizar uma lista com seus clientes, editar dados desse cliente e excluir algum possível cliente.

Tecnologias:
Backend: Desenvolvido com PHP (puro) e a integração com o Banco de Dados foi o MySQL, a ferramenta usada foi o phpmyadmin.
Frontend: Desenvolvido com Bootstrap, CSS e várias integrações de headers e includes do PHP.
Máscara dos telefone e cep: Biblioteca mask_jquery.
ìcones: https://use.fontawesome.com/releases/v5.13.1/css/all.css
Atualização do cep: https://viacep.com.br/ 
Atualização do mapa: Fonte: Google Maps, dentro da mesma requisição json do cep coloquei
o mapa dentro pra ser adicionado com: $("#map-view").append(...aqui dentro ficou o iframe do mapa...), substituindo os campos de cidade, bairro... por uma template string, dessa forma toda vez que o cep atualiza automaticamente, atualiza o mapa também via json.
Conexão com Facebook: Foi injetado o código do SDK JavaScript que te permite uma fácil manipulação do que me PHP, a príncipio tentei fazer em PHP mas devido ao pouco tempo pra entrega fiz com JS, infelizmente instalei as configurações do facebook para teste via localhost e então depois de uns minutos o Facebook expira a conexão porque só aceita em algum servidor.   
