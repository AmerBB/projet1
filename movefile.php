<?php  namespace abeautifulsite;  session_start(); use Exception;



require_once 'dbconfig.php'; 

 

// Dans les versions de PHP antiéreures à 4.1.0, la variable $HTTP_POST_FILES
// doit être utilisée à la place de la variable $_FILES.

$uploaddir = './upload/';
$uploadfile = $uploaddir . basename($_FILES['inputfcount1']['name']);
 
/*if (move_uploaded_file($_FILES['inputfcount1']['tmp_name'], $uploadfile)) {
    echo "1";
} else {
    echo "0";
}
/**/
$files = uploadFiles('inputfcount1[]', $uploaddir, array('jpg', 'jpeg', 'png', 'pdf', 'JPG', 'JPEG', 'PNG', 'PDF'));
if($files[0] != '') {
	$stmt = $db_con->prepare("UPDATE user SET photo = :photo WHERE id = :id");
   	$stmt->bindParam(":photo",$files[0]);
   	$stmt->bindParam(":id",$_SESSION['idUserInsered']);
    $stmt->execute(); 

}else{
	echo "0";

}

function crop($image) {
    $path = 'upload/';
    require 'lib/SimpleImage.php';
    $img = new SimpleImage(); 
    $resizeImage = 'resize-'.$image; 
    $img->load($path.$image)->thumbnail(197, 182,'top')->save($path.$resizeImage);

    return $resizeImage;
}

/*echo '1';*/

function uploadFiles($nomChampTxt, $uploadTo, $extensions = NULL) {
    global $filesNotUploaded;

    $nomChampTxt = str_replace("[]", "", $nomChampTxt);
    if ($_FILES) {
        $racine = $uploadTo;
        // Pour chaque input
        for ($i = 0; $i < sizeof($_FILES[$nomChampTxt]["name"]); $i++) {

            // Si l'input est vide, on passe
            if (!$_FILES[$nomChampTxt]["name"][$i]) continue;

            $name = $_FILES[$nomChampTxt]["name"][$i];
            $ext = substr($name, strrpos($name, ".") + 1);
            if (in_array($ext, $extensions) || $extensions == NULL) {
                $nom_fichier = basename($name, "." . $ext);

                // Pour &eacute;viter d'&eacute;craser l'ancien en cas de doublon
                $n = "";
                while (file_exists("$racine/$nom_fichier$n.$ext")) $n++;
                $nom_fichier = "$nom_fichier$n.$ext";
                $nom_fichier = str_replace(" ", "_", $nom_fichier);
                $nom_fichier = strtr($nom_fichier, 'AÁÂAÄAÇEÉEËIÍÎIOÓÔOÖUÚUÜÝaáâaäaçeéeëiíîioóôoöuúuüýy', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiiooooouuuuyy');
                $nom_fichier = strtolower($nom_fichier);
                $fichiers[] = $nom_fichier;
                // Fin de l'upload
                if (@move_uploaded_file($_FILES[$nomChampTxt]["tmp_name"][$i], "$racine/$nom_fichier")) {
                    $_SESSION['photo'] = $nom_fichier;
                    @chmod("$racine/$nom_fichier", 0777);
                    $nom_fichier = crop($nom_fichier);
                    @chmod("$racine/$nom_fichier", 0777);
                    echo json_encode($nom_fichier);
                } else {
                    //echo "Erreur, impossible d'envoyer le fichier <i>$nom_fichier</i><br>\n";
                }
            }
        }

    }
    return @$fichiers;
}

?>