<?php


namespace Alura\Cursos\Helper;


trait FlashMassegeTrait
{
    public function defineMensagem(string $tipo, string $menssagem)
    {
        $_SESSION['tipo_mensagem'] = $tipo;
        $_SESSION['mensagem'] = $menssagem;
    }
}