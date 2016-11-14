<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error alert alert-error" onclick="this.classList.add('hidden');">
<strong>Error!</strong>
<?= $message ?></div>
