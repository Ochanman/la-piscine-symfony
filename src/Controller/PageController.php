<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * */
    public function home()
    {
        // je veux utiliser un fichier HTML en tant que réponse
        // HTTP
        // pour ça j'appelle la méthode render (issue de l'AbstractController)
        // et je lui passe en premier parametre le nom / le chemin du fichier
        // twig (html) situé dans le dossier template
        return $this->render("home.html.twig");
    }

    /**
     * @Route("/contact", name="contact")
     * */
    public function contact()
    {
        // je veux utiliser un fichier HTML en tant que réponse
        // HTTP
        // pour ça j'appelle la méthode render (issue de l'AbstractController)
        // et je lui passe en premier parametre le nom / le chemin du fichier
        // twig (html) situé dans le dossier template
        return $this->render("contact.html.twig");
    }

    /**
     *je créé une route article qui attend un id dans l'url 'wildcard' et qui porte le nom de article
     * @Route("/article/{id}", name="article")
     **/
//    l'id de l url devient une variable que j'intègre dans ma methode
    public function ShowArticle($id)
    {
        $articles = [
            1 => [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 1
            ],
            2 => [
                "title" => "Le PHP c'est vraiment trop génial 2",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 4
            ],
            5 => [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 5
            ]
        ];
        if (!array_key_exists($id, $articles)) {
            throw $this->createNotFoundException('Petit malin! tu n\'as rien à faire ici!!!');
        }
//je cree une variable article qui renvoi  a twing la partie de tableau comportant l'id via la methode render
        return $this->render("article.html.twig", ["article" => $articles[$id]]);

    }

    /**
     *
     * @Route("/articles", name="articles")
     */
    public function ShowArticles()
    {
        $articles = [
            1 => [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 1
            ],
            2 => [
                "title" => "Le PHP c'est vraiment trop génial 2",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 4
            ],
            5 => [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 5
            ]
        ];

        return $this->render("articles.html.twig", ["articles" => $articles]);

    }

}