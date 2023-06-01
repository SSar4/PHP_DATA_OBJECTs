# Exemplo de Uso de PDO em PHP

Este é um exemplo simples de como usar o PDO (PHP Data Objects) para conectar-se a um banco de dados MySQL e realizar uma inserção de dados em uma tabela.

## Requisitos

- PHP 5.3 ou superior
- Servidor web local (por exemplo, XAMPP, WAMP, MAMP)

## Configuração do Banco de Dados

1. Certifique-se de ter um servidor de banco de dados MySQL em execução localmente.
2. Crie um banco de dados chamado `MeuBancoDeDados`.
3. Dentro do banco de dados, crie uma tabela chamada `usuarios` com a seguinte estrutura:

   ```sql
   CREATE TABLE usuarios (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(50) NOT NULL,
       email VARCHAR(50) NOT NULL
   );

## Como Usar
1. Faça o download ou clone este repositório em seu ambiente local.
2. Coloque os arquivos em seu servidor web (por exemplo, no diretório htdocs do XAMPP).
3. Abra o arquivo index.php em um navegador web.
4. Preencha os campos "nome" e "email" no formulário e clique no botão "Enviar".
5. Os dados serão enviados ao servidor, e se tudo estiver configurado.corretamente, eles serão inseridos na tabela usuarios.
6. Você verá a mensagem "inserted" no navegador, indicando que os dados foram inseridos com sucesso.

## Observações
- Certifique-se de substituir as informações de conexão com o banco de dados (localhost, MeuBancoDeDados, root, root) com suas próprias informações, se necessário.
- Verifique se o nome da tabela (usuarios) está correto no seu banco de dados.