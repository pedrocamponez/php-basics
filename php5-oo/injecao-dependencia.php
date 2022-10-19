<?php
interface MatematicaBasica {
    public function somar($x, $y);
}
class Basico1 implements MatematicaBasica {
    public function somar($x, $y) {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica {
    public function somar($x, $y) {
        $res = $x;
        for($q=0; $q < $y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Matematica {
    private $basico;

    public function __construct(MatematicaBasica $b) { //injeção de dependência é quando você insere uma classe dentro de outra ($b)
        $this->basico = $b;           //normalmente através do construct, mas não necessariamente.
    }

    public function somar($x, $y) {
        return $this->basico->somar($x,$y);
    }
}

$mat = new Matematica(new Basico1()); //aqui usando a injeção no parâmetro passado dentro de Matematica()
echo $mat->somar(10, 15);

//Exemplo prático:

class Database {
    private $engine;

    public function __construct(DatabaseInterface $eng) {
        $this->engine = $eng;
    }

    public function listarTudo() {
        return $this->engine->listar();
    }

    //listar
    //selecionar
    //inserir
    //atualizar
    //deletar, etc
}

class MysqlEngine implements DatabaseInterface {
    public function listarTudo() {
        //coisa de selecionar no banco de dados
    }
}
class OracleEngine implements DatabaseInterface {
    public function listarTudo() {
        //coisa de selecionar no banco de dados
    }
}
class MongoEngine implements DatabaseInterface {
    public function listarTudo() {
        //coisa de selecionar no banco de dados
    }
}

$db = new Database( new MysqlEngine() ); //aqui uso o banco de dados que eu quiser, independente dele, a dependência está criada na interface
$db->listarTudo();                       //aí nesse caso, é só alterar o MysqlEngine() pro engine que eu quiser (ou seja, alterar a injeção), 
                                        //e pronto, sem precisar alterar toda a classe de banco de dados