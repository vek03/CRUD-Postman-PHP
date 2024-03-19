# Projeto Clientes

O Projeto clientes é uma aplicação PHP destinada a gerenciar inserções de dados em um banco de dados MySQL de forma eficiente e performática para fins educacionais.

## Recursos


- **Composer para Gerenciamento de Dependências**: Inicialize e gerencie as dependências do projeto de maneira simples e eficaz com o Composer.
- **Otimização de Autoload**: Implementamos a otimização de autoload do Composer para melhorar o tempo de resposta da aplicação.
- **Conexões Persistentes com o Banco de Dados**: Ajustamos a conexão com o banco de dados para ser persistente, reduzindo a sobrecarga de conexões em cada operação.


## Inicialização do Projeto

Para começar a usar o Projeto Clientes, você precisa ter o Composer instalado. Se você ainda não tem o Composer, visite [Get Composer](https://getcomposer.org/) para instruções de instalação.

Uma vez que o Composer esteja instalado, clone o repositório e instale as dependências:

```bash
git clone https://github.com/vek03/CRUD-Postman-PHP
cd CRUD-Postman-PHP
composer install
php -S localhost:8081
abrir URL no Postaman: http://localhost:8081
```


## Banco de Dados

Para armazenamento e gerenciamento de dados, utilizamos o MySQL devido à sua robustez e eficiência em ambientes de produção. O MySQL serve como a espinha dorsal do nosso sistema de armazenamento, lidando com operações de inserção de dados em alta velocidade e garantindo a integridade e recuperação dos dados.

### Tabela `clientes`

A tabela `clientes` foi projetada para armazenar dados simples de uma pessoa. Cada registro representa uma pessoa e é identificado por um `id` autoincremental. Abaixo está o script SQL para criar a tabela `clientes`:

```sql
CREATE TABLE `clientes` (
  `cliente_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`)
); ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

### Busca `clientes`

Para fazer uma busca ao realizar Update, selecione o método PUT em Body raw com a estrutura do JSON abaixo:

{
    "id": "3",
    "nome": "Alex",
    "email": "alex@gmail.com",
    "cidade": "São Paulo",
    "estado": "SP"
}