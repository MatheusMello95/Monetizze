<?

class loterica extends dados {

    public function __construct( dados $quantDezenas, dados $totJogos ) {
        $this->quantDezenas = $quantDezenas;
        $this->totJogos = $totJogos;
    }

    private function getDezenas ( $quantDezenas ) : array {
        $arrayDezena = [];

        do{
            $num = rand(1,60);
            if(!in_array($num ,$arrayDezena)) 
                array_push($arrayDezena, $num); 
        
        }while(strlen($arrayDezena) <= $quantDezenas );
        
        return asort($arrayDezena);
    }

    public function getJogos ( $quantDezenas, $totJogos ) : array {
        $jogos = [];

        for($jogo =0; $jogo <= $totJogos; $jogo ++) {
            $jogos[$jogo] = $this->getDezenas( $quantDezenas );
        }

        return $jogos;
    }

    public function sorteio () {
        $numeros = 6;
        $resultado = [];
        do{
            $num = rand(1,60);
            if(!in_array($num ,$resultado)) 
                array_push($resultado, $num); 
        
        }while(strlen($resultado) < 7 ); 
            
        asort($resultado);

        return $resultado;
    }

    public function confereJogos ( $quantDezenas, $totJogos ) {
        $jogos = $this->getJogos( $quantDezenas, $totJogos );
        $resultado = $this->sorteio();
        $acertos = [];

        echo "<div class='container'>
            <br><br><br>
            <div class='row'>
                <table border='1' class='table table-responsive table-striped'>
                <tr>
                    <td> JOGO </td>
                    <td> NUMEROS JOGADOS </td>
                    <td> QUANT ACERTOS </td>
                </tr>";

        foreach($jogos  as $key => $jogo){
            $result = count(array_diff($jogo, $resultado));
            $quant = strlen($jogo);
            $result = $quant - $result;
            //array_push($acertos, $result);
            $numeros = implode(" | ",$jogo);
            echo " <tr>
                <td>".$key."</td>
                <td>".$numeros."</td>
                <td>".$result."</td>
            </tr>";

        }
        echo "</table></div></div>";
        return true;
    }
}



