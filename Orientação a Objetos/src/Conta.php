<?php //a ideia desse arquivo é obrigar que as pessoas usem ele para criar uma conta
class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;  //encapsulamento
    private static $numeroDeContas = 0;  //atributo da propria classe

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        echo "Criando nova conta..." . PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++; //acessando o atributo da classe, onde cada vez que uma instância foi incrementada, o atributo ganha um
    }

    public function saca(float $valorASacar)
    {  //criando um metodo dentro da classe, onde o parametro é o valor a ser inserido
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível!";
        } else {
            $this->saldo -= $valorASacar;  //pega o atributo saldo do objeto que está chamando esse metodo e adiciona o valor inserido
        }
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo!";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente!";
        } else {
            $this->saca($valorATransferir);
            $contaDestino->deposita(($valorATransferir));
        }
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    //NÃO É MAIS NECESSÁRIO JÁ QUE A PARTIR DO MOMENTO QUE CRIOU UMA CONTA, NÃO PRECISA MAIS MUDAR O CPF DO TITULAR
    // public function defineCpfTitular(string $cpf): void
    // {
    //     $this->cpfTitular = $cpf;
    // }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    //NÃO É MAIS NECESSÁRIO JÁ QUE A PARTIR DO MOMENTO QUE CRIOU UMA CONTA, NÃO PRECISA MAIS MUDAR O NOME DO TITULAR
    // public function defineNomeTitular(string $nome): void
    // {
    //     $this->nomeTitular = $nome;
    // }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular) //validando tamanho do nome inserido, privado para que seja usado apenas pelo construtor
    {
        if (strlen($nomeTitular) < 3) {
            echo "Nome precisa ser preenchido";
            exit();
        }
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
