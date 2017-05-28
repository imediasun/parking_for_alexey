<?php

namespace App\Http\Controllers\Admin;

use App\Parking;
use App\Tradecentre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

/**
 * Class StatisticsController
 * @package App\Http\Controllers\Admin
 */
class StatisticsController extends IndexController
{
    /**
     * ClientsController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->template = 'admin_page';
    }

    public function tradecentres()
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['tradecentres'] = Tradecentre::all();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/statistics/tradecentres';

        return $this->renderOutput($data);
    }

    public function tradecentre(Tradecentre $tradecentre)
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['tradecentre'] = $tradecentre;
        $data['content']['parkings'] = Parking::where('tradecentre_id', $tradecentre->id)->get();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/statistics/tradecentre';

        return $this->renderOutput($data);
    }
}
