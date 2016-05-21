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
    public function contactAction()
    {
        return $this->render('LVBundle:LV:video.html.twig');
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
        $response = $youtube->searchVideo($keyword,null,5);

        return $this->render('LVBundle:LV:view-video.html.twig', array(
            "video" => $result,
            "videos" => $response,
            "keyword" => $keyword,

        ));
    }


}
