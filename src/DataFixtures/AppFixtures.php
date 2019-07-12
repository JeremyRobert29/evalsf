<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Blogpost;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        // create 20 !
        for ($i = 0; $i < 20; $i++) {
            $blogPost = new Blogpost();
            $blogPost->setTitle('blog_post '.$i);
            $blogPost->setCategory('blog_post '.$i);
            $blogPost->setContent('blog_post '.$i);
            $blogPost->setFeatured('blog_post '.$i);
            $blogPost->setSlug('blog_post '.$i);
            $blogPost->setDate(mt_rand(2000, 2019));
            $manager->persist($blogPost);
        }

        $manager->flush();
    }
}
