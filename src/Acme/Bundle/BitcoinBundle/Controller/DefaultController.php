<?php
 
namespace Acme\Bundle\BitcoinBundle\Controller;
header('Access-Control-Allow-Origin: *'); 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Cookie;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;

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

     public function AlertAction()
    {
        return $this->render('AcmeBitcoinBundle:Bitcoin:alert.html.twig');
    }
     public function MangeAlertAction()
    {
        return $this->render('AcmeBitcoinBundle:Bitcoin:manage-alert.html.twig');
    }
    
    public function  ApiDataAction()
    {
            // $curl = curl_init();
            // curl_setopt($curl, CURLOPT_URL,"http://www.bitcoinrates.in/getdata.php"); 
            // curl_setopt ($curl, CURLOPT_POST, true);
            // curl_setopt ($curl, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            // $result = curl_exec($curl);
            // curl_close($curl);
            // echo $result;exit();
            $url="http://www.bitcoinrates.in/getdata.php";
            $result = file_get_contents($url);
            $data=json_decode($result, true);
            $json= json_encode($data);

            print_r($json);
            die;
        }
            
}
