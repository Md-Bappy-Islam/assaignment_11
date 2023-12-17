<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class summeryController extends Controller
{
    public function TodayTotalAmmount()
    {
        $TotoalPrice = DB::table('solds')
            ->whereDate('created_at', today())
            ->sum("total_price");

        $todaySales = DB::table('solds')
            ->whereDate('created_at', today())
            ->sum('quantity');

        $YesterdayTotalAmmount = DB::table('solds')
            ->whereBetween('created_at', [now()->subDays(1), today()])
            ->sum("total_price");

        $YesterdayTotalSale = DB::table('solds')
            ->whereBetween('created_at', [now()->subDays(1), today()])
            ->sum('quantity');

        $ThisMonthTotalAmmount = DB::table('solds')
            ->whereBetween('created_at', [now()->submonth()->endOfMonth(), now()])
            ->sum("total_price");

        $ThisMonthTotalSale = DB::table('solds')
            ->whereBetween('created_at', [now()->submonth()->endOfMonth(), now()])
            ->sum('quantity');

        $LastMonthTotalAmmount = DB::table('solds')
            ->whereBetween('created_at', [now()->submonths(1)->startOfMonth(), now()->submonths(1)->endOfMonth()])
            ->sum("total_price");

        $LastMonthTotalSale = DB::table('solds')
            ->whereBetween('created_at', [now()->submonths(1)->startOfMonth(), now()->submonths(1)->endOfMonth()])
            ->sum('quantity');

        return view('components.users.summery', compact("todaySales", "TotoalPrice", "YesterdayTotalAmmount", "YesterdayTotalSale", "ThisMonthTotalAmmount", "ThisMonthTotalSale", "LastMonthTotalAmmount", "LastMonthTotalSale"));

    }

}
