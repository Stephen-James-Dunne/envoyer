<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Devhaus Envoyer Viewer')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General Styles o7 */
        body {
            font-family: -apple-system, BlinkMacSystemFont;
            background-color: #1a1a1a;
            color: #9ca3af;
            margin: 0;
            padding: 1rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .setup-info {
            background-color: #262626;
            border: 1px solid #374151;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 2rem;
            color: #9ca3af;
        }

        .setup-info a {
            color: #EF3B2D;
            text-decoration: none;
        }

        .setup-info a:hover {
            text-decoration: underline;
            color: #FF6B5E;
        }

        .setup-info ul {
            margin: 0.5rem 0;
            padding-left: 1.5rem;
        }

        .setup-info li {
            margin: 0.75rem 0;
        }

        .setup-info strong {
            color: #EF3B2D;
        }

        h1 {
            color: #EF3B2D;
            border-bottom: 2px solid #374151;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }

        .nav-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
        }

        .nav-item {
            background-color: #262626;
            border-radius: 8px;
            padding: 1.5rem;
            transition: transform 0.2s ease;
            border: 1px solid #374151;
            cursor: pointer;
            text-decoration: none;
            display: block;
        }

        .nav-item:hover {
            transform: translateY(-2px);
            background-color: #333333;
            border-color: #EF3B2D;
        }

        .nav-title {
            color: #EF3B2D;
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .nav-description {
            color: #9ca3af;
            font-size: 0.9rem;
        }

        /* Projects List Styles */
        .projects-list {
            list-style: none;
            padding: 0;
            margin-top: 2.25rem;
        }

        .projects-list form {
            margin: 0;
        }

        .project-item {
            background-color: #262626;
            border-radius: 8px;
            margin-bottom: 1rem;
            transition: transform 0.2s ease;
            border: 1px solid #374151;
            display: block;
            overflow: hidden;
        }

        .project-name {
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .project-item button,
        .project-item a {
            width: 100%;
            background: none;
            border: none;
            color: #9ca3af;
            text-decoration: none;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            text-align: left;
            box-sizing: border-box;
            font-size: 1rem;
            font-family: inherit;
        }

        .projects-list button:hover {
            transform: translateX(5px);
            background-color: #333333;
            border-color: #EF3B2D;
            color: #EF3B2D;
        }

        .view-text {
            color: #EF3B2D;
            font-size: 0.875rem;
            margin-left: 1rem;
        }

        .project-item:hover {
            transform: translateX(5px);
            background-color: #333333;
            border-color: #EF3B2D;
        }

        .project-item:hover button,
        .project-item:hover a {
            color: #EF3B2D;
        }

        .back-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #262626;
            border: 1px solid #374151;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            margin-bottom: 1rem;
            color: #9ca3af;
        }

        .back-button:hover {
            transform: translateX(-5px);
            background-color: #333333;
            border-color: #EF3B2D;
            color: #EF3B2D;
        }

        .page-title {
            color: #EF3B2D;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        /* Deployment Viewer Styles */
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .header-row h1 {
            border-bottom: none;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }

        .help-text {
            color: #EF3B2D;
            font-size: 0.875rem;
            font-style: italic;
            padding-bottom: 1.25rem;
        }

        .deployment-item {
            background-color: #2d2d2d;
            border-radius: 8px;
            margin-bottom: 1rem;
            transition: transform 0.2s ease;
            border: 1px solid #374151;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .deployment-item:hover {
            transform: translateX(5px);
            background-color: #333333;
            border-color: #EF3B2D;
        }

        .deployment-info {
            display: grid;
            gap: 0.5rem;
            color: #9ca3af;
            transition: color 0.2s ease;
        }

        .deployment-item:hover .deployment-info {
            color: #EF3B2D;
        }

        .deployment-status {
            font-size: 0.875rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            background-color: #374151;
        }

        .status-finished {
            background-color: #065f46;
            color: #d1fae5;
        }

        .status-running {
            background-color: #1e40af;
            color: #dbeafe;
        }

        .status-failed {
            background-color: #991b1b;
            color: #fee2e2;
        }
    </style>
</head>

<body>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success"
                style="
                background-color: #065f46;
                color: #d1fae5;
                padding: 1rem;
                border-radius: 8px;
                margin-bottom: 1rem;
                border: 1px solid #047857;">
                {{ session('message') }}
            </div>
        @endif
        @yield('header')
        @yield('content')
    </div>
</body>

</html>
