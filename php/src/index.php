<?php
//incluir conexão
require_once __DIR__ . '/core/connection.php';
//incluir header
include __DIR__ . '/partials/header.php';


$sql = 'SELECT * FROM USERS';
$users = []; // Inicializa o array de usuários
if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}
?>
 
<div class="container mt-4">
  <div class="row">
    <?php foreach ($users as $user): ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">
              <?= htmlspecialchars($user->first_name . ' ' . $user->last_name) ?>
            </h5>
            <p class="card-text">
              <strong>Gênero:</strong> <?= htmlspecialchars($user->gender) ?>
            </p>
            <!-- Adicione outros campos conforme necessário -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<?php include __DIR__ . '/partials/footer.php'; ?>