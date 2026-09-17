🐾 Petoo

Petoo é um projeto inspirado nos clássicos jogos de Tamagotchi, desenvolvido em PHP com Programação Orientada a Objetos (POO).

O objetivo do projeto é criar um pequeno sistema onde o jogador cuida de um pet virtual, mantendo suas necessidades básicas enquanto administra os recursos disponíveis para comprar alimentos e outros itens.

O nome Petoo vem da combinação de Pet + POO (Programação Orientada a Objetos), representando a principal proposta do projeto: construir o sistema utilizando conceitos de orientação a objetos, onde cada elemento possui responsabilidades próprias e os objetos interagem entre si.
🎮 Como funciona

O jogador possui um pet virtual com necessidades que precisam ser acompanhadas.

Com o passar do tempo:

    🍖 A fome do pet aumenta.

    💧 A sede do pet aumenta.

    ⏱️ As necessidades são atualizadas a cada 5 segundos.

    🛒 O jogador pode comprar alimentos para cuidar do pet.

    🍎 Os alimentos recuperam determinados atributos do pet.

    💰 As compras consomem os recursos disponíveis.

    🐾 O jogador precisa administrar os recursos para manter o pet saudável.

A ideia é criar um ciclo simples:

        ┌──────────────┐
        │     PET      │
        └──────┬───────┘
               │
               ▼
       Necessidades diminuem
               │
               ▼
        ┌──────────────┐
        │    JOGADOR   │
        └──────┬───────┘
               │
               ▼
        Compra alimentos
               │
               ▼
        Alimenta o pet
               │
               ▼
        Necessidades ↑
               │
               └──────────► Continua

## Programação Orientada a Objetos

Um dos principais objetivos do Petoo é aplicar conceitos de POO em um projeto prático.

Cada elemento importante do sistema é representado por um objeto, permitindo que eles tenham seus próprios atributos, comportamentos e responsabilidades.

Alguns exemplos:

Pet
├── Fome
├── Sede
└── Métodos para cuidar do pet

Food
├── Nome
├── Preço
└── Valor de recuperação

Player
├── Dinheiro
├── Inventário
└── Métodos de compra

Shop
├── Produtos
└── Métodos de compra

Game
└── Controla o funcionamento do jogo

Esses objetos interagem entre si para formar o funcionamento do sistema.

Por exemplo:

Player
   │
   │ compra
   ▼
 Shop
   │
   │ fornece
   ▼
 Food
   │
   │ utilizada pelo
   ▼
 Pet

## Estrutura do projeto

A estrutura é organizada da seguinte maneira:

.
├── Assets
│   ├── AdoptionBihyung.png
│   ├── AdoptionBiryu.png
│   ├── AdoptionBiyoo.png
│   ├── AdoptionEmpty.png
│   ├── AdoptionYoungki.png
│   ├── DokkaebiBihyung.png
│   ├── DokkaebiBiryu.png
│   ├── DokkaebiBiyoo.png
│   ├── DokkaebiYoungki.png
│   └── ProgramAparence.png
├── Class
│   ├── Animal
│   │   ├── Animal.php
│   │   ├── Config.php
│   │   ├── Dokkaebi.php
│   │   └── Needs.php
│   ├── Config
│   │   ├── ItemTransaction.php
│   │   ├── Log.php
│   │   ├── MoneyTransaction.php
│   │   ├── ShopTransaction.php
│   │   └── User.php
│   ├── Events
│   ├── Game
│   │   ├── bootstrap.php
│   │   ├── CreateDokkaebi.php
│   │   ├── GameCLI
│   │   │   ├── GameDokkaebi.php
│   │   │   ├── GameMod.php
│   │   │   ├── GameShop.php
│   │   │   └── GameUser-Inventory.php
│   │   ├── GameGUI.php
│   │   ├── Game.php
│   │   ├── GameProcess.php
│   │   ├── Gametick.php
│   │   └── ObjectSession
│   │       ├── ConfigObjectSessionSet.php
│   │       ├── DokkaebiFunctions.php
│   │       └── ProductsObjectSessionSet.php
│   └── Products
│       ├── Berry
│       ├── Feed
│       │   ├── AdvancedFeed.php
│       │   ├── BasicFeed.php
│       │   ├── MediumFeed.php
│       │   ├── PremiumFeed.php
│       │   └── SuperFeed.php
│       ├── Furniture
│       ├── PetNeeds
│       ├── Special
│       └── Water
│           ├── BasicWater.php
│           ├── PremiumWater.php
│           └── WaterGallon.php
├── composer.json
├── index.php
├── README.md
└── vendor
    ├── autoload.php
    └── composer
        ├── autoload_classmap.php
        ├── autoload_namespaces.php
        ├── autoload_psr4.php
        ├── autoload_real.php
        ├── autoload_static.php
        ├── ClassLoader.php
        └── LICENSE

18 directories, 51 files

    A estrutura pode mudar conforme novas funcionalidades forem adicionadas ao projeto.

## Tecnologias

    PHP

    Programação Orientada a Objetos

    Composer

    Git

    HTML para a interface

    JavaScript

## Instalação

Clone o repositório:

git clone https://github.com/bluecatcom/Petoo.git

Entre na pasta:

cd petoo

Instale as dependências:

composer install

execute:

php -S localhost:8000 -t public

Depois acesse:

http://localhost:8000

## Sistema de necessidades

O pet possui necessidades que são alteradas com o passar do tempo.

A cada 5 segundos, o sistema atualiza os atributos do pet.

Exemplo:

Fome: 80
Sede: 70

        ↓ 5 segundos

Fome: 75
Sede: 65

        ↓ 5 segundos

Fome: 70
Sede: 60

O jogador precisa acompanhar esses valores e utilizar os alimentos disponíveis para mantê-los em níveis adequados.

## Sistema de loja

A loja permite que o jogador utilize seus recursos para adquirir alimentos.

Cada alimento possui características próprias, como:

🥩 basic feed
Preço: $15
Recuperação de fome: +15

💧 basic water
Preço: $15
Recuperação de sede: +15

Isso permite que diferentes objetos Food possuam comportamentos e atributos diferentes.

## Objetivos do projeto

O Petoo foi desenvolvido principalmente como um projeto de estudo e prática de Programação Orientada a Objetos.

Entre os objetivos estão:

    Praticar criação e utilização de classes.

    Trabalhar com objetos e suas interações.

    Aplicar encapsulamento.

    Utilizar herança quando necessário.

    Trabalhar com composição entre objetos.

    Separar responsabilidades entre classes.

    Criar uma arquitetura organizada.

    Praticar Git e controle de versões.

    Transformar conceitos de POO em um sistema funcional.

## Possíveis funcionalidades futuras

Algumas funcionalidades que serão adicionadas:

    ❤️ Sistema de vida.

    😊 Humor do pet.

    ⚡ Energia.

    😴 Sistema de sono.

    🧼 Higiene.

    🎮 Mini-jogos.

    🏪 Mais tipos de alimentos e itens.

    📈 Evolução/crescimento do pet.

    💾 Sistema de salvamento.

    👤 Sistema de usuários.

    🏆 Conquistas.

    🎨 Diferentes pets e skins.

    🏠 Personalização do ambiente.

## Conceito

    Petoo = Pet + POO

O projeto utiliza o conceito de um pet virtual como uma forma de explorar Programação Orientada a Objetos na prática, transformando elementos do jogo em objetos que possuem responsabilidades e interagem entre si.

Petoo 🐾 — Um pet para praticar conceitos de POO.
