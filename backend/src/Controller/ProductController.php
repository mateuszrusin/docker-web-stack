<?php
namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show($id): Response
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        $form = $this->createFormBuilder($product)
            ->add('name', TextType::class)
            ->add('kcal', IntegerType::class)
            ->add('protein', NumberType::class)
            ->add('fat', NumberType::class)
            ->add('carbo', NumberType::class)
            ->add('save', SubmitType::class, ['label' => 'OK'])
            ->setAction($this->generateUrl('api_products_patch_item', ['id' => $id]))
            ->setMethod('PATCH')
            ->getForm();

        return $this->render('product/product.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
