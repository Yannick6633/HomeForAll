<?php


namespace App\Controller;


use App\Entity\Contact;
use App\Entity\PropertySearch;
use App\Entity\Propriete;
use App\Form\ContactType;
use App\Form\PropertySearchType;
use App\Notification\ContactNotification;
use App\Repository\ProprieteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PropertyController
 * @package App\Controller
 *
 * @Route("/proprietes", name="site_properties_")
 */
class PropertyController extends AbstractController
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
        //$this->twig = $twig;
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
        return $this->render('Site/Properties.html.twig', [
            'proprietes' => $proprietes
        ]);
    }

    /*/**
     * @Route("/{id}", name="property")
     */
    /*public function property() {
        return $this->render('Site/Property.html.twig');
    }*/

    /**
     * @Route("/{slug}-{id}", name="propriete.show2", requirements={"slug": "[a-z0-9\-]*"})
     * @param Propriete $propriete
     * @return Response
     */
    public function show(Propriete $propriete, string $slug, Request $request, ContactNotification $notification): Response
    {

        if ($propriete->getSlug() !== $slug) {
            return $this->redirectToRoute('site_properties_propriete.show2', [
                'id' => $propriete->getId(),
                'slug' => $propriete->getSlug()
            ], 301);
        }

        $contact = new Contact();
        $contact->setPropriete($propriete);
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('site_properties_propriete.show2', [
                'id' => $propriete->getId(),
                'slug' => $propriete->getSlug()
            ]);
        }

        return $this->render('propriete/show2.html.twig', [
            'propriete' => $propriete,
            'form' => $form->createView()
        ]);
    }
}