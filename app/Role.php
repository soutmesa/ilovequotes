<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    $owner = new Role();
	$owner->name         = 'owner';
	$owner->display_name = 'Project Owner'; // optional
	$owner->description  = 'User is the owner of a given project'; // optional
	$owner->save();

	$admin = new Role();
	$admin->name         = 'admin';
	$admin->display_name = 'User Administrator'; // optional
	$admin->description  = 'User is allowed to manage and edit other users'; // optional
	$admin->save();
}
