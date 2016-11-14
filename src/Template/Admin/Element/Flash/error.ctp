<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error alert alert-error" onclick="this.classList.add('hidden');"><button class="close" data-dismiss="alert">×</button>
<strong>Error!</strong>
<?= $message ?></div>
