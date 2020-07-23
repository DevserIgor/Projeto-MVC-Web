<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class formularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;
    public function processaRequisicao():  void
    {
        echo $this->renderizaHtml('cursos/formulario.php', [
            "titulo" => "Novo Cusro"
        ]);
    }

}