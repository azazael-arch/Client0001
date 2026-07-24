<?php
/**
 * Homepage — PT. Sriwijaya Trans Indo
 * Refactored with Modular Components
 */

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/csrf.php';
require_once __DIR__ . '/includes/functions.php';

// Track visitor
trackVisitor('/');

// Generate CSRF token for forms
$csrfToken = generateCsrfToken();

// Load active services from database
try {
    $services = getActiveServices();
} catch (Exception $e) {
    $services = [];
}
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<?php include 'components/head.php'; ?>

<body>

    <?php 
        include 'components/navbar.php';
        include 'components/hero.php';
        include 'components/about.php';
        include 'components/services.php';
        include 'components/whyus.php';
        include 'components/portfolio.php';
        include 'components/news.php';
        include 'components/contact.php';
        include 'components/footer.php';
        include 'components/scripts.php';
    ?>

</body>
</html>
