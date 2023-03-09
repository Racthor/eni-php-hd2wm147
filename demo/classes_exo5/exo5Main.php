<?php
require_once "./Form.class.php";

$formulaire = new Form();
$formulaire->setText("id1", "blip blop", "ploppy");
$formulaire->setText("id2");
$formulaire->setSubmit("bouton du formulaire");

echo $formulaire->getForm();