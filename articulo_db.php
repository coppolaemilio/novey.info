<?php
// Get the true id
$id = $_GET['url'];

// Fetch all the article data
$STH = $DB->prepare("SELECT * FROM news WHERE id = ? LIMIT 1");
$STH->execute(array($id));
$Article = $STH->fetch(PDO::FETCH_ASSOC);
