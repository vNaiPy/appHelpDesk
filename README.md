HELP DESK SIMPLES

Como executar a aplicação:
1: Baixe o XAMPP para rodar um servidor APACHE.
2: Entre na pasta do XAMPP, cole o que tem dentro da pasta HTDOCS do que está no repositório e cole na sua pasta do HTDOCS no XAMPP.
3: O outro arquivo fora do HTDOCS da minha aplicação, cole na sua pasta do XAMPP.
4: Entre no navegador e digite http://localhost/app_help_desk/.
5: Usuários e senha para teste =
                                  ADM: adm@teste.com.br / Password: 12345
                                  User: jose@teste.com.br / Password: abcd
                                  User: maria@teste.com.br / Password: abcd


<-----------------Warning-----------------------------Warning-----------------------------Warning------------------->


A aplicação tem controle de sessão para cada usuário. Somente o adm pode visualizar todos os chamados da aplicação HelpDesk.

O arquivo que fica fora do HTDOCS, é para isolar os chamados arquivados e para algum usuário, além do ADM e do próprio usuário que criou o chamado, não ter acesso aos chamados.