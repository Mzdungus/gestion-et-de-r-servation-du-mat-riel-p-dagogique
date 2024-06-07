<?php

// Connexion à la base de données
$conn = new PDO('mysql:host=localhost;dbname=materiel', 'root', '');

// Récupérer l'ID de la réservation
$id = $_GET['id'];

// Requête SQL pour confirmer la réservation
$sql = "DELETE FROM materiel  WHERE id_materiel = :id";

// Préparer la requête
$stmt = $conn->prepare($sql);

// Lier les paramètres
$stmt->bindParam(':id', $id);

// Exécuter la requête
$stmt->execute();

// Envoyer une réponse JSON
echo json_encode(['success' => true]);

// Fermer la connexion à la base de données
$conn = null;

?>