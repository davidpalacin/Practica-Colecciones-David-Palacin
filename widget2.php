<?php
require_once("observable2.php");
require_once("abstract_widget2.php");
require_once("class.collection.php");

$dat = new DataSource();
$date = new DataSource2();

$widgetA = new BasicWidget();
$widgetB = new FancyWidget();
$widgetC = new BasicWidgetPalacin();
$widgetD = new FancyWidgetPalacin();

$widgets = new Collection(); //coleccion para widgets
$widgets->addItem($widgetA, "w1");
$widgets->addItem($widgetB, "w2");
$widgets->addItem($widgetC, "w3");
$widgets->addItem($widgetD, "w4");

$models = new Collection(); //coleccion para modelos
$models->addItem($dat, "d1");
$models->addItem($date, "d2");

$datn=$models->getItem("d1");

$datn->addObserver($widgets->getItem("w1"));
$datn->addObserver($widgets->getItem("w2"));

$daten=$models->getItem("d2");
$daten->addObserver($widgets->getItem("w3"));
$daten->addObserver($widgets->getItem("w4"));



$dat->addRecord("drum", "$12.95", 1955);
$dat->addRecord("guitar", "$13.95", 2003);
$dat->addRecord("banjo", "$100.95", 1945);
$dat->addRecord("piano", "$120.95", 1999);
$date->addRecord("drum", "$12.95", 1955, "red", 400);
$date->addRecord("guitar", "$13.95", 2003, "red", 400);
$date->addRecord("banjo", "$100.95", 1945, "red", 400);
$date->addRecord("piano", "$120.95", 1999, "red", 400);

$objW1 = $widgets->getItem("w1");
$objW2 = $widgets->getItem("w2");
$objW3 = $widgets->getItem("w3");
$objW4 = $widgets->getItem("w4");

$objW1->draw();
$objW2->draw();
$objW3->draw();
$objW4->draw();
?>