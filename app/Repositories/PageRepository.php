<?php

namespace App\Repositories;

use App\Models\Page;
use App\Repositories\Lingual\AdditionRepository;
use App\Repositories\Lingual\SeoRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PageRepository
{
    private $additionRepository;
    private $seoRepository;
    private $page;

    public function __construct(
        AdditionRepository $additionRepository,
        SeoRepository      $seoRepository)
    {
        $this->additionRepository = $additionRepository;
        $this->seoRepository = $seoRepository;
    }

    public function tree()
    {
        return Page::main()
            ->with('childTree')
            ->get();
    }

    /**
     * @param array $input
     * @return Page
     */
    public function create(array $input): ?Page
    {
        $pageInput = $input['page'];
        $seoInput = $input['seo'];
        $additionsInput = $input['additions'];

        DB::transaction(
            function () use ($pageInput, $seoInput, $additionsInput) {
                if ($this->page = Page::create($pageInput)) {

                    $additionTranslations = $this->additionRepository->getAttributesArrayTranslations($additionsInput);
                    $this->page->additions()->createMany($additionTranslations);

                    $seoTranslations = $this->seoRepository->getAttributesArrayTranslations($seoInput);
                    $this->page->seos()->createMany($seoTranslations);

                    return $this->page;
                }
            });
        return null;
    }

    /**
     * @param array $input
     * @return Page
     */
    public function update(Page $page, array $input): ?Page
    {
        $this->page = $page;

        $pageInput = $input['page'];
        $seoInput = $input['seo'];
        $additionsInput = $input['additions'];

        DB::transaction(
            function () use ($pageInput, $seoInput, $additionsInput) {
                if ($this->page->update($pageInput)) {

                    $additionTranslations = $this->additionRepository->getAttributesArrayTranslations($additionsInput);
                    foreach ($additionTranslations as $translation) {
                        $this
                            ->page
                            ->additions()
                            ->updateOrCreate(
                                Arr::only($translation, 'lang_id'),
                                $translation
                            );
                    }

                    $seoTranslations = $this->seoRepository->getAttributesArrayTranslations($seoInput);
                    foreach ($seoTranslations as $translation) {
                        $this
                            ->page
                            ->seos()
                            ->updateOrCreate(
                                Arr::only($translation, 'lang_id'),
                                $translation
                            );
                    }

                    return $this->page;
                }
            });

        return null;
    }

    /**
     * @param string $alias
     * @return Page
     */
    public function getByAlias(string $alias): Page
    {
//        TOFIX add default model value instead 404
        return
            Page::whereHas('seo', function (Builder $query) use ($alias) {
                $query->where('alias', $alias);
            })
                ->with(['seo', 'addition'])
                ->first()
            ??
            Page::whereHas('seo', function (Builder $query) {
                $query->where('alias', 404);
            })
                ->with(['seo', 'addition'])
                ->first();

    }
}