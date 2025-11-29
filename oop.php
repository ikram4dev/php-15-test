<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produits Dynamiques</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #eef1f5;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        color: #2c3e50;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    form {
        background: #ffffff;
        width: 420px;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        margin-bottom: 30px;
    }

    form p {
        background: #f7f9fa;
        padding: 12px;
        border-left: 4px solid #3498db;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 9px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5px;
        margin-bottom: 12px;
        font-size: 14px;
    }

    input[type="submit"] {
        width: 100%;
        background: #3498db;
        color: white;
        border: none;
        padding: 12px;
        font-size: 15px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.2s ease;
    }

    input[type="submit"]:hover {
        background: #2980b9;
    }

    p {
        width: 380px;
        background: #ffffff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        line-height: 1.6;
    }

    hr {
        width: 380px;
        border: none;
        border-top: 1px solid #ddd;
        margin: 12px 0 22px 0;
    }
</style>

</head>
<body>

<?php
class Produit {
    public $nom;
    public $prix;

    public function __construct($nom, $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getPrixTTC($taux) {
        return $this->prix + ($this->prix * $taux / 100);
    }
}

if (!isset($_POST['etape']) || $_POST['etape'] == 1) {
    ?>
    <h1>how many prodect</h1>
    <form method="post">
        <input type="number" name="nombre" min="1" required>
        <input type="hidden" name="etape" value="2">
        <input type="submit" value="Valider">
    </form>
    <?php
}

elseif ($_POST['etape'] == 2 && isset($_POST['nombre'])) {
    $nombre = intval($_POST['nombre']);
    ?>
    <h1>Entrez les détails des produits</h1>
    <form method="post">
        <?php for ($i = 0; $i < $nombre; $i++): ?>
            <p>
                Produit <?php echo $i+1; ?>:<br>
                Nom: <input type="text" name="nom[]" required><br>
                Prix: <input type="number" name="prix[]" required><br>
            </p>
        <?php endfor; ?>
        <input type="hidden" name="etape" value="3">
        <input type="submit" value="Afficher les prix">
    </form>
    <?php
}

elseif ($_POST['etape'] == 3 && isset($_POST['nom']) && isset($_POST['prix'])) {
    $noms = $_POST['nom'];
    $prixs = $_POST['prix'];
    $produits = [];

    for ($i = 0; $i < count($noms); $i++) {
        $produits[] = new Produit($noms[$i], $prixs[$i]);
    }

    $tauxTVA = 19;

    echo "<h1>Liste des Produits avec Prix HT et TTC</h1>";
    foreach ($produits as $p) {
        echo "<p>";
        echo "<strong>Produit :</strong> " . $p->nom . "<br>";
        echo "Prix HT : " . $p->prix . " DA<br>";
        echo "Prix TTC (TVA $tauxTVA%) : " . $p->getPrixTTC($tauxTVA) . " DA";
        echo "</p><hr>";
    }
}
?>

</body>
</html>