<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class RPRController
{
#[Route('/api/rpr', name: 'rpr_hello')]
public function index(): Response
{
return new Response('symfony de Raul Povedano Ruiz Responde a la llamada de
React');
}
}
