<?php

class Connection
{
    public static function getConnection()
    {
        //conexão local
        $connection = new PDO("mysql:host=localhost;
                            dbname=bdloja",
                            "root",
                            ""
                        );
        /*new PDO(
            tipo:host=local;
            dbname=nome do banco
            , usuário de acesso ao banco
            , senha de acesso ao banco
            )
            */

            
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET utf8");
        return $connection;
    }
}