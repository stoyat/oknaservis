<?php
//����������� �����
error_reporting(E_ALL);
//��������� � ����� � ������
define("ROOT", dirname(__FILE__));
//���������� ������������ �������
include_once (ROOT.'/components/Autoload.php');
//
$define = new Routes();
$define->run();