<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class StoreController extends Controller
{
    /**
     * @Route("/products", name="store_products")
     */
    public function productsAction()
    {
        $mark_list = array(
            'Toutes les marques',
            'Adidas',
            'Asics',
            'Nike',
            'Puma'
        );

        $product_list = array(
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-1.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-2.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-3.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-4.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-5.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-6.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-7.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-8.jpg'
            ),
            array(
                'product_name'        => 'Nom du produit',
                'product_description' => 'Une description courte du produit sera affichée à cet endroit.',
                'product_price'       => 120,
                'product_image'       => 'public/img/products/shoe-9.jpg'
            )
        );

        $data_blundle = array(
            'mark_list'    => $mark_list,
            'product_list' => $product_list
        );

        return $this->render('store/products/product-list.html.twig', $data_blundle);
    }

    /**
     * @Route("/product/{id}/details/{slug}",name="store_product",requirements={"id"="\d+"})
     */
    public function productAction($id, $slug, Request $request)
    {
        return $this->render('store/products/product-detail.html.twig',
            array(
                'id'    => $id,
                'slug'  => $slug,
                'ipAdd' => $request->getClientIp()
            )
        );
    }
}
