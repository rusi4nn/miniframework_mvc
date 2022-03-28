<?php

    namespace MF\Model;

    use App\Conection;

    class Container {

        public static function getModel($model) {

            $class = "\\App\\Models\\".ucfirst($model);
            // retornar o modelo solicitado já instanciado, inclusive com a conexão estabelecida
            $conn = Conection::getDb();

            return new $class($conn);
        }
    }


?>