<?php

namespace App\Models;


class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * Default Permissions of the Application.
     */
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',
            'restore_users',
            'block_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',
            'restore_roles',

            'view_deceaseds',
            'create_deceeaseds',
            'edit_deceeaseds',
            'delete_deceeaseds',

            'view_widows',
            'create_widos',
            'edit_widows',
            'delete_widows',

            'view_orphans',
            'create_orphans',
            'edit_orphans',
            'delete_orphans',
        ];
    }

    /**
     * Name should be lowercase.
     *
     * @param  string  $value  Name value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
