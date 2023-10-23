<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class JeuxController extends AbstractController
{
    #[Route('/jeux', name: 'app_jeux')]
    public function index(Request $request): Response
    {
        $secretCode = '123456'; // Vous pouvez définir le code secret ici
    
        $userResponse = $request->request->get('response');
        $isSubmitted = $request->isMethod('POST'); // Vérifie si la requête est de type POST
    
        // Vérifie si la réponse de l'utilisateur est correcte
        $isCorrect = ($userResponse === $secretCode);
    
        return $this->render('jeux/index.html.twig', [
            'controller_name' => 'JeuxController',
            'secretCode' => $secretCode,
            'isCorrect' => $isCorrect,
            'isSubmitted' => $isSubmitted, // Ajout de isSubmitted
        ]);
    }
    

    #[Route('/jeux/etape2', name: 'jeux_etape2')]
    public function etape1(Request $request): Response
    {
        $secretCode = 'florence'; // Vous pouvez définir le lieux secret ici
    
        $userResponse = $request->request->get('response');
        $isSubmitted = $request->isMethod('POST'); // Vérifie si la requête est de type POST
        
         // Convertir la réponse de l'utilisateur et le code secret en minuscules
         $userResponse = strtolower($userResponse);
         $secretCode = strtolower($secretCode);

        // Vérifie si la réponse de l'utilisateur est correcte
        $isCorrect = ($userResponse === $secretCode);

    return $this->render('jeux/etape2.html.twig', [
        'secretCode' => $secretCode,
        'isCorrect' => $isCorrect,
        'isSubmitted' => $isSubmitted, // Ajout de isSubmitted
         ]);
    }


    #[Route('/jeux/etape3', name: 'jeux_etape3')]
    public function etape3(Request $request): Response
    {
        // Définissez un code secret pour l'étape 3
        $secretCode = 'CRYPTOGUARD'; // Remplacez par votre code secret
        
        $userResponse = $request->request->get('response');
        $isSubmitted = $request->isMethod('POST'); // Vérifie si la requête est de type POST
    
         // Convertir la réponse de l'utilisateur et le code secret en minuscules
        $userResponse = strtolower($userResponse);
        $secretCode = strtolower($secretCode);

        // Vérifie si la réponse de l'utilisateur est correcte
        $isCorrect = ($userResponse === $secretCode);

        return $this->render('jeux/etape3.html.twig', [
            'secretCode' => $secretCode,
            'isCorrect' => $isCorrect,
            'isSubmitted' => $isSubmitted, // Ajout de isSubmitted
        ]);
    }

    #[Route('/jeux/etape4', name: 'jeux_etape4')]
    public function etape4(Request $request): Response
    {
        // Définissez un code secret pour l'étape 3
        $secretCode = 'moscou'; // Remplacez par votre code secret
        
        $userResponse = $request->request->get('response');
        $isSubmitted = $request->isMethod('POST'); // Vérifie si la requête est de type POST
    
         // Convertir la réponse de l'utilisateur et le code secret en minuscules
        $userResponse = strtolower($userResponse);
        $secretCode = strtolower($secretCode);

        // Vérifie si la réponse de l'utilisateur est correcte
        $isCorrect = ($userResponse === $secretCode);

        return $this->render('jeux/etape4.html.twig', [
            'secretCode' => $secretCode,
            'isCorrect' => $isCorrect,
            'isSubmitted' => $isSubmitted, // Ajout de isSubmitted
        ]);
    }

    #[Route('/jeux/etape5', name: 'jeux_etape5')]
    public function etape5(Request $request): Response
    {
       

        return $this->render('jeux/etape5.html.twig', [
           
        ]);
    }



}
