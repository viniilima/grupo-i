<?php

$id = $_POST['cpf'];
$student_data =  [
    'id_alunos' => $id
];

// Geração do Histórico
// consiste em pegar as Disciplinas do aluno, e suas faltas e nota do Diário
$conn = mysqli_connect('localhost', 'root', '', 'academico');
$sql = "SELECT alunos.nome, matriculas.id, matriculas.id_disciplinas FROM alunos, matriculas WHERE alunos.id = $id AND matriculas.id_alunos = $id";

if($result = mysqli_query($conn, $sql)) {
    $student_data = array_merge($student_data, mysqli_fetch_array($result));
    $sql = 'SELECT diario.nota, disciplinas.nome FROM diario, disciplinas 
            WHERE diario.id_matriculas = ' . $student_data['id'] . ' AND disciplinas.id = ' . $student_data['id'];
    if($result = mysqli_query($conn, $sql)) {
        $aux = mysqli_fetch_array($result);
        $student_data['nome_disc'] = $aux['nome'];
        $student_data['nota'] = $aux['nota'];
    }
}

$table_data = [
    'Nome' => $student_data['nome'],
    'CPF' => $student_data['id_alunos'],
    'Disciplina Cursada' => $student_data['nome_disc'],
    'Nota' => $student_data['nota']
];

echo '<table>
        <tr>';
foreach($table_data as $col => $cell) {
    echo "<th>$col</th>";
}

echo '</tr>
    <tbody>';

foreach($table_data as $col => $cell) {
    echo "<td>$cell</td>";
}
