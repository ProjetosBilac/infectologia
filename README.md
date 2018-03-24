# Infectologia

Projeto de BioInformática

## Rodando projeto

Baixe o projeto para a sua maquina

```git
git clone git@github.com:ProjetosBilac/infectologia.git
```

Acesse a pasta do projeto

```console
cd infectologia
```

Baixe as dependências do ```composer.json```

```composer
composer update
```

Baixe as depêndencias do ```package.json```

```npm
npm install
```

Crie um arquivo ```.env``` na raiz do diretório seguindo o modelo ```.env.example```

Crie uma chave para o seu projeto local

```php
php artisan key:generate
```

Levante um servidor local na porta 8000

```php
php artisan serve
```

## Tasks

Para executar as tasks da aplicação:

```npm
npm run nome-da-task
```

### Principais tasks

| task  	| descrição                                                            	|
|-------	|----------------------------------------------------------------------	|
| prod  	| constrói o front-end da aplicação para produção                     	|
| dev   	| constrói todo o front-end da aplicação para o desenvolvimento       	|
| watch 	| executa a task `dev` com `live-reload` ativado                       	|
| lint  	| roda todos os lints da aplicação. (`javascript`, `markdown`, `sass`) 	|
