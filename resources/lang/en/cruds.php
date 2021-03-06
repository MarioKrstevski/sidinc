<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'name'                      => 'Name',
            'name_helper'               => '',
            'email'                     => 'Email',
            'email_helper'              => '',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => '',
            'password'                  => 'Password',
            'password_helper'           => '',
            'roles'                     => 'Roles',
            'roles_helper'              => '',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
            'approved'                  => 'Approved',
            'approved_helper'           => '',
            'verified'                  => 'Verified',
            'verified_helper'           => '',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => '',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => '',
            'badge'                     => 'Badge',
            'badge_helper'              => '',
            'wallet'                    => 'Wallet',
            'wallet_helper'             => '',
        ],
    ],
    'userAlert'      => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => '',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => '',
            'user'              => 'Users',
            'user_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => '',
            'user_id'             => 'User ID',
            'user_id_helper'      => '',
            'properties'          => 'Properties',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
        ],
    ],
    'transaction'    => [
        'title'          => 'Transactions',
        'title_singular' => 'Transaction',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'wallet'            => 'Wallet',
            'wallet_helper'     => 'What wallet does this transaction go into',
            'task'              => 'Task',
            'task_helper'       => 'The task that the transaction is made about',
        ],
    ],
    'jobStatus'      => [
        'title'          => 'Job Statuses',
        'title_singular' => 'Job Status',
        'fields'         => [
            'id'                                => 'ID',
            'id_helper'                         => '',
            'name'                              => 'Name',
            'name_helper'                       => '',
            'description'                       => 'Description',
            'description_helper'                => 'Status description',
            'color'                             => 'Color',
            'color_helper'                      => 'A hex value for color if needed (ex: #FFF) for that status',
            'allowed_status_transitions'        => 'Allowed Status Transitions',
            'allowed_status_transitions_helper' => 'Comma seperated value of status id\'s that we are allowed to transition into',
            'created_at'                        => 'Created at',
            'created_at_helper'                 => '',
            'updated_at'                        => 'Updated at',
            'updated_at_helper'                 => '',
            'deleted_at'                        => 'Deleted at',
            'deleted_at_helper'                 => '',
        ],
    ],
    'job'            => [
        'title'          => 'Jobs',
        'title_singular' => 'Job',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'status'            => 'Status',
            'status_helper'     => 'What\'s the status for this Job',
            'user'              => 'User',
            'user_helper'       => 'What user started this Job',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'task'              => 'Task',
            'task_helper'       => '',
        ],
    ],
    'badge'          => [
        'title'          => 'Badges',
        'title_singular' => 'Badge',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'image'             => 'Image',
            'image_helper'      => 'Photo for this badge',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'tag'            => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'wallet'         => [
        'title'          => 'Wallets',
        'title_singular' => 'Wallet',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'credit_card'            => 'Credit Card',
            'credit_card_helper'     => 'Credit card for the user',
            'current_amount'         => 'Current Amount',
            'current_amount_helper'  => '',
            'checkout_amount'        => 'Checkout Amount',
            'checkout_amount_helper' => 'How much money does the user need to make a checkout',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
        ],
    ],
    'task'           => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'name'                 => 'Name',
            'name_helper'          => '',
            'reward_amount'        => 'Reward Amount',
            'reward_amount_helper' => '',
            'deadline'             => 'Deadline',
            'deadline_helper'      => '',
            'max_enrolled'         => 'Max Enrolled',
            'max_enrolled_helper'  => '',
            'importance'           => 'Importance',
            'importance_helper'    => '',
            'active'               => 'Active',
            'active_helper'        => '',
            'scheduled_at'         => 'Scheduled At',
            'scheduled_at_helper'  => '',
            'description'          => 'Description',
            'description_helper'   => 'Task description in details, with links to other helpful resources',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'category'             => 'Category',
            'category_helper'      => '',
            'tags'                 => 'Tags',
            'tags_helper'          => '',
        ],
    ],
];
