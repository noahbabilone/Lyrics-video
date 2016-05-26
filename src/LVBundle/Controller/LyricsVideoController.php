<?php

namespace LVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LyricsVideoController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction()
    {
        return $this->render('LVBundle:LV:index.html.twig');
    }

    /**
     * @Route("/videos.html", name="list_video")
     */
    public function videoAction()
    {
        
        $data = array(
            ["start" => "00:00:00", "end" => "00:00:08", "text" => "(Commence à 8 secondes)"],
            ["start" => "00:00:08", "end" => "00:00:14", "text" => "Je garde un œil sur toi, Même si tu crois qu'c'est faux"],
            ["start" => "00:00:14",
                "end" => "00:00:20",
                "text" => "Je garde un œil sur toi, tu es différente des autres <br> Surtout ne t’inquiète pas"
            ],
            ["start" => "00:00:20",
                "end" => "00:00:27",
                "text" => "D'ici je surveille ton dos, mais tout ça je n'te le dis pas,<br> Je suis du genre à faire profil bas"
            ],
            ["start" => "00:00:27",
                "end" => "00:00:32",
                "text" => "Tu veux que je délaisse la musique et le ness-bi, Canon sur la tempe tu me braques pour un baby"
            ],
            ["start" => "00:00:32",
                "end" => "00:00:37",
                "text" => "Continuer tout seul ou ensemble, j'ai déjà choisi<br> Si t'es prête à prendre quelques risques allons-y <br> Mais tu sais..."
            ],

            ["start" => "00:00:37",
                "end" => "00:00:47",
                "text" => "J'te ralentis car j'ai peur d'échouer, c'est compliqué <br>  Je ne suis qu'un homme, difficile d'avouer que j'suis piqué"
            ],
            ["start" => "00:00:47",
                "end" => "00:00:56",
                "text" => "Reste en retrait, ne viens pas me demander de t'expliquer <br>  Faut m'excuser, mais demain"
            ],
            ["start" => "00:00:56", "end" => "00:01:05", "text" => "Aime-moi demain, demain hé <br> Aime-moi demain, demain"],
            ["start" => "00:01:05",
                "end" => "00:01:12",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],


            ["start" => "00:01:13",
                "end" => "00:01:23",
                "text" => "C'est compliqué dans ma vie laisse-moi faire les choses.<br> Nous deux c'est fini laisse-moi faire une pause"
            ],
            ["start" => "00:01:23",
                "end" => "00:01:31",
                "text" => "C'qui nous sépare mon amour c'est les billets mauves <br> Ainsi va la vie ne crois pas qu'tout est rose"
            ],
            ["start" => "00:01:31",
                "end" => "00:01:36",
                "text" => "Et si tu veux partir c'est maintenant. <br> J'te remplacerai jamais par une autre"
            ],
            ["start" => "00:01:36",
                "end" => "00:01:41",
                "text" => "On s'aime, on s'fait la guerre mais pourtant. <br> On s'rejette souvent, oui, la faute sur l'autre"
            ],

            ["start" => "00:01:41",
                "end" => "00:01:52",
                "text" => "J'te ralentis car j'ai peur d'échouer, c'est compliqué <br>  Je ne suis qu'un homme, difficile d'avouer que j'suis piqué"
            ],
            ["start" => "00:01:52",
                "end" => "00:02:01",
                "text" => "Reste en retrait, ne viens pas me demander de t'expliquer <br>  Faut m'excuser, mais demain"
            ],
            ["start" => "00:02:01", "end" => "00:02:10", "text" => "Aime-moi demain, demain hé <br> Aime-moi demain, demain"],
            ["start" => "00:02:10",
                "end" => "00:02:19",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],


            ["start" => "00:02:18",
                "end" => "00:02:27",
                "text" => " Même si j'évite les coups du sort <br> Aime-moi demain parce qu'aujourd'hui je n'trouve plus de fille bien (Stop)"
            ],

            ["start" => "00:02:27",
                "end" => "00:02:36",
                "text" => "Pardonne-moi si j'ai eu tort, tort de m'imposer, la sagesse d'oser"
            ],
            ["start" => "00:02:36",
                "end" => "00:02:40",
                "text" => "De paraître trop sûr de moi-même, autant j'ai mes joies, autant j'ai mes peines "
            ],
            ["start" => "00:02:40",
                "end" => "00:02:42",
                "text" => "Au cœur en effet, j'connais mes faiblesses, je ne suis pas si mauvais"
            ],
            ["start" => "00:02:42",
                "end" => "00:02:50",
                "text" => "Mais ceux à qui j'ai donné me détestent <br> Si je réussi tu m'aimeras demain. Mais m'aimais-tu hier?"
            ],
            ["start" => "00:02:50",
                "end" => "00:02:55",
                "text" => "Quand j'te demande de me tendre la main, Tu b-b-g-g-g-bégaye"
            ],

            ["start" => "00:02:55",
                "end" => "00:03:04",
                "text" => "J'te ralentis car j'ai peur d'échouer, c'est compliqué <br> Je ne suis qu'un homme, difficile d'avouer que j'suis piqué"
            ],
            ["start" => "00:03:04",
                "end" => "00:03:13",
                "text" => "Reste en retrait, ne viens pas me demander de t'expliquer <br> Faut m'excuser, mais demain"
            ],
            ["start" => "00:03:13", "end" => "00:03:22", "text" => "Aime-moi demain, demain hé <br> Aime-moi demain, demain"],
            ["start" => "00:03:22",
                "end" => "00:03:31",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],
            ["start" => "00:03:31", "end" => "00:03:42", "text" => "Demain, Demain <br> Aime moi demain yeah, Demain (2x)"],
            ["start" => "00:03:42",
                "end" => "00:03:48",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],
            ["start" => "00:03:48",
                "end" => "00:03:50",
                "text" => "YannDev (Noahbabilone)"
            ]
        );
        return $this->render('LVBundle:LV:video.html.twig', array(
            "data" => json_encode($data),
        ));
    }

     /**
     * @Route("/add-video.html", name="add_video")
     */
    public function addVideoAction()
    {
        return $this->render('LVBundle:LV:add-video.html.twig', array(
        ));
    }

    
    /**
     * @Route("/search/{keyword}", name="youtube_search")
     * @param $keyword
     * @return Response
     */
    public function searchVideoAction($keyword)
    {
        $youtube = $this->get("youtube_api");
        $result = $youtube->searchVideo($keyword, null);

        return $this->render('LVBundle:LV:pages.html.twig', array(
            "videos" => $result,
            "keyword" => $keyword,

        ));
    }

    /**
     * @Route("/search/{keyword}&page={token}", name="youtube_token")
     * @param $keyword
     * @param $token
     * @return Response
     */
    public function searchVideoViaTokenAction($keyword, $token)
    {
        $youtube = $this->get("youtube_api");
        $result = $youtube->searchVideo($keyword, $token);

        return $this->render('LVBundle:LV:pages.html.twig', array(
            "videos" => $result,
            "keyword" => $keyword,
        ));
    }

    /**
     * @Route("/youtube/watch?v={id}&search={keyword}", name="youtube_get_video")
     * @param $id
     * @return Response
     */
    public function getVideoYoutubeAction($id, $keyword)
    {
        $youtube = $this->get("youtube_api");
        $result = $youtube->getVideoYoutube($id);
        $response = $youtube->searchVideo($keyword, null, 5);

        return $this->render('LVBundle:LV:view-video.html.twig', array(
            "video" => $result,
            "videos" => $response,
            "keyword" => $keyword,

        ));
    }


}

