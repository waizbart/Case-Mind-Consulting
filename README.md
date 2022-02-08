# Case-Mind-Consulting [APROVADO]
Processo seletivo 2021
## Introdução 
Essa página web foi feita como uma parte do processo seletivo para estágio da empresa Mind Consulting cujo objetivo era desenvolver um sistema que possibilite uma empresa e seus clientes gerenciarem seus dados.
## Desenvolvimento 
O desenvolvimento do sistema foi dividido no backend, frontend e no banco de dados. As tecnologias usadas estão explicadas nas próximas sessões.
### Front-end
Para o desenvolvimento do frontend do sistema foram usados HTML, CSS e alguns recurso de bootstrap.
### Back-end
No bakcend foi usado PHP para a inserção e recuperação de informações no banco de dados, assim como seu processamento.
### Banco de dados 
Foi utilizado um banco de dados MySQL na aplicação phpMyAdmin para o armazenamento das informações pelo PHP.
## Funcionamento 
O sistema inicia com uma tela onde o usuário pode escolher fazer login ou se cadastrar, como representado a seguir: 

![image](https://user-images.githubusercontent.com/63511690/146214820-166f71ab-375b-4342-a62d-90870c61217b.png)

Caso o usuário selecione a opção de cadastro ele é redirecionado para a seguinte tela, onde após a submissão do formulário seus dados serão armazenados e será redirecionado para a tela de login:

![image](https://user-images.githubusercontent.com/63511690/146218516-8b2afa98-3e45-4d54-a75e-76e98cc2b20c.png)

Caso o usuário selecione a opção de login ele é redirecionado para a seguinte tela:

![image](https://user-images.githubusercontent.com/63511690/146215335-46bc43ea-fb24-4f78-b1a3-c9c6a7a756c9.png)

O usuário faz login com suas credenciais, sendo elas email ou cpf e senha. Caso as credenciais sejam confirmadas e o usuário possua nível 999, ele é redirecionado para dashboard de usuário admin, onde o admiministrador verá uma tabela com todos usuários registrados no sistemas, podendo ativar ou desativá-los e editar seus dados. A dashboard está representada a seguir: 

![image](https://user-images.githubusercontent.com/63511690/146217357-24283ab0-c146-4a32-b18b-981a5bcfda6e.png)

Caso o nível do usuário seja 1, ele é redirecionado para a dashboard de usuário comum, onde visualiza suas informações também podendo editá-las. A dashboard está representada a seguir: 

![image](https://user-images.githubusercontent.com/63511690/146217084-34a8c8b3-8bf2-44d9-a53d-84a790d02fa9.png)

Caso o usuário tenha nível 0 ele não tem acesso de forma alguma ao sistema. Quando um usuário seleciona a opção editar ele é redirecionado para a seguinte tela, onde pode editar seus dados: 

![image](https://user-images.githubusercontent.com/63511690/146217684-269619cc-e177-4d07-9a23-97b93a2ee549.png)




