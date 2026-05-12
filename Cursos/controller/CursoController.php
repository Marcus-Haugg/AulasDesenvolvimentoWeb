<?php

require_once __DIR__ . '/../dao/CursoDao.php'; // carrega o DAO (que já carrega Database e Model)

// Controller: orquestra a comunicação entre o DAO e as Views
class CursoController
{
    // Retorna todos os cursos buscados do banco
    public function listar()
    {
        $dao = new CursoDao();
        return $dao->listar();
    }

    // Ação de cadastro: lê o POST, salva no banco e redireciona
    public function salvar()
    {
        // Cria o objeto com os dados enviados pelo formulário via POST
        $curso = new Curso(
            $_POST['nomecurso'],    // nome do curso
            $_POST['cargahoraria'], // carga horária
            $_POST['categoria']     // categoria
        );

        $dao = new CursoDao(); // instancia o DAO
        $dao->salvar($curso);  // persiste o objeto no banco

        header("Location: lista.php"); // redireciona para a listagem após salvar
    }
}
