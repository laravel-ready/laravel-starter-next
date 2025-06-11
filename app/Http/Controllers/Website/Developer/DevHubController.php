<?php

namespace App\Http\Controllers\Website\Developer;

use App\Http\Controllers\Controller;

class DevHubController extends Controller
{
    public function index()
    {
        $docsLinks = [
            [
                'link' => '/devhub/docs',
                'title' => 'Product Documentation',
                'description' => 'Access the main product documentation and guides',
                'icon' => 'code-bracket-square'
            ],
            [
                'link' => '/docs/api',
                'title' => 'API Documentation',
                'description' => 'Explore API endpoints, methods and integration guides',
                'icon' => 'code-bracket'
            ],
            [
                'link' => '/devhub/routes',
                'title' => 'Routes',
                'description' => 'View all available routes in the project',
                'icon' => 'list-bullet'
            ],
            [
                'link' => '/devhub/logs',
                'title' => 'System Logs',
                'description' => 'Access and monitor system logs',
                'icon' => 'document-chart-bar'
            ],
            [
                'link' => '/clockwork/app',
                'title' => 'Clockwork App',
                'description' => 'Access and monitor your application\'s performance',
                'icon' => 'exclamation-circle'
            ],
            [
                'link' => '/devhub/artisan-commands',
                'title' => 'Artisan Commands',
                'description' => 'Run Artisan commands through the command palette UI',
                'icon' => 'command-line'
            ]
        ];

        $metaDetails = [
            'icon' => 'home',
            'service_tag' => 'website',
            'service_name' => env('APP_NAME') . ' Docs',
        ];

        return view('devhub.index', compact(
            'docsLinks',
            'metaDetails'
        ));
    }
}
