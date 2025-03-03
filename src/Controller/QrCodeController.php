<?php
namespace App\Controller;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Psychiatre;
use Doctrine\ORM\EntityManagerInterface;

class QrCodeController extends AbstractController
{
    #[Route('/qr-code/{id}', name: 'qr_code')]
    public function generateQrCode(EntityManagerInterface $entityManager, int $id): Response
    {
        // Récupérer les informations du psychiatre
        $psychiatre = $entityManager->getRepository(Psychiatre::class)->find($id);

        if (!$psychiatre) {
            throw $this->createNotFoundException('Psychiatre non trouvé');
        }

        $adresse = $psychiatre->getAdresse(); // Assurez-vous que l'entité a un champ `adresse`

        $qrCode = Builder::create()
            ->writer(new PngWriter())
            ->data($adresse) // Générer un QR Code avec l'adresse du psychiatre
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->build();

        return new Response($qrCode->getString(), Response::HTTP_OK, ['Content-Type' => $qrCode->getMimeType()]);
    }
}
