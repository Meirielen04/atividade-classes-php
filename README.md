# Atividade - Classes PHP

Exercícios de orientação a objetos em PHP (encapsulamento e herança).

## Requisitos

- PHP 8+
- Composer

## Como rodar

Cada exercício é independente, com seu próprio `composer.json`. Dentro da pasta do exercício:

```bash
composer dump-autoload
php index.php
```

## Exercícios

### ex1 - Livro

Classe `Livro` com atributos de título, autor e controle de páginas lidas. Dois objetos criados em `index.php` simulando a leitura de livros diferentes.

### ex2 - Produto (Encapsulamento)

Classe `Produto` com atributos privados (`nome`, `preco`, `quantidade`), getters/setters e o método `calcularValorTotal()`. Dois objetos criados em `index.php`.

### ex3 - Zumbis de The Last of Us (Herança)

Classe pai `Zumbi` (atributos `tipo`, `tempoInfeccao`, `velocidade`, métodos `atacar()` e `descreverInfeccao()`) com duas classes filhas:

- `Estalador` — atributo próprio `alcanceLocalizacao` e método `ecolocalizar()`.
- `Espreitador` — atributo próprio `escondido` e método `emboscar()`.

`index.php` instancia um objeto de cada classe (pai + 2 filhas).
