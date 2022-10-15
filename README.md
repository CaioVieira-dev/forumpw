# forumpw

## Resposta a atividade do "Fórum 1 – Programação Web"

### Realize a seguinte atividade:

a )Desenvolva uma página web contendo um formulário onde você poderá inserir sua data de nascimento, clicar em um botão e ser redirecionado para uma página que contém as informações principais do seu signo: um título (qual é seu signo) e as suas principais características. As informações de cada signo estarão armazenadas em um arquivo XML estruturado da seguinte forma:
```xml
<?xml version="1.0"?>

<signos>

<signo>

<dataInicio>21/03</dataInicio>

<dataFim>20/04</dataFim>

<signoNome>Áries</signoNome>

<descricao>Lorem ipsum dolor sit amet.</descricao>

</signo>

<signo>

<dataInicio>21/04</dataInicio>

<dataFim>20/05</dataFim>

<signoNome>Touro</signoNome>

<descricao>Lorem ipsum dolor sit amet.</descricao>

</signo>

</signos>```

Você precisara abrir o arquivo XML e iterar todos os elementos filhos do elemento “signos” para descobrir em qual Signo a data do seu aniversário esta inclusa no range de datas (dataInicio/dataFim).
