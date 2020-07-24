<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class formularioInsercao implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    public function handle(ServerRequestInterface $request):  ResponseInterface
    {
        $html = $this->renderizaHtml('cursos/formulario.php', [
            "titulo" => "Novo Cusro"
        ]);
        return new Response(200, [], $html);
    }

}