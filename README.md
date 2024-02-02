### Teste para Pixerama
Este repositório é um teste de desenvolvimento para a empresa Pixerama.
## Requisitos para implantação:
PHP 8.1<br/>
Mysql 8.0 ou MariaDB 10<br/>
## Procedimentos para instalação:
1 - Baixe o repositório normalmente ou clone o mesmo<br/>
2 - Execute o comando <strong>composer install</strong> na pasta extraída ou clonada<br/>
```
composer install
```
3 - Proceda normalmente colocando informações de acesso a um banco de dados em seu arquivo <strong>.env</strong><br/>
4 - execute o comando php <strong>artisan db:seed</strong> para popular as informações iniciais.<br/>
```
artisan db:seed
```
5 - entre com o Login: <strong>admin@sys.com</strong> e senha: </strong>1234</strong><br/>
## Informações sobre a aplicação:
A aplicação é composta de uma landing page inicial falando de um CRM e suas vantagens, e a mesma captura interessados em adquirir a ferramenta.
A aplicação possui um painel em <strong>http://127.0.0.1:8000/painel</strong>, onde você entra com o usuário e senha mencionado acima. No painel é possivel listar os clientes semeados, e também os leads capturados. os Leads podem ser convertidos em clientes com apenas um click.

> Obs: a aplicação está integrada com o via CEP, onde pode consultar os ceps dos clientes. Alguns ceps foram gerados pelo semeador então podem não ser válidos.
também colocamos um pequeno grafico para sabermos a quantidade de homens e mulheres entre os clientes.
