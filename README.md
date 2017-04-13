# PELEJA
# DOCUMENTO DE REQUISITOS

1. Introdução

1.1. Propósito do Documento
Este documento contém a especificação de requisitos para o sistema para gestão de eventos da comunidade PHP com Rapadura (PELEJA).

1.2. Escopo do Produto
O sistema tem como objetivo auxiliar no gerenciamento dos dos eventos realizados pela comunidade e atividades relativas, sistema contará com os módulos de submissão de palestras, inscrição de participantes, realização de sorteios e controle de finanças.

1.3 Definições e Abreviações
As definições utilizadas neste documento serão abordadas posteriormente no glossário.

Abreviações:
• RF: requisito funcional;
• RNF: requisito não funcional.

1.4 Visão Geral do documento
Este documento apresenta uma descrição geral do sistema, e logo em seguida descreve suas funcionalidades especificando as entradas e saídas para todos os requisitos funcionais. Faz também uma descrição sucinta dos requisitos não funcionais contidos neste sistema.

2. Descrição Geral
O sistema PELEJA irá fornecer uma plataforma para submissão de palestras onde as mesmas serão aprovadas pelos usuários inscritos no evento.

[descrever mais]

2.1. Perspectiva do Produto
O sistema opera com uma máquina servidor que gerencia o banco de dados
e controla o acesso das máquinas clientes devidamente logados no sistema.

2.2. Funções do Produto
O sistema de gerenciamento de todas as etapas para organização de um evento tais como: página com as informações do evento, submissão de palestras, votação para escolha das palestras, inscrição de participantes, controle de finanças.

2.3. Restrições Gerais
O sistema não permitirá o acesso ao painel administrativo do sistema por pessoas não cadastradas no sistema.

3. Requisitos
3.1. Requisitos Funcionais

Módulo submissão de palestras

RF. 1: Cadastro de Palestrante.
Descrição: Qualquer usuário poderá efetuar seu cadastro como palestrante.
Entrada: Nome de usuário, E-mail e senha.
Processo: O cadastro será incluído no banco de dados.
Saída: Mensagem de confirmação bem sucedido do cadastro caso tenha s
ido efetuado com sucesso, senão, mensagem de erro.

RF. 2: Modificar Cadastro de Palestrante
Descrição: O usuário entra com o campo onde ele deseja modificar e o modifica.
Entrada: Campo desejado e o novo dado.
Processo: Conferir se o valor do campo modificado já existe salvo no banco de dados se sim, exibe uma mensagem de erro, senão atualização do banco de dados.
Saída: Mensagem de confirmação bem sucedido da modificação do cadastro caso tenha sido efetuado com sucesso, senão, mensagem de erro.


RF 3: Inativar do Cadastro de Palestrante
Descrição: Os administradores do site poderá inativar o cadastro de palestrantes.
Entrada: Nome de usuário
Processo: O sistema verifica se o palestrante é cadastrado, se for o usuário é inativado.
Saída: Mensagem de confirmação bem sucedido da inativação do cadastro caso tenha sido efetuado com sucesso, senão, mensagem de erro.
