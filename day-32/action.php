<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;
$home = new Home();
if(isset($_GET['page']))
{
    if($_GET['page']=='category')
    {
        $home->categoryProduct($_GET['id']);
    }
    elseif ($_GET['page']=='home')
    {
        $home->index();
    }
    elseif ($_GET['page']=='detail')
    {
        $home->productDetail($_GET['id']);
    }
    elseif($_GET['page']='full_name')
    {
        $home->fullName();
    }
}
elseif (isset($_POST['full_name_btn']))
{
    $fullName= new FullName();
    $fullName->makeFullName($_POST);
}