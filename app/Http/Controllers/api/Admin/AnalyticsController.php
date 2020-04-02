<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    public function fetchAnalytics () {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        Period::create($startDate, $endDate);
        $pages = Analytics::fetchMostVisitedPages(Period::days(1));
        $visitors = Analytics::fetchVisitorsAndPageViews(Period::months(12));
        $total_visitors = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $top_referrers = Analytics::fetchTopReferrers(Period::days(7));
        $user_types = Analytics::fetchUserTypes(Period::days(7));
        $top_browser = Analytics::fetchTopBrowsers(Period::days(7));
        $analyticsData = Analytics::performQuery(
        Period::years(1),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions, ga:pageviews',
                'dimensions' => 'ga:yearMonth'
            ]
        );

        return response()->json([
            'pages' => $pages,
            'visitors' => $visitors,
            'total_visitors' => $total_visitors,
            'top_referrers' => $top_referrers,
            'user_types' => $user_types, 
            'top_browser' => $top_browser,
            'analyticsData' => $analyticsData
        ]);
    }
}