/*
 * $data = array(
            ["firstName" => "John", "lastName" => "Doe"],
            ["firstName" => "John", "lastName" => "Doe"],
            ["firstName" => "John", "lastName" => "Doe"],
            ["firstName" => "John", "lastName" => "Doe"],
        );


        $data = array(
            ["start" => "00:00:00", "end" => "00:00:08", "text" => "(Commence à 8 secondes)"],
            ["start" => "00:00:08", "end" => "00:00:14", "text" => "Je garde un œil sur toi, Même si tu crois qu'c'est faux"],
            ["start" => "00:00:14",
                "end" => "00:00:20",
                "text" => "Je garde un œil sur toi, tu es différente des autres <br> Surtout ne t’inquiète pas"
            ],
            ["start" => "00:00:20",
                "end" => "00:00:27",
                "text" => "D'ici je surveille ton dos, mais tout ça je n'te le dis pas,<br> Je suis du genre à faire profil bas"
            ],
            ["start" => "00:00:27",
                "end" => "00:00:32",
                "text" => "Tu veux que je délaisse la musique et le ness-bi, Canon sur la tempe tu me braques pour un baby"
            ],
            ["start" => "00:00:32",
                "end" => "00:00:37",
                "text" => "Continuer tout seul ou ensemble, j'ai déjà choisi<br> Si t'es prête à prendre quelques risques allons-y <br> Mais tu sais..."
            ],

            ["start" => "00:00:37",
                "end" => "00:00:47",
                "text" => "J'te ralentis car j'ai peur d'échouer, c'est compliqué <br>  Je ne suis qu'un homme, difficile d'avouer que j'suis piqué"
            ],
            ["start" => "00:00:47",
                "end" => "00:00:56",
                "text" => "Reste en retrait, ne viens pas me demander de t'expliquer <br>  Faut m'excuser, mais demain"
            ],
            ["start" => "00:00:56", "end" => "00:01:05", "text" => "Aime-moi demain, demain hé <br> Aime-moi demain, demain"],
            ["start" => "00:01:05",
                "end" => "00:01:12",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],


            ["start" => "00:01:13",
                "end" => "00:01:23",
                "text" => "C'est compliqué dans ma vie laisse-moi faire les choses.<br> Nous deux c'est fini laisse-moi faire une pause"
            ],
            ["start" => "00:01:23",
                "end" => "00:01:31",
                "text" => "C'qui nous sépare mon amour c'est les billets mauves <br> Ainsi va la vie ne crois pas qu'tout est rose"
            ],
            ["start" => "00:01:31",
                "end" => "00:01:36",
                "text" => "Et si tu veux partir c'est maintenant. <br> J'te remplacerai jamais par une autre"
            ],
            ["start" => "00:01:36",
                "end" => "00:01:41",
                "text" => "On s'aime, on s'fait la guerre mais pourtant. <br> On s'rejette souvent, oui, la faute sur l'autre"
            ],

            ["start" => "00:01:41",
                "end" => "00:01:52",
                "text" => "J'te ralentis car j'ai peur d'échouer, c'est compliqué <br>  Je ne suis qu'un homme, difficile d'avouer que j'suis piqué"
            ],
            ["start" => "00:01:52",
                "end" => "00:02:01",
                "text" => "Reste en retrait, ne viens pas me demander de t'expliquer <br>  Faut m'excuser, mais demain"
            ],
            ["start" => "00:02:01", "end" => "00:02:10", "text" => "Aime-moi demain, demain hé <br> Aime-moi demain, demain"],
            ["start" => "00:02:10",
                "end" => "00:02:19",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],


            ["start" => "00:02:18",
                "end" => "00:02:27",
                "text" => " Même si j'évite les coups du sort <br> Aime-moi demain parce qu'aujourd'hui je n'trouve plus de fille bien (Stop)"
            ],

            ["start" => "00:02:27",
                "end" => "00:02:36",
                "text" => "Pardonne-moi si j'ai eu tort, tort de m'imposer, la sagesse d'oser"
            ],
            ["start" => "00:02:36",
                "end" => "00:02:40",
                "text" => "De paraître trop sûr de moi-même, autant j'ai mes joies, autant j'ai mes peines "
            ],
            ["start" => "00:02:40",
                "end" => "00:02:42",
                "text" => "Au cœur en effet, j'connais mes faiblesses, je ne suis pas si mauvais"
            ],
            ["start" => "00:02:42",
                "end" => "00:02:50",
                "text" => "Mais ceux à qui j'ai donné me détestent <br> Si je réussi tu m'aimeras demain. Mais m'aimais-tu hier?"
            ],
            ["start" => "00:02:50",
                "end" => "00:02:55",
                "text" => "Quand j'te demande de me tendre la main, Tu b-b-g-g-g-bégaye"
            ],

            ["start" => "00:02:55",
                "end" => "00:03:04",
                "text" => "J'te ralentis car j'ai peur d'échouer, c'est compliqué <br> Je ne suis qu'un homme, difficile d'avouer que j'suis piqué"
            ],
            ["start" => "00:03:04",
                "end" => "00:03:13",
                "text" => "Reste en retrait, ne viens pas me demander de t'expliquer <br> Faut m'excuser, mais demain"
            ],
            ["start" => "00:03:13", "end" => "00:03:22", "text" => "Aime-moi demain, demain hé <br> Aime-moi demain, demain"],
            ["start" => "00:03:22",
                "end" => "00:03:31",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],
            ["start" => "00:03:31", "end" => "00:03:42", "text" => "Demain, Demain <br> Aime moi demain yeah, Demain (2x)"],
            ["start" => "00:03:42",
                "end" => "00:03:48",
                "text" => "Aime-moi demain <br> Aujourd'hui c'est la merde dans ma life. Donc aime moi demain, Oh oh ah"
            ],
            ["start" => "00:03:48",
                "end" => "00:03:50",
                "text" => "YannDev (Noahbabilone)"
            ]
        );*/
