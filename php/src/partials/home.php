<?php 
$sql = 'SELECT * FROM USERS';
$users = []; // Inicializa o array de usuários
if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}
 
echo "<ul>";
foreach ($users as $user) {
    echo "<li>";
    echo $user->first_name . " " . $user->last_name . " " . $user->gender;
    echo "</li>";
}
echo "</ul>";

?>