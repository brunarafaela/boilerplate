<?php
require_once __DIR__ . '/../header.php';

$sql = 'SELECT * FROM USERS ';
$users = array();

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
} else {
    echo "Error: " . $conn->error;
}
 
if (empty($users)) {
    echo "USUARIO COM ESTE NOME NAO ENCONTRADO";
} else {
    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>";
        echo $user->first_name . " " . $user->last_name . " " . $user->gender;
        echo "</li>";
    }
    echo "</ul>";
}
  
?>

    <div class="container">
        <h1>Lista de Usuários</h1>
        <div class="row">
            <div class="col-md-12">
                <?php if (empty($users)): ?>
                    <p>Nenhum usuário encontrado.</p>
                <?php else: ?>
                    <ul class="list-group">
                        <?php foreach ($users as $user): ?>
                            <li class="list-group-item">
                                <?php echo $user->first_name . " " . $user->last_name . " " . $user->gender; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
require_once __DIR__ . '/footer.php';