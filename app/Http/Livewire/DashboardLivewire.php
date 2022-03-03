<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\User;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Carbon\Carbon;
use Numbers\Number;
use Livewire\Component;
use Auth;

class DashboardLivewire extends Component
{
    public function render()
    {

        $user = User::find(\Auth::id());
        if ($user->hasRole('admin')) {
            $totalOrders = Number::n(Order::mine()->count())->round(3)->getSuffixNotation();
        }
        else if($user->hasRole('client')){
            $totalOrders = Number::n(Order::where('user_id',$user->id)->count())->round(3)->getSuffixNotation();
        } 
       
        $totalClients = Number::n(User::client()->count())->round(3)->getSuffixNotation();

        return view('livewire.dashboard', [
            "totalOrders" => $totalOrders,
            "totalClients" => $totalClients,

            "usersChart" => $this->usersChart(),
            "ordersChart" => $this->ordersChart(),
        ]);
    }


    public function usersChart()
    {

        //
        $chart = (new LineChartModel())->setTitle(__('Users This Week'))->withoutLegend();

        for ($loop = 0; $loop < 7; $loop++) {
            $date = Carbon::now()->startOfWeek()->addDays($loop);
            $formattedDate = $date->format("D");
            $data = User::whereDate("created_at", $date)->count();

            //
            $chart->addPoint(
                $formattedDate,
                $data,
                $this->genColor(),
            );
        }


        return $chart;
    }

    public function ordersChart()
    {
        //
        $chart = (new LineChartModel())->setTitle(__('Total Orders') . ' (' . Date("Y") . ')')->withoutLegend();

        for ($loop = 0; $loop < 12; $loop++) {
            $date = Carbon::now()->firstOfYear()->addMonths($loop);
            $formattedDate = $date->format("M");
            $data = Order::mine()->whereMonth("created_at", $date)->count();

            //
            $chart->addPoint(
                $formattedDate,
                $data,
                $this->genColor(),
            );
        }

        return $chart;
    }

    public function genColor()
    {
        return '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }
}
