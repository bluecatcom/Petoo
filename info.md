## ESTRUTURA

User -> itens (Itens é o inventario do User)
Shop -> Config -> basic water (basicwater, mediumwater, advancedwater ... Shop cria restrições pela interface e Config uma abstrata define os metodos que a "basicwater" vai herdar, e a "basicwater" só vai definir o preço, nome e efeito)

## METODOS

User =-> addMoney(), removeMoney(), viewMoney() (User tem os metodos pra controle de dinheiro do usuario)

Itens =-> addItem(), removeItem(), viewItem(), hasItem(), getQuantity() (Itens tem os metodos pra controle de entrada, saida e visualização dos itens que são obtidos pelo Shop)

Config =-> buy(), sell(), sellAll(), use() (Config define todas os metodos que os itens vão usar)

## EVENTOS

EVENTOS tipo friada, calor, ou comida estragada pra deixar o jogo mais dinamico
e ai entra as BERRYS que são pra "contra-atacar" esses eventos
as berrys vão ser pegas plantando e vão ser aleatorias,
além de tirar efeitos dos eventos vão ser usadas pra outras coisas também, como mudar a cor do pet ou a raça, fazer ele voltar a idade nova dnv e etc

## PLANEJAMENTO DE ITENS

    // BASIC
    private int $basicfeed;
    private int $basicwater;
    // feed = +10 satiety of hunger
    // water = +10 satiety of thirsty
    //
    // MEDIUM
    private int $mediumfeed;
    private int $mediumwater;
    // feed = +25 satiety of hunger
    // water = +25 satiety of thirsty
    //
    // ADVANCED
    private int $advancedfeed;
    private int $advancedwater;
    // feed = +35 satiety of hunger
    // water = +35 satiety of thirsty
    //
    // PREMIUM
    private int $premiumfeed;
    private int $premiumwater;
    // feed = +35 satiety of hunger
    // water = +35 satiety of thirsty
    //
    // BERRY BAG
    private int $strawberry;
    private int $blueberry;
    private int $raspberry;
    private int $blackberry;
    private int $cranberry;
    private int $gooseberry;
    private int $redcurrant;
    private int $blackcurrant;
    private int $whitecurrant;
    private int $elderberry;
    private int $mulberry;
    private int $goji_berry;
    private int $acai_berry; // Açaí
    private int $barberry;
    private int $juniper_berry;
    private int $cloudberry;
    private int $boysenberry;
    private int $loganberry;
    private int $huckleberry;
    private int $bilberry;
    private int $lingonberry;
    private int $sea_buckthorn_berry;
    private int $golden_berry;
