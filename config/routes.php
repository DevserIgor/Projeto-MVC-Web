<?php

use Alura\Cursos\Controller\{Deslogar,
    Exclusao,
    FormularioAlteracao,
    FormularioInsercao,
    FormularioLogin,
    ListarCursos,
    Persistencia,
    RealizarLogin};

return [
    '/listar-cursos' => ListarCursos::Class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/atualizar-curso' => FormularioAlteracao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class
];

