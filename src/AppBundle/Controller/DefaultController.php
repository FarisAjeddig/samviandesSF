<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request){
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("/produits", name="products")
     */
    public function productAction(Request $request){

//        $boeuf = [
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ]
//        ];
//
//        $agneau = [
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/agneau/cote.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/agneau/cote.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/agneau/cote.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/agneau/cote.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ]
//        ];
//
//        $veau = [
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ]
//        ];
//
//        $volaille = [
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ],
//            [
//                "name" => "Côte de boeuf",
//                "alt" => "Côte de boeuf - Boucherie SAM Levallois",
//                "price" => "19.95€",
//                "unit" => "le kg",
//                "image" => "images/beef/beef.jpg"
//            ]
//        ];

        $repository = $this->getDoctrine()->getManager()
            ->getRepository(Product::class);

        $boeuf = [];
        $agneau = [];
        $veau = [];
        $volaille = [];

        foreach ($repository->findAll() as $item){
            if ($item->getAnimal()=="boeuf"){
                $boeuf[]=$item;
            } elseif ($item->getAnimal()=="agneau"){
                $agneau[] = $item;
            } elseif ($item->getAnimal()=="veau"){
                $veau[] = $item;
            } elseif ($item->getAnimal()=="volaille"){
                $volaille[] = $item;
            }
        }

        return $this->render('default/products.html.twig', [
            'boeuf' => $boeuf,
            'agneau' => $agneau,
            'veau' => $veau,
            'volaille' => $volaille
        ]);
    }

    /**
     * @Route("/admin/produits", name="admin_products")
     */
    public function adminProductAction(Request $request){
        $repository = $this->getDoctrine()->getManager()
            ->getRepository(Product::class);

        $boeuf = [];
        $agneau = [];
        $veau = [];
        $volaille = [];

        foreach ($repository->findAll() as $item){
            if ($item->getAnimal()=="boeuf"){
                $boeuf[]=$item;
            } elseif ($item->getAnimal()=="agneau"){
                $agneau[] = $item;
            } elseif ($item->getAnimal()=="veau"){
                $veau[] = $item;
            } elseif ($item->getAnimal()=="volaille"){
                $volaille[] = $item;
            }
        }

        return $this->render('admin/products.html.twig', [
            'boeuf' => $boeuf,
            'agneau' => $agneau,
            'veau' => $veau,
            'volaille' => $volaille
        ]);
    }

    /**
     * @Route("/admin/produits/creation", name="admin_create_product")
     */
    public function adminProductCreateAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $newProduct = new Product();

        $form = $this -> get('form.factory')->create(ProductType::class, $newProduct)
            ->add('picture', FileType::class, ['label'=>'Photo associée au produit', 'data_class' => null])
            ->add("Créer", SubmitType::class, ["attr" => [ "class" => "btn-primary btn-block"]]);

        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isValid()) {

            $picture = $form['picture']->getData();
//            dump($picture);die;

            if ($picture) {
                $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
//                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $picture->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $picture->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $newProduct->setPicture($newFilename);

                $em->persist($newProduct);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', "Le produit a bien été créé.");
                return $this->redirectToRoute('admin_products');
            }
        }
        return $this->render('admin/createProduct.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/produits/modifier/{id}", name="admin_products_edit")
     */
    public function adminProductEditAction($id, Request $request){
        $repository = $this->getDoctrine()->getManager()->getRepository(Product::class);
        $product = $repository->find($id);

        $form = $this->get('form.factory')->create(ProductType::class, $product)
            ->add("Modifier", SubmitType::class, ["attr" => [ "class" => "btn-primary btn-block"]]);

        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le produit a bien été modifié.");
            return $this->redirectToRoute('admin_products');
        }
        return $this->render('admin/createProduct.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/produits/supprimer/{id}", name="admin_products_delete")
     */
    public function adminProductDeleteAction($id, Request $request){
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $em = $this->getDoctrine()->getManager();

        $em->remove($repo->find($id));
        $em->flush();

        $request->getSession()->getFlashBag()->add('warning', "Le produit a bien été supprimé.");
        return $this->redirectToRoute('admin_products');
    }

    /**
     * @Route("/admin/produits/image/{id}", name="admin_product_image")
     */
    public function adminProductImageAction($id, Request $request){
        $repository = $this->getDoctrine()->getManager()->getRepository(Product::class);
        $product = $repository->find($id);

        $form = $this->createFormBuilder()
            ->add("picture", FileType::class, ['label' => 'Nouvelle image', 'data_class' => null])
            ->add("Envoyer", SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($request->isMethod('POST')){
            $file = $form->getData()['picture'];

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter('pictures_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                dump($e);die;
                // ... handle exception if something happens during file upload
            }

            // updates the 'picture' property to store the PDF file name
            // instead of its contents
            $product->setPicture($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', "L'image a bien été modifiée");

            return $this->redirectToRoute('admin_products');
        }


        return $this->render('admin/editImageProduct.html.twig', [
            'party' => $product,
            'form' => $form->createView()
        ]);
    }
}