<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $array =[
            'curso'=>[
                [
                    'nome' => 'curso A',
                    'alunos' => [
                        [
                            'nome' => 'Aluno 1',
                            'disciplina' =>[
                                [
                                    'Nome' => 'disciplina 1',
                                    'Notas' => [2,7,9],
                                ],
                                [
                                    'Nome' => 'disciplina 2',
                                    'Notas' => [7,8,4],
                                ],
                                [
                                    'Nome' => 'disciplina 3',
                                    'Notas' => [7,7,7],
                                ],
                                [
                                    'Nome' => 'disciplina 4',
                                    'Notas' => [2,4,3],
                                ],
                            ],
                        ],
                        [
                            'nome' => 'Aluno 2',
                            'disciplina' =>[
                                [
                                    'Nome' => 'disciplina 1',
                                    'Notas' => [4,2,8],
                                ],
                                [
                                    'Nome' => 'disciplina 2',
                                    'Notas' => [9,0,4],
                                ],
                                [
                                    'Nome' => 'disciplina 3',
                                    'Notas' => [9,3,3],
                                ],
                                [
                                    'Nome' => 'disciplina 4',
                                    'Notas' => [2,1,0],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'curso' =>[
                        [
                            'nome' => 'curso B',
                            'alunos' => [
                                [
                                    'nome' => 'Aluno 1',
                                    'disciplina' =>[
                                        [
                                            'Nome' => 'disciplina 1',
                                            'Notas' => [3,4,7],
                                        ],
                                        [
                                            'Nome' => 'disciplina 2',
                                            'Notas' => [0,0,0],
                                        ],
                                        [
                                            'Nome' => 'disciplina 3',
                                            'Notas' => [8,7,6],
                                        ],
                                        [
                                            'Nome' => 'disciplina 4',
                                            'Notas' => [2,4,6],
                                        ],
                                    ],
                                ],
                                [
                                    'nome' => 'Aluno 2',
                                    'disciplina' =>[
                                        [
                                            'Nome' => 'disciplina 1',
                                            'Notas' => [8,7,10],
                                        ],
                                        [
                                            'Nome' => 'disciplina 2',
                                            'Notas' => [9,7,6],
                                        ],
                                        [
                                            'Nome' => 'disciplina 3',
                                            'Notas' => [8,7,10,
                                        ],
                                        [
                                            'Nome' => 'disciplina 4',
                                            'Notas' => [10,7,8],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],               
            ], 
        ],

        foreach ($array ['curso'] as $curso){
            echo "Nome do Curso:" . $curso['nome'];
        }

        foreach ($array ['curso'] as $curso){
            foreach ($curso ['alunos'] as $alunos){
                echo "Nome do Aluno:" . $aluno['nome'];
            }
        }

        foreach ($array ['curso'] as $curso){
            foreach ($curso ['alunos'] as $alunos){
                foreach ($aluno['disciplina'] as $disciplina){
                    echo "Nome do disciplina:" . $disciplina['nome'];
                }
            }
        }

        foreach ($array ['curso'] as $curso){
            foreach ($curso ['alunos'] as $alunos){
                echo "nome do aluno:" .$aluno['nome'];
                echo "Disciplinas e notas:";
                foreach ($aluno['disciplina'] as $disciplina){
                    echo "Disciplina:" . $disciplina['nome'];
                    echo "Notas:" . implode(',', $disciplina['notas']);
                }
            }
        }

        foreach ($array ['curso'] as $curso){
            foreach ($curso ['alunos'] as $alunos){
                echo "nome do aluno:" .$aluno['nome'];
                echo "Disciplinas e notas:";
                foreach ($aluno['disciplina'] as $disciplina){
                    echo "Disciplina:" . $disciplina['nome'];
                    echo "Notas:" . implode(',', $disciplina['notas']);
                }
            }
        }
    ?>
</body>
</html>