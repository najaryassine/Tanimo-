<?php
include_once '../../model/Commande.php';
include_once '../../controller/CommandeC.php';
include_once '../../controller/ArtcomC.php';


session_start();
$commandeC=new CommandeC();
$artcomC = new ArtcomC();
if (isset($_GET['id'])) {
    $listeArticles = $artcomC->afficherMesCommandeByIdCmd($_GET['id'],$_SESSION["user_id"]);
    $commande = $commandeC->afficherCommande($_GET['id']);
}



// Include the main TCPDF library (search for installation path).
require_once('C:\xampp\htdocs\Tanimo-\view\front\vendor\tcpdf_min/tcpdf.php');
// include PDF parser class
require_once('C:\xampp\htdocs\Tanimo-\view\front\vendor\tcpdf_min/tcpdf_parser.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Amicale STB Bank');
$pdf->SetTitle('Liste des participants');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Commande', 'Tanimo');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// add a page
$pdf->AddPage();

$output='';
foreach($listeArticles as $article):
$output.= '
                
                    <tr>
                        <th scope="row">'.$article['name'].'</th>
                        <td>'. $article['unit_prix'].'</td>
                        <td>'.$article['Qte'].'</td>
                        <td><img class="card-img-top" src="../../uploads/'.$article['image'].'" alt="Card image cap"></td>
                    </tr>
                   ';
endforeach;
$html='';                                                      
$html .= '    
            
            <ul class="list-group">
                
                <li class="list-group-item"> <h5 style="color: black">Afficher  commande Ref: '. $commande['id_cmd'].'</h5>  </li>
            </ul>    
                
                
                
            
                <table class="table" border="2" >
                <thead>
                <tr>
                    <th scope="col">Article</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Qte</th>
                    <th scope="col">Image</th>

                </tr>
                </thead>
                <tbody>
               '.$output.'
                </tbody>
            </table>
                
            <ul class="list-group">
                
               
                <li class="list-group-item">boutique:'. $commande['boutique'].' </li>
                <li class="list-group-item">etat:'.$commande['etat'].' </li>
                <li class="list-group-item">Total Prix:'. $commande['prix'].'.Dt </li>

            </ul>  ';




 
$pdf->writeHTML($html, true, false, true, false, '');
// add a page


// reset pointer to the last page
$pdf->lastPage();
//Close and output PDF document
$pdf->Output('Commande_'.$commande['id_cmd'], 'I');