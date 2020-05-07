<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '18',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '19',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '20',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '21',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '22',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '23',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '24',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '25',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '26',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '27',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '28',
                'title' => 'job_status_create',
            ],
            [
                'id'    => '29',
                'title' => 'job_status_edit',
            ],
            [
                'id'    => '30',
                'title' => 'job_status_show',
            ],
            [
                'id'    => '31',
                'title' => 'job_status_delete',
            ],
            [
                'id'    => '32',
                'title' => 'job_status_access',
            ],
            [
                'id'    => '33',
                'title' => 'job_create',
            ],
            [
                'id'    => '34',
                'title' => 'job_edit',
            ],
            [
                'id'    => '35',
                'title' => 'job_show',
            ],
            [
                'id'    => '36',
                'title' => 'job_delete',
            ],
            [
                'id'    => '37',
                'title' => 'job_access',
            ],
            [
                'id'    => '38',
                'title' => 'badge_create',
            ],
            [
                'id'    => '39',
                'title' => 'badge_edit',
            ],
            [
                'id'    => '40',
                'title' => 'badge_show',
            ],
            [
                'id'    => '41',
                'title' => 'badge_delete',
            ],
            [
                'id'    => '42',
                'title' => 'badge_access',
            ],
            [
                'id'    => '43',
                'title' => 'category_create',
            ],
            [
                'id'    => '44',
                'title' => 'category_edit',
            ],
            [
                'id'    => '45',
                'title' => 'category_show',
            ],
            [
                'id'    => '46',
                'title' => 'category_delete',
            ],
            [
                'id'    => '47',
                'title' => 'category_access',
            ],
            [
                'id'    => '48',
                'title' => 'tag_create',
            ],
            [
                'id'    => '49',
                'title' => 'tag_edit',
            ],
            [
                'id'    => '50',
                'title' => 'tag_show',
            ],
            [
                'id'    => '51',
                'title' => 'tag_delete',
            ],
            [
                'id'    => '52',
                'title' => 'tag_access',
            ],
            [
                'id'    => '53',
                'title' => 'wallet_create',
            ],
            [
                'id'    => '54',
                'title' => 'wallet_edit',
            ],
            [
                'id'    => '55',
                'title' => 'wallet_show',
            ],
            [
                'id'    => '56',
                'title' => 'wallet_delete',
            ],
            [
                'id'    => '57',
                'title' => 'wallet_access',
            ],
            [
                'id'    => '58',
                'title' => 'task_create',
            ],
            [
                'id'    => '59',
                'title' => 'task_edit',
            ],
            [
                'id'    => '60',
                'title' => 'task_show',
            ],
            [
                'id'    => '61',
                'title' => 'task_delete',
            ],
            [
                'id'    => '62',
                'title' => 'task_access',
            ],
            [
                'id'    => '63',
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
