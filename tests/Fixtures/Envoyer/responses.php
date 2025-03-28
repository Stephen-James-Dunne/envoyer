<?php

return [
    'projects' => [
        [
            'id' => 1,
            'user_id' => 1,
            'version' => 1,
            'name' => 'Laravel',
            'provider' => 'github',
            'plain_repository' => 'laravel/laravel',
            'repository' => 'git@github.com:laravel/laravel.git',
            'type' => 'laravel-5',
            'branch' => 'main',
            'push_to_deploy' => false,
            'webhook_id' => null,
            'status' => null,
            'should_deploy_again' => 0,
            'deployment_started_at' => null,
            'deployment_finished_at' => '2020-10-09T10:54:38.000000Z',
            'last_deployment_status' => 'finished',
            'daily_deploys' => 89,
            'weekly_deploys' => 89,
            'last_deployment_took' => 37,
            'retain_deployments' => 4,
            'environment_servers' => [4],
            'folders' => [],
            'monitor' => 'http://laravel.com',
            'new_york_status' => 'healthy',
            'london_status' => 'healthy',
            'singapore_status' => 'healthy',
            'token' => 'gJw0HbKUG0Zegum6oSNuYf0OvvHWy2z47eElFMiM',
            'created_at' => '2020-09-10T13:56:28.000000Z',
            'updated_at' => '2020-10-09T11:28:37.000000Z',
            'install_dev_dependencies' => false,
            'install_dependencies' => true,
            'quiet_composer' => false,
            'servers' => [],
            'has_environment' => true,
            'has_monitoring_error' => false,
            'has_missing_heartbeats' => true,
            'last_deployed_branch' => 'main',
            'last_deployment_id' => 57,
            'last_deployment_author' => 'Dries Vints',
            'last_deployment_avatar' => 'https://avatars1.githubusercontent.com/u/594614?v=4',
            'last_deployment_hash' => 'c66546e',
            'last_deployment_timestamp' => '4 days ago'
        ]
    ],
    'deployments' => [
        // Mock deployments for project ID 1
        1 => [
            'deployments' => [
                [
                    'id' => 57,
                    'project_id' => 1,
                    'user_id' => 1,
                    'commit_branch' => 'master',
                    'commit_hash' => 'c66546e75fcbf208d2884b5ac7a3a858137753a3',
                    'commit_author' => 'Dries Vints',
                    'commit_avatar' => 'https://avatars1.githubusercontent.com/u/594614?v=4',
                    'commit_message' => 'Update CHANGELOG.md',
                    'status' => 'finished',
                    'created_at' => '2020-10-09T10:53:57.000000Z',
                    'updated_at' => '2020-10-09T10:54:38.000000Z'
                ],
                [
                    'id' => 56,
                    'project_id' => 1,
                    'user_id' => 1,
                    'commit_branch' => 'master',
                    'commit_hash' => 'c66546e75fcbf208d2884b5ac7a3a858137753a3',
                    'commit_author' => 'Dries Vints',
                    'commit_avatar' => 'https://avatars1.githubusercontent.com/u/594614?v=4',
                    'commit_message' => 'Update CHANGELOG.md',
                    'status' => 'finished',
                    'created_at' => '2020-10-08T12:01:12.000000Z',
                    'updated_at' => '2020-10-08T12:01:48.000000Z'
                ],
                [
                    'id' => 55,
                    'project_id' => 1,
                    'user_id' => 1,
                    'commit_branch' => 'master',
                    'commit_hash' => 'c66546e75fcbf208d2884b5ac7a3a858137753a3',
                    'commit_author' => 'Dries Vints',
                    'commit_avatar' => 'https://avatars1.githubusercontent.com/u/594614?v=4',
                    'commit_message' => 'Update CHANGELOG.md',
                    'status' => 'finished',
                    'created_at' => '2020-10-08T11:59:45.000000Z',
                    'updated_at' => '2020-10-08T12:00:30.000000Z'
                ],
                [
                    'id' => 54,
                    'project_id' => 1,
                    'user_id' => 1,
                    'commit_branch' => 'master',
                    'commit_hash' => 'c66546e75fcbf208d2884b5ac7a3a858137753a3',
                    'commit_author' => 'Dries Vints',
                    'commit_avatar' => 'https://avatars1.githubusercontent.com/u/594614?v=4',
                    'commit_message' => 'Update CHANGELOG.md',
                    'status' => 'finished',
                    'created_at' => '2020-10-08T11:58:58.000000Z',
                    'updated_at' => '2020-10-08T11:59:54.000000Z'
                ]
            ]
        ]
    ]
];
