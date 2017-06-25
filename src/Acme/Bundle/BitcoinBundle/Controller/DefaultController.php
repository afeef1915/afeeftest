<?php
 
namespace Acme\Bundle\BitcoinBundle\Controller;
header('Access-Control-Allow-Origin: *'); 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeBitcoinBundle:Default:index.html.twig');
    }
    public function datatableAction()
    {
        return $this->render('AcmeBitcoinBundle:Bitcoin:table.html.twig');
    }
    public function graphAction()
    {
        return $this->render('AcmeBitcoinBundle:Graphs:graphs.html.twig');
    }

    public function  ApiDataAction()
    {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"http://www.bitcoinrates.in/getdata.php"); 
            curl_setopt ($curl, CURLOPT_POST, true);
            curl_setopt ($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            curl_close($curl);
            echo $result;exit();
    }
}
