<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 16.4.2015
 * Time: 20:10
 */

namespace App\Http\Controllers;


use App\Repositories\Page\PageRepository;


class PageController extends Controller{
    protected $PageRepository;

    public function __construct(PageRepository $pageRepository) {

        $this->PageRepository = $pageRepository;

    }
    
    public function index () {
    
    }
    
    public function show ($slug) {

        return view('frontend.page.show',$this->PageRepository->show($slug));
    }
    

}