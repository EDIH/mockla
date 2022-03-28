<?php
namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class LocaleLinksWidget implements ContractWidget
{
    protected $page = 0;

    public function __construct($data = []){
        if (isset($data['page'])){
            $this->page = $data['page'];
        }
    }

    /**
     * @return View
     */
    public function execute(): View
    {

//        TODO CACHE IT
        $links = [];
        $isoById = Cache::get('languages')->flip();

        foreach($this->page->seos as $seo) {
            $lang_id = $seo->lang_id;

            if($isoById->get($lang_id) != App::getLocale()) {
                $links[$isoById->get($lang_id)] = "/{$isoById->get($lang_id)}/{$seo->alias}";
            } else {
                $links[$isoById->get($lang_id)] = false;
            }

        }

        return view('Widgets::localeLinks', [
            'links' => $links
        ]);
    }
}