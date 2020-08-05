<?php


namespace App\Controller;


use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\ProprieteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 *
 * @Route("/", name="site_")
 */
class IndexController extends AbstractController
{
    /**
     * @var ProprieteRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    public function __construct(ProprieteRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->repository = $repository;
        $this->entityManager = $entityManager;
    }

    /**
     * @return Response
     * @Route("/", name="index")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $search = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);

        $proprietes = $paginator->paginate(
            $this->repository->findAllVisibleQuery($search),
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('Site/HomePage.html.twig', [
            'proprietes' => $proprietes
        ]);
    }
}