## 📁 Estrutura do Projeto

O projeto representa uma calculadora simples usando HTML, CSS, JavaScript e PHP. Ele contém as seguintes pastas e arquivos, seguindo o padrão MVC:

Model/

- **Calculadora.php**

Responsável pela lógica da calculadora. Contém métodos para operações matemáticas como:

`somar(a, b)` → Exibe a soma entre os números

`subtrair(a, b)` → Exibe a subtração entre os números

`multiplicar(a, b)`→ Exibe a multiplicação entre os números

`dividir(a, b)` → Exibe a divisão entre os números

Valida entradas e retorna o resultado para o Controller.

View/

index.php

Exibe a interface da calculadora para o usuário.

Contém botões numéricos, operadores e campos de entrada.

Recebe os resultados do Controller e atualiza a tela.

style.css

Responsável pelo design da calculadora.

Define cores, fontes, tamanhos e layout responsivo.

Controller/

CalculadoraController.php

Recebe os dados da View (valores e operação selecionada).

Chama os métodos do Model para calcular o resultado.

Retorna o resultado para a View exibir.

Main/

index.php

Arquivo principal que inicializa o sistema MVC.

Instancia o Controller e exibe a View.

Gerencia requisições do usuário e envia dados ao Model.

Descrição Geral

Este projeto é uma calculadora web que realiza operações matemáticas básicas.
Seguindo o padrão MVC (Model-View-Controller), ele separa a lógica da aplicação (Model), a interface do usuário (View) e o controle das ações (Controller), garantindo organização e facilidade de manutenção.

HTML → Estrutura da interface

CSS → Estilo visual

JavaScript → Interações dinâmicas e validações na interface

PHP → Processamento das operações matemáticas e integração com MVC
