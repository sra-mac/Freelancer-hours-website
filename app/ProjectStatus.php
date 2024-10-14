<?php

namespace App;

enum ProjectStatus: string
{
    //
    case Open = 'open';
    case Closed = 'closed';

    public function label():string{
        //o match equivale a ifs individuais
        return match ($this) {
            //condicional => retorno
            self::Open => 'Aceitando propostas',
            self::Closed => 'Encerrado'
        };
    }
}
