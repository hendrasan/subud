<?php

use App\Models\User;

class SentrySeeder extends Seeder
{
  public function run()
  {
    Sentry::getUserProvider()->create(array(
      // 'username'    => 'admin',
      'email'       => 'admin@app.com',
      'password'    => '123456',
      'first_name'  => 'Admin',
      'last_name'   => 'App',
      'activated'   => 1,
    ));

    Sentry::getGroupProvider()->create(array(
      'name'        => 'Admin',
      'permissions' => array(
        'admin'     => 1,
        'users'     => 1,
    )));

    Sentry::getGroupProvider()->create(array(
      'name'        => 'Users',
      'permissions' => array(
        'admin'     => 0,
        'users'     => 1,
    )));

    // Assign user permissions
    $adminUser  = Sentry::getUserProvider()->findByLogin('admin@app.com');
    $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
    $adminUser->addGroup($adminGroup);
  }
}