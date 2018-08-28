<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Users Blades Language Lines
    |--------------------------------------------------------------------------
    */

    'showing-all-users'     => 'Showing All Users',
    'users-menu-alt'        => 'Show Users Management Menu',
    'create-new-user'       => 'Create New User',
    'show-deleted-users'    => 'Show Deleted User',
    'editing-user'          => 'Editing User :name',
    'showing-user'          => 'Showing User :name',
    'showing-user-title'    => ':name\'s Information',

    'users-table' => [
        'caption'   => '{1} :userscount user total|[2,*] :userscount total users',
        'id'        => 'ID',
        'name'      => 'Username',
        'email'     => 'Email',
        'role'      => 'Role',
        'status'   => 'Status',
        'actions'   => 'Actions',
        'updated'   => 'Updated',
        'created'   => 'Created'
    ],

    'buttons' => [
        'create-new'    => '<span class="hidden-xs hidden-sm">New</span>',
        'delete'        => '<i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>  <span class="hidden-xs hidden-sm">Delete</span><span class="hidden-xs hidden-sm hidden-md"></span>',
        'show'          => '<i class="fas fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Show</span><span class="hidden-xs hidden-sm hidden-md"></span>',
        'edit'          => '<i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Edit</span><span class="hidden-xs hidden-sm hidden-md"></span>',
        'back-to-users' => '<span class="hidden-sm hidden-xs">Back</span><span class="hidden-xs"></span>',
        'back-to-user'  => 'Back  <span class="hidden-xs"></span>',
        'delete-user'   => '<i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Delete</span><span class="hidden-xs"></span>',
        'edit-user'     => '<i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Edit</span><span class="hidden-xs"></span>',
    ],

    'tooltips' => [
        'delete'        => 'Delete',
        'show'          => 'Show',
        'edit'          => 'Edit',
        'create-new'    => 'Create New',
        'back-users'    => 'Back',
        'email-user'    => 'Email :user',
        'submit-search' => 'Search',
        'clear-search'  => 'Clear',
    ],

    'messages' => [
        'userNameTaken'          => 'Username is taken',
        'userNameRequired'       => 'Username is required',
        'fNameRequired'          => 'First Name is required',
        'lNameRequired'          => 'Last Name is required',
        'emailRequired'          => 'Email is required',
        'emailInvalid'           => 'Email is invalid',
        'passwordRequired'       => 'Password is required',
        'PasswordMin'            => 'Password needs to have at least 6 characters',
        'PasswordMax'            => 'Password maximum length is 20 characters',
        'captchaRequire'         => 'Captcha is required',
        'CaptchaWrong'           => 'Wrong captcha, please try again.',
        'roleRequired'           => 'User role is required.',
        'user-creation-success'  => 'Successfully created!',
        'update-user-success'    => 'Successfully updated!',
        'delete-success'         => 'Successfully deleted!',
        'cannot-delete-yourself' => 'You cannot delete yourself!',
    ],

    'show-user' => [
        'id'                => 'ID',
        'name'              => 'Username',
        'email'             => '<span class="hidden-xs"></span>Email',
        'role'              => 'Role',
        'created'           => 'First Name',
        'updated'           => 'Last Name',
        'labelRole'         => 'User Role',
        'labelAccessLevel'  => '<span class="hidden-xs">User</span> Access Level|<span class="hidden-xs">User</span> Access Levels',
    ],

    'search'  => [
        'title'         => 'Showing Search Results',
        'found-footer'  => ' Record(s) found',
        'no-results'    => 'No Results',
    ],
];
