<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Entity\Curso;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CursosEmXml implements RequestHandlerInterface
{
    /** @var ObjectRepository */
    private $repositorioDeCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        /** @var Cursos[] $cursos */
        $cursos = $this->repositorioDeCursos->findAll();
        $cursosEmXml = new \SimpleXMLElement('<cursos/>');

        foreach ($cursos as $curso) {
            $cursosEmXml = $cursosEmXml->addChild('curso');
            $cursosEmXml->addChild('id', $curso->getId());
            $cursosEmXml->addChild('descricao', $curso->getDescricao());
        }

        return new Response(200, [], $cursosEmXml->asXML());
    }
}