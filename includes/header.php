<?php
/**
 * Header Template Component
 */
if (!isset($pageTitle)) {
    $pageTitle = 'VANGUARD ATELIER — Elegant Premium Website Redesign';
}
if (!isset($pageDescription)) {
    $pageDescription = 'A modern, polished, and premium digital experience redesign. Refined typography, cohesive colour palette, elegant spacing, and smooth micro-interactions.';
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✨</text></svg>">
</head>
<body>
<div id="viewport-stage">
<?php include __DIR__ . '/navigation.php'; ?>
