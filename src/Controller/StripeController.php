<?php
 
namespace App\Controller;
 
use Stripe;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
class StripeController extends AbstractController
{
   
 
 
    #[Route('/stripe/create-charge/{commande}', name: 'app_stripe_charge', methods: ['POST'])]
    public function createCharge(Request $request, commande $commande)
    {
        Stripe\Stripe::setApiKey("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");
        Stripe\Charge::create ([
                "amount" =>$commande->getTotal()*100,
                "currency" => "eur",
                "source" => $request->request->get('stripeToken'),
                "description" => "Binaryboxtuts Payment Test"
        ]);
        $this->addFlash(
            'success',
            'Payment Successful!'
        );
        return $this->redirectToRoute('app_stripe', ["commande" => 1], Response::HTTP_SEE_OTHER);
    }

    #[Route('/stripe/{commande}', name: 'app_stripe')]
    public function index(Commande $commande): Response
    {
        return $this->render('stripe/index.html.twig', [
            'stripe_key' => "pk_test_51N0iZNFPaCkpFiEQIRkmwkEx6UCjr8m8s0LcjS3EcmQgFWKtdAz1oPVQMe8WutgffPIDLBQGRszwqnsmDvqZqZKY00Yub5vCGv",
                'commande'=>$commande
        
        ]);
    }
}