# blogcake3.5x
Criando um blog seguindo o exemplo da Documentação do CakePHP

#### Para criar um novo projeto
O CakePHP utiliza Composer, uma ferramenta de gerenciamento de dependências para PHP 5.3+, como o método suportado oficial para instalação.
Primeiramente, você precisará baixar e instalar o Composer se não o fez anteriormente. Se você tem cURL instalada, é tão fácil quanto executar o seguinte:
> curl -s https://getcomposer.org/installer | php

Agora que você baixou e instalou o Composer, você pode receber uma nova aplicação CakePHP executando:
> php composer.phar create-project --prefer-dist cakephp/app [app_name]

Ou se o Composer estiver instalado globalmente:

> composer create-project --prefer-dist cakephp/app [app_name]


#### Para fazer a instalação do projeto em sua maquina local
A maneira mais fácil de instalar o CakePHP é usando Composer, um gerenciador de dependências para o PHP. É uma
forma simples de instalar o CakePHP a partir de seu terminal ou prompt de comando. Primeiro, você precisa baixar e
instalar o Composer. Se você tiver instalada a extensão cURL do PHP, execute o seguinte comando:

> curl -s https://getcomposer.org/installer | php

#### Para Executar o projeto
> bin/cake server

Isto irá iniciar o servidor embutido do PHP na porta 8765. Abra http://localhost:8765 em seu navegador
para ver a página de boas-vindas. Todas as verificações devem estar checadas corretamente, a não ser a conexão com
banco de dados do CakePHP. Se não, você pode precisar instalar extensões do PHP adicionais, ou definir permissões
de diretório.

#### Configurando Banco de dados
Em seguida, vamos dizer ao CakePHP onde o nosso banco de dados está como se conectar a ele. Para muitos, esta
será a primeira e última vez que você vai precisar configurar qualquer coisa.
A configuração é bem simples: basta alterar os valores do array Datasources.default no arquivo con-
fig/app.php pelos que se aplicam à sua configuração. A amostra completa da gama de configurações pode ser algo
como o seguinte:
```
return [
    // Mais configuração acima.
    'Datasources' => [
            'default' => [
                'className' => 'Cake\Database\Connection',
                'driver' => 'Cake\Database\Driver\Mysql',
                'persistent' => false,
                'host' => 'localhost',
                'username' => 'cakephp',
                'password' => 'AngelF00dC4k3~',
                'database' => 'cake_bookmarks',
                'encoding' => 'utf8',
                'timezone' => 'UTC',
                'cacheMetadata' => true,
            ],
    ],
    // Mais configuração abaixo.
];
```
Depois de salvar o seu arquivo config/app.php, você deve notar que a mensagem ‘CakePHP is able to connect to the
database’ tem uma marca de verificação.

#### Gerando o código base
Devido a nosso banco de dados seguir as convenções do CakePHP, podemos usar o bake console para gerar rapidamente
uma aplicação básica . Em sua linha de comando execute:
> bin/cake bake all users

> bin/cake bake all bookmarks

> bin/cake bake all tags

Isso irá gerar os controllers, models, views, seus casos de teste correspondentes, e fixtures para os nossos users,
bookmarks e tags. Se você parou seu servidor, reinicie-o e vá para http://localhost:8765/bookmarks.
Você deverá ver uma aplicação que dá acesso básico, mas funcional a tabelas de banco de dados. Adicione alguns
users, bookmarks e tags.

