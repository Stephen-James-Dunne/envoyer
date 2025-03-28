<?php

return array (
  'projects' => 
  array (
    0 => 
    array (
      'id' => 1,
      'user_id' => 1,
      'version' => 1,
      'name' => 'Project 1',
      'provider' => 'github',
      'plain_repository' => 'user/project1',
      'repository' => 'git@github.com:user/project1.git',
      'type' => 'laravel-5',
      'branch' => 'main',
      'push_to_deploy' => false,
      'webhook_id' => NULL,
      'status' => NULL,
      'should_deploy_again' => 0,
      'deployment_started_at' => NULL,
      'deployment_finished_at' => '2025-03-26T10:01:00.000000Z',
      'last_deployment_status' => 'finished',
      'daily_deploys' => 5,
      'weekly_deploys' => 23,
      'last_deployment_took' => 37,
      'retain_deployments' => 4,
      'environment_servers' => 
      array (
        0 => 1,
        1 => 2,
      ),
      'folders' => 
      array (
      ),
      'monitor' => 'http://project1.com',
      'new_york_status' => 'healthy',
      'london_status' => 'healthy',
      'singapore_status' => 'healthy',
      'token' => 'abc123xyz789',
      'created_at' => '2025-03-20T00:00:00.000000Z',
      'updated_at' => '2025-03-26T10:01:00.000000Z',
      'install_dev_dependencies' => false,
      'install_dependencies' => true,
      'quiet_composer' => false,
      'servers' => 
      array (
      ),
      'has_environment' => true,
      'has_monitoring_error' => false,
      'has_missing_heartbeats' => false,
      'last_deployed_branch' => 'main',
      'last_deployment_id' => 101,
      'last_deployment_author' => 'John Doe',
      'last_deployment_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
      'last_deployment_hash' => 'a1b2c3d',
      'last_deployment_timestamp' => '1 hour ago',
    ),
    1 => 
    array (
      'id' => 2,
      'user_id' => 2,
      'version' => 2,
      'name' => 'Project 2',
      'provider' => 'github',
      'plain_repository' => 'user/project2',
      'repository' => 'git@github.com:user/project2.git',
      'type' => 'laravel-5',
      'branch' => 'main',
      'push_to_deploy' => false,
      'webhook_id' => NULL,
      'status' => NULL,
      'should_deploy_again' => 0,
      'deployment_started_at' => NULL,
      'deployment_finished_at' => '2025-03-26T10:01:00.000000Z',
      'last_deployment_status' => 'running',
      'daily_deploys' => 5,
      'weekly_deploys' => 23,
      'last_deployment_took' => 37,
      'retain_deployments' => 4,
      'environment_servers' => 
      array (
        0 => 1,
        1 => 2,
      ),
      'folders' => 
      array (
      ),
      'monitor' => 'http://project1.com',
      'new_york_status' => 'healthy',
      'london_status' => 'healthy',
      'singapore_status' => 'healthy',
      'token' => 'abc123xyz789',
      'created_at' => '2025-03-20T00:00:00.000000Z',
      'updated_at' => '2025-03-26T10:01:00.000000Z',
      'install_dev_dependencies' => false,
      'install_dependencies' => true,
      'quiet_composer' => false,
      'servers' => 
      array (
      ),
      'has_environment' => true,
      'has_monitoring_error' => false,
      'has_missing_heartbeats' => false,
      'last_deployed_branch' => 'main',
      'last_deployment_id' => 101,
      'last_deployment_author' => 'John Dev',
      'last_deployment_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
      'last_deployment_hash' => 'c3d4e5f6',
      'last_deployment_timestamp' => '1 hour ago',
    ),
  ),
  'deployments' => 
  array (
    1 => 
    array (
      'deployments' => 
      array (
        0 => 
        array (
          'id' => 101,
          'project_id' => 1,
          'user_id' => 1,
          'commit_branch' => 'main',
          'commit_hash' => 'a1b2c3d4',
          'commit_author' => 'John Doe',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
          'commit_message' => 'Initial commit',
          'status' => 'finished',
          'created_at' => '2025-03-26T10:00:00.000000Z',
          'updated_at' => '2025-03-26T10:01:00.000000Z',
        ),
        1 => 
        array (
          'id' => 102,
          'project_id' => 1,
          'user_id' => 1,
          'commit_branch' => 'main',
          'commit_hash' => 'b2c3d4e5',
          'commit_author' => 'Jane Smith',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/789012?v=4',
          'commit_message' => 'Fix bug',
          'status' => 'running',
          'created_at' => '2025-03-26T11:00:00.000000Z',
          'updated_at' => '2025-03-26T11:01:00.000000Z',
        ),
        2 => 
        array (
          'id' => 103,
          'project_id' => '1',
          'user_id' => '1',
          'commit_branch' => 'main',
          'commit_hash' => 'de00a67f',
          'commit_author' => 'Current User',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
          'commit_message' => 'Deploy from branch - main',
          'status' => 'running',
          'created_at' => '2025-03-27T15:01:46+00:00',
          'updated_at' => '2025-03-27T15:01:46+00:00',
        ),
        3 => 
        array (
          'id' => 104,
          'project_id' => '1',
          'user_id' => '1',
          'commit_branch' => 'main',
          'commit_hash' => 'eb85c81e',
          'commit_author' => 'Current User',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
          'commit_message' => 'Deploy from branch - main',
          'status' => 'running',
          'created_at' => '2025-03-27T16:12:03+00:00',
          'updated_at' => '2025-03-27T16:12:03+00:00',
        ),
      ),
    ),
    2 => 
    array (
      'deployments' => 
      array (
        0 => 
        array (
          'id' => 201,
          'project_id' => 2,
          'user_id' => 2,
          'commit_branch' => 'main',
          'commit_hash' => 'a1b2c3d4',
          'commit_author' => 'Test Dev 2',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
          'commit_message' => 'Initial commit',
          'status' => 'finished',
          'created_at' => '2025-03-26T10:00:00.000000Z',
          'updated_at' => '2025-03-26T10:01:00.000000Z',
        ),
        1 => 
        array (
          'id' => 202,
          'project_id' => 2,
          'user_id' => 2,
          'commit_branch' => 'main',
          'commit_hash' => 'b2c3d4e5',
          'commit_author' => 'Test Smith',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/789012?v=4',
          'commit_message' => 'Fix bug',
          'status' => 'failed',
          'created_at' => '2025-03-26T11:00:00.000000Z',
          'updated_at' => '2025-03-26T11:01:00.000000Z',
        ),
        2 => 
        array (
          'id' => 203,
          'project_id' => '2',
          'user_id' => '2',
          'commit_branch' => 'main',
          'commit_hash' => 'b83d5ac8',
          'commit_author' => 'Current User',
          'commit_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
          'commit_message' => 'Deploy from branch - main',
          'status' => 'running',
          'created_at' => '2025-03-27T15:02:21+00:00',
          'updated_at' => '2025-03-27T15:02:21+00:00',
        ),
      ),
    ),
  ),
);
