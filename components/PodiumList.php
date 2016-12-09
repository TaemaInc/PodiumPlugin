<?php

namespace MathieuTanguay\Podium\Components;

use Cms\Classes\ComponentBase;
use MathieuTanguay\Podium\Models\Result;

/**
 * Class PodiumList
 *
 * @package MathieuTanguay\Podium\Components
 *
 * @author Mathieu Tanguay <mathieu.tanguay871@gmail.com>
 * @copyright Mathieu Tanguay
 */
class PodiumList extends ComponentBase
{
    public $results;

    /**
     * Returns information about this component, including name and description.
     */
    public function componentDetails()
    {
        return [
            'name' => 'Podium Result List',
            'description' => 'Displays a list of competition/race/event results'
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/mathieutanguay/podium/assets/css/style.css');

        $this->results = Result::orderBy('discipline', 'asc')
            ->orderBy('date', 'desc')
            ->get()
            ->groupBy('discipline')->all();
    }
}