<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/wizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveWizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/classic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveClassic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.web_update_wizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::overview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wO2RjSYWMrjAKPXP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcsNxGz3r4srOhLp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allocation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nAvnpmI8UIPjG1pn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/routes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/routes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allocations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allocations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/incomes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/incomes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/additionals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/additionals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/markets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/markets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/market/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.get',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/banks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/banks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/currencies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customergroups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customergroups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customfields' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customfields/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/departments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events/load_events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.load_events',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events/update_event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.update_event',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events/delete_event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.delete_event',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.get',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/miscs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/miscs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/prefixes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/prefixes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/productcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/productcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/productvariables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/productvariables/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchaseorders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchaseorders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotes/convert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.convert',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotes/quotes_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.bill_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactioncategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactioncategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/usergatewayentries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/usergatewayentries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warehouses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warehouses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customer_send_email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/selected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.selected_action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.wallet_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/wallet_load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.wallet_load',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/select' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.select',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.active',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/set_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.set_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/payroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.payroll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/attendance_new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.attendance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/attendance_destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.attendance_destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.attendance_destroy_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/attendance_load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.attendance_load',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.attendance_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.attendance_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/related_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.related_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/role_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.role_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.active',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/admin_permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.admin_role_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hrms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bill_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.bill_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.pos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pos_create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.pos_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/draft_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.draft_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/drafts_load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.drafts_load',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pos_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.pos_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backgroundPrint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.backgroundPrint',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/browser_print' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.pos.browser_print',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.register.open',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/close' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.register.close',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.register.load',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/label' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.product_label',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.product_label_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/standard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.standard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.standard_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/stock_transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.stock_transfer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.stock_transfer_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.get',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/product_sub_load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.product_sub_load',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.load',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/update_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.update_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/store_meta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.store_meta',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/delete_meta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.delete_meta',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/log_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.log_history',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/notes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.notes',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.invoices',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/projects/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/pos/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.pos',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/profit_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.profit_statement',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliers/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliers/select' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.select',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliers/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.active',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.load',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/update_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.update_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactions/payer_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.payer_search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_db' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.update_db',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/server_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.server_info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.optimize',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe_token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.stripe_api_request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal_process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.paypal_process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal_response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.paypal_response',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal_error' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.paypal_error',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/load_template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.load_template',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_bill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.send_bill',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/group_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.group_send_email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_bill_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.send_bill_sms',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.messages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.messages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bill_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.bill_payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bulk_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.bill_bulk_payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.mini_dash',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bill_attachment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.bill_attachment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project_attachment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.project_attachment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bill_cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.bill_cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/update_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.update_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/billing_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.billing_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/billing_settings_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.billing_settings_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.activate_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/email_sms_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.email_sms_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/email_settings_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.email_settings_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.cron',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.cron_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/billing_preference' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.billing_preference',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.billing_preference_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/payment_preference' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.payment_preference',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.payment_preference_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.accounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.accounts_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/notification_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.notification_email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.notification_email_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/localization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.localization',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.localization_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.theme',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.theme_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.status_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/crm_hrm_section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.crm_hrm_section',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.crm_hrm_section_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/pos_preference' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.pos_preference',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.pos_preference_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/currency_exchange' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.currency_exchange',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.currency_exchange_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/business_goals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.business_goals',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.business_goals_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.manage_api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.security_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.security_settings_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.settings.activities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/todo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.todo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/edit_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.edit_profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.edit_profile_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/change_profile_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.change_profile_password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.change_profile_password_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.attendance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.clock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/load_attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.load_attendance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/u/read_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.read_notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.clear_cache',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/dev' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.dev_manager',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.business.dev_manager_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.password.email_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.password.enter_email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.register_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/invoices/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.get',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/quotes/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.get',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.projects.tasks',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.projects.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/projects/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.projects.get',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.user.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.user.update+post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crm/user/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.user.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/o(?|auth/(?|tokens/([^/]++)(*:35)|clients/([^/]++)(?|(*:61))|personal\\-access\\-tokens/([^/]++)(*:102))|rders/(?|([^/]++)(?|(*:131)|/edit(*:144)|(*:152))|get(*:164)))|/b(?|ills/([^/]++)(*:192)|anks/(?|([^/]++)(?|(*:219)|/edit(*:232)|(*:240))|get(*:252)))|/lang/([^/]++)(*:276)|/d(?|ir/([^/]++)(*:300)|epartments/(?|([^/]++)(?|(*:333)|/edit(*:346)|(*:354))|get(*:366))|raft_view/([^/]++)(*:393)|uplicate/([^/]++)(*:418))|/a(?|ccounts/(?|balancesheet/([^/]++)(*:464)|([^/]++)(?|(*:483)|/edit(*:496)|(*:504))|get(*:516))|llocations/([^/]++)(?|(*:547)|/edit(*:560)|(*:568))|dditionals/(?|([^/]++)(?|(*:602)|/edit(*:615)|(*:623))|get(*:635))|pp/password/reset/([^/]++)(*:670))|/r(?|o(?|utes/(?|([^/]++)(?|(*:707)|/edit(*:720)|(*:728))|get(*:740))|le/(?|([^/]++)(?|/edit(*:771)|(*:779))|get(*:791)))|eports/(?|s(?|tatement/(?|([^/]++)(*:835)|generate(?|/([^/]++)(*:863)|_market/([^/]++)(*:887))|tax/([^/]++)(*:908)|stock/([^/]++)(*:930))|ummary/([^/]++)(?|(*:957)))|chart/([^/]++)(?|(*:984))))|/get\\-bill\\-details/([^/]++)(*:1023)|/i(?|n(?|comes/(?|([^/]++)(?|(*:1061)|/edit(*:1075)|(*:1084))|get(*:1097))|voices/(?|([^/]++)(?|(*:1128)|/edit(*:1142)|(*:1151))|get(*:1164)|print_document/([^/]++)/([^/]++)(*:1205)))|mport(?|(?:/([^/]++))?(?|(*:1241))|_process(?:/([^/]++))?(*:1273)))|/m(?|arkets/([^/]++)(?|(*:1307)|/edit(?|(*:1324)|s(*:1334))|(*:1344))|iscs/(?|([^/]++)(?|(*:1373)|/edit(*:1387)|(*:1396))|get(*:1409))|essage/(?|([^/]++)(?|(*:1440))|destroy(*:1457)))|/c(?|u(?|rrencies/(?|([^/]++)(?|(*:1500)|/edit(*:1514)|(*:1523))|get(*:1536))|stom(?|er(?|groups/(?|([^/]++)(?|(*:1579)|/edit(*:1593)|(*:1602))|get(*:1615))|s/(?|([^/]++)(?|(*:1641)|/edit(*:1655)|(*:1664))|get(*:1677)))|fields/(?|([^/]++)(?|(*:1709)|/edit(*:1723)|(*:1732))|get(*:1745))))|r(?|on/([^/]++)(*:1772)|m/(?|p(?|assword/reset/([^/]++)(*:1812)|rojects/explore/([^/]++)(*:1845))|account/verify/([^/]++)(*:1878)|invoices/([^/]++)(?|(*:1907)|/edit(*:1921)|(*:1930))|quotes/(?|approve(?:/([^/]++))?(*:1971)|([^/]++)(?|(*:1991)|/edit(*:2005)|(*:2014))))))|/events/([^/]++)(?|(*:2047)|/edit(*:2061)|(*:2070))|/notes/(?|([^/]++)(?|(*:2101)|/edit(*:2115)|(*:2124))|get(*:2137))|/p(?|r(?|efixes/(?|([^/]++)(?|(*:2177)|/edit(*:2191)|(*:2200))|get(*:2213))|o(?|duct(?|categories/(?|([^/]++)(?|(*:2259)|/edit(*:2273)|(*:2282))|get(*:2295))|variables/(?|([^/]++)(?|(*:2329)|/edit(*:2343)|(*:2352))|get(*:2365))|s/(?|search/([^/]++)(*:2395)|pos/([^/]++)(*:2416)|([^/]++)(?|(*:2436)|/edit(*:2450)|(*:2459))))|jects/(?|([^/]++)(?|(*:2491)|/edit(*:2505)|(*:2514))|get(*:2527))|cess_card/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2591))|int_(?|bill/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2648)|compact/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2700)|payslip/([^/]++)/([^/]++)/([^/]++)(*:2743)))|urchaseorders/(?|([^/]++)(?|(*:2782)|/edit(*:2796)|(*:2805))|get(*:2818))|ay(?|pal_capture/([^/]++)/capture(*:2861)|_card/([^/]++)/([^/]++)/([^/]++)(*:2902)))|/quotes/(?|([^/]++)(?|(*:2935)|/edit(*:2949)|(*:2958))|get(*:2971))|/t(?|e(?|mplates/(?|([^/]++)(?|(*:3012)|/edit(*:3026)|(*:3035))|get(*:3048))|rms/(?|([^/]++)(?|(*:3076)|/edit(*:3090)|(*:3099))|get(*:3112)))|ransaction(?|categories/(?|([^/]++)(?|(*:3161)|/edit(*:3175)|(*:3184))|get(*:3197))|s/(?|([^/]++)(?|(*:3223)|/edit(*:3237)|(*:3246))|get(*:3259)))|asks/(?|([^/]++)(?|(*:3289)|/edit(*:3303)|(*:3312))|get(*:3325)))|/usergatewayentries/(?|([^/]++)(?|(*:3370)|/edit(*:3384)|(*:3393))|get(*:3406))|/warehouses/(?|([^/]++)(?|(*:3442)|/edit(*:3456)|(*:3465))|get(*:3478))|/hrms/(?|([^/]++)(?|(*:3508)|/edit(*:3522)|(*:3531))|get(*:3544))|/s(?|ample/([^/]++)(*:3573)|uppliers/(?|([^/]++)(?|(*:3605)|/edit(*:3619)|(*:3628))|get(*:3641)))|/view_b(?|ill/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:3701)|ank/([^/]++)/([^/]++)/([^/]++)(*:3740)))/?$}sDu',
    ),
    3 => 
    array (
      35 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      61 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.orders.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d5pof6lbsPb1db5I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.show',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.edit',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.update',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.destroy',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.banks.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'direction',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.show',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.edit',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.update',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.destroy',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.departments.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.draft_view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.duplicate_invoice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.balance_sheet',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.show',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.edit',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.update',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.destroy',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.accounts.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.show',
          ),
          1 => 
          array (
            0 => 'allocation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.edit',
          ),
          1 => 
          array (
            0 => 'allocation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.update',
          ),
          1 => 
          array (
            0 => 'allocation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.allocations.destroy',
          ),
          1 => 
          array (
            0 => 'allocation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.show',
          ),
          1 => 
          array (
            0 => 'additional',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.edit',
          ),
          1 => 
          array (
            0 => 'additional',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.update',
          ),
          1 => 
          array (
            0 => 'additional',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.destroy',
          ),
          1 => 
          array (
            0 => 'additional',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.additionals.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.password.reset.form',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.show',
          ),
          1 => 
          array (
            0 => 'route',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.edit',
          ),
          1 => 
          array (
            0 => 'route',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.update',
          ),
          1 => 
          array (
            0 => 'route',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.destroy',
          ),
          1 => 
          array (
            0 => 'route',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.routes.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.role.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.statements',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.generate_statement',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.generate_market_statement',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.generate_tax_statement',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.generate_stock_statement',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.summary',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.summary_post',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.charts',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.reports.charts_post',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.addbill',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.show',
          ),
          1 => 
          array (
            0 => 'income',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.edit',
          ),
          1 => 
          array (
            0 => 'income',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.update',
          ),
          1 => 
          array (
            0 => 'income',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.destroy',
          ),
          1 => 
          array (
            0 => 'income',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.incomes.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.edit',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.invoices.print_document',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.import.general',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.import.general_post',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.import.import_process',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.show',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.edit',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.edit2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.update',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.markets.destroy',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.show',
          ),
          1 => 
          array (
            0 => 'misc',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.edit',
          ),
          1 => 
          array (
            0 => 'misc',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.update',
          ),
          1 => 
          array (
            0 => 'misc',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.destroy',
          ),
          1 => 
          array (
            0 => 'misc',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.miscs.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.messages.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.messages.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.messages.destroy',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.show',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.edit',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.currencies.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.show',
          ),
          1 => 
          array (
            0 => 'customergroup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.edit',
          ),
          1 => 
          array (
            0 => 'customergroup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.update',
          ),
          1 => 
          array (
            0 => 'customergroup',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.destroy',
          ),
          1 => 
          array (
            0 => 'customergroup',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customergroups.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.show',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.edit',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.update',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.destroy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customers.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.show',
          ),
          1 => 
          array (
            0 => 'customfield',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.edit',
          ),
          1 => 
          array (
            0 => 'customfield',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.update',
          ),
          1 => 
          array (
            0 => 'customfield',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.destroy',
          ),
          1 => 
          array (
            0 => 'customfield',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.customfields.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.cron.jobs',
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.password.reset.form',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.projects.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.accountVerify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.edit',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.approve',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.show',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.edit',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.update',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crm.quotes.destroy',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.show',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.edit',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2070 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.update',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.events.destroy',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.show',
          ),
          1 => 
          array (
            0 => 'note',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.edit',
          ),
          1 => 
          array (
            0 => 'note',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.update',
          ),
          1 => 
          array (
            0 => 'note',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.destroy',
          ),
          1 => 
          array (
            0 => 'note',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.notes.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.show',
          ),
          1 => 
          array (
            0 => 'prefix',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.edit',
          ),
          1 => 
          array (
            0 => 'prefix',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.update',
          ),
          1 => 
          array (
            0 => 'prefix',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.destroy',
          ),
          1 => 
          array (
            0 => 'prefix',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.prefixes.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.show',
          ),
          1 => 
          array (
            0 => 'productcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.edit',
          ),
          1 => 
          array (
            0 => 'productcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.update',
          ),
          1 => 
          array (
            0 => 'productcategory',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.destroy',
          ),
          1 => 
          array (
            0 => 'productcategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productcategories.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.show',
          ),
          1 => 
          array (
            0 => 'productvariable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.edit',
          ),
          1 => 
          array (
            0 => 'productvariable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.update',
          ),
          1 => 
          array (
            0 => 'productvariable',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.destroy',
          ),
          1 => 
          array (
            0 => 'productvariable',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.productvariables.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.product_search_post',
          ),
          1 => 
          array (
            0 => 'bill_type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.product_search_pos',
          ),
          1 => 
          array (
            0 => 'bill_type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.show',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.edit',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.update',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.destroy',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.projects.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.process_card',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'token',
            3 => 'gateway',
            4 => 'cid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.print_bill',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'token',
            3 => 'pdf',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.print_compact',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'token',
            3 => 'pdf',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.print_payslip',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'pdf',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.show',
          ),
          1 => 
          array (
            0 => 'purchaseorder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.edit',
          ),
          1 => 
          array (
            0 => 'purchaseorder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.update',
          ),
          1 => 
          array (
            0 => 'purchaseorder',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.destroy',
          ),
          1 => 
          array (
            0 => 'purchaseorder',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.purchaseorders.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.paypal_capture',
            'orderId' => NULL,
          ),
          1 => 
          array (
            0 => 'orderId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.pay_card',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.show',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.edit',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.update',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.destroy',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.quotes.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.show',
          ),
          1 => 
          array (
            0 => 'template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.edit',
          ),
          1 => 
          array (
            0 => 'template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.update',
          ),
          1 => 
          array (
            0 => 'template',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.destroy',
          ),
          1 => 
          array (
            0 => 'template',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.templates.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.show',
          ),
          1 => 
          array (
            0 => 'term',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.edit',
          ),
          1 => 
          array (
            0 => 'term',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.update',
          ),
          1 => 
          array (
            0 => 'term',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.destroy',
          ),
          1 => 
          array (
            0 => 'term',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.terms.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.show',
          ),
          1 => 
          array (
            0 => 'transactioncategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.edit',
          ),
          1 => 
          array (
            0 => 'transactioncategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.update',
          ),
          1 => 
          array (
            0 => 'transactioncategory',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.destroy',
          ),
          1 => 
          array (
            0 => 'transactioncategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactioncategories.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.show',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.edit',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.update',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.destroy',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.transactions.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.show',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.edit',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.update',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.destroy',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.tasks.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.show',
          ),
          1 => 
          array (
            0 => 'usergatewayentry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.edit',
          ),
          1 => 
          array (
            0 => 'usergatewayentry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.update',
          ),
          1 => 
          array (
            0 => 'usergatewayentry',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.destroy',
          ),
          1 => 
          array (
            0 => 'usergatewayentry',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.usergatewayentries.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.show',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.edit',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.update',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.destroy',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.warehouses.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.show',
          ),
          1 => 
          array (
            0 => 'hrm',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.edit',
          ),
          1 => 
          array (
            0 => 'hrm',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.update',
          ),
          1 => 
          array (
            0 => 'hrm',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.destroy',
          ),
          1 => 
          array (
            0 => 'hrm',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.hrms.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.import.sample',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.show',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.edit',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.update',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.destroy',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.suppliers.get',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.view_bill',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'token',
            3 => 'pdf',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.view_bank',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'LaravelInstaller::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environment',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentWizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/wizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveWizard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveWizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentClassic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/classic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveClassic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveClassic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::requirements',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::permissions',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.web_update_wizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@index',
        'as' => 'biller.web_update_wizard',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::overview',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/final',
      'action' => 
      array (
        'middleware' => 'web',
        'as' => 'LaravelUpdater::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wO2RjSYWMrjAKPXP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:296:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:78:"function (\\Illuminate\\Http\\Request $request) {
    return \'Passport Test\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078b0000000000000000";}";s:4:"hash";s:44:"S11r9MglamWaxLbPhBXMCJehn4s0OA4tLX+K6t/WOM8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wO2RjSYWMrjAKPXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcsNxGz3r4srOhLp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078e0000000000000000";}";s:4:"hash";s:44:"75ogzawErd6l13QPMGNWHgf71RKd2paB3mo5TAn4nN4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mcsNxGz3r4srOhLp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CoreController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CoreController@showLoginForm',
        'as' => 'biller.index',
        'namespace' => 'App\\Http\\Controllers\\Focus',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d5pof6lbsPb1db5I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bills/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@billshow',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@billshow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d5pof6lbsPb1db5I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nAvnpmI8UIPjG1pn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'allocation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@billshow123',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@billshow123',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nAvnpmI8UIPjG1pn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@swap',
        'controller' => 'App\\Http\\Controllers\\LanguageController@swap',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'direction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dir/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@direction',
        'controller' => 'App\\Http\\Controllers\\LanguageController@direction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'direction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.balance_sheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/balancesheet/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@balance_sheet',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@balance_sheet',
        'as' => 'biller.accounts.balance_sheet',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/{account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.accounts.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.accounts.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'accounts/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\account\\AccountsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\account\\AccountsTableController',
        'as' => 'biller.accounts.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\account',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'routes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'routes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'routes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'routes/{route}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'routes/{route}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'routes/{route}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'routes/{route}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.routes.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RouteController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.routes.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'routes/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\route\\RoutesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\route\\RoutesTableController',
        'as' => 'biller.routes.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\route',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allocations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allocations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'allocations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allocations/{allocation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allocations/{allocation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'allocations/{allocation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.allocations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'allocations/{allocation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.allocations.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.addbill' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-bill-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@billShow',
        'controller' => 'App\\Http\\Controllers\\Focus\\allocation\\AllocationController@billShow',
        'as' => 'biller.addbill',
        'namespace' => 'App\\Http\\Controllers\\Focus\\allocation',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'incomes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'incomes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'incomes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'incomes/{income}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'incomes/{income}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'incomes/{income}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'incomes/{income}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.incomes.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.incomes.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'incomes/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\income\\IncomesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\income\\IncomesTableController',
        'as' => 'biller.incomes.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\income',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'additionals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'additionals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'additionals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'additionals/{additional}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'additionals/{additional}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'additionals/{additional}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'additionals/{additional}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.additionals.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.additionals.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'additionals/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\additional\\AdditionalsTableController',
        'as' => 'biller.additionals.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\additional',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'markets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'markets/{market}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'markets/{market}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'markets/{market}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'markets/{market}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.markets.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'market/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketTableController',
        'as' => 'biller.markets.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.markets.edit2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'markets/{id}/edits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@edit2',
        'controller' => 'App\\Http\\Controllers\\Focus\\market\\MarketController@edit2',
        'as' => 'biller.markets.edit2',
        'namespace' => 'App\\Http\\Controllers\\Focus\\market',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'banks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'banks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'banks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'banks/{bank}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'banks/{bank}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'banks/{bank}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'banks/{bank}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.banks.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.banks.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'banks/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\bank\\BanksTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\bank\\BanksTableController',
        'as' => 'biller.banks.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\bank',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currencies/{currency}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.currencies.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.currencies.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'currencies/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\currency\\CurrenciesTableController',
        'as' => 'biller.currencies.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\currency',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customergroups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customergroups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customergroups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customergroups/{customergroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customergroups/{customergroup}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customergroups/{customergroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customergroups/{customergroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customergroups.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customergroups.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customergroups/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\customergroup\\CustomergroupsTableController',
        'as' => 'biller.customergroups.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customergroup',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customfields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customfields/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customfields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customfields/{customfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customfields/{customfield}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customfields/{customfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customfields/{customfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customfields.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customfields.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customfields/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\customfield\\CustomfieldsTableController',
        'as' => 'biller.customfields.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customfield',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments/{department}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.departments.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.departments.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'departments/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\department\\DepartmentsTableController',
        'as' => 'biller.departments.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\department',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.load_events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/load_events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@load_events',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@load_events',
        'as' => 'biller.events.load_events',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.update_event' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/update_event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@update_event',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@update_event',
        'as' => 'biller.events.update_event',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.delete_event' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/delete_event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@delete_event',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@delete_event',
        'as' => 'biller.events.delete_event',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsTableController',
        'as' => 'biller.events.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.events.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.events.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\event\\EventsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\event',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'miscs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'miscs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'miscs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'miscs/{misc}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'miscs/{misc}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'miscs/{misc}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'miscs/{misc}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.miscs.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.miscs.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'miscs/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\misc\\MiscsTableController',
        'as' => 'biller.miscs.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\misc',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes/{note}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes/{note}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'notes/{note}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'notes/{note}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.notes.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notes.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notes/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\note\\NotesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\note\\NotesTableController',
        'as' => 'biller.notes.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\note',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.orders.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'orders/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\order\\OrdersTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\order\\OrdersTableController',
        'as' => 'biller.orders.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\order',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'prefixes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'prefixes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'prefixes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'prefixes/{prefix}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'prefixes/{prefix}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'prefixes/{prefix}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'prefixes/{prefix}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.prefixes.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.prefixes.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'prefixes/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\prefix\\PrefixesTableController',
        'as' => 'biller.prefixes.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\prefix',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'productcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productcategories/{productcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productcategories/{productcategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'productcategories/{productcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'productcategories/{productcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productcategories.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productcategories.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'productcategories/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\productcategory\\ProductcategoriesTableController',
        'as' => 'biller.productcategories.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productcategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productvariables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productvariables/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'productvariables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productvariables/{productvariable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productvariables/{productvariable}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'productvariables/{productvariable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'productvariables/{productvariable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.productvariables.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.productvariables.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'productvariables/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\productvariable\\ProductvariablesTableController',
        'as' => 'biller.productvariables.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\productvariable',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchaseorders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchaseorders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchaseorders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchaseorders/{purchaseorder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchaseorders/{purchaseorder}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'purchaseorders/{purchaseorder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'purchaseorders/{purchaseorder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.purchaseorders.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.purchaseorders.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchaseorders/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\purchaseorder\\PurchaseordersTableController',
        'as' => 'biller.purchaseorders.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\purchaseorder',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.convert' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotes/convert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@convert',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@convert',
        'as' => 'biller.quotes.convert',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.bill_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotes/quotes_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@update_status',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@update_status',
        'as' => 'biller.quotes.bill_status',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotes/{quote}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.quotes.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.quotes.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotes/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\quote\\QuotesTableController',
        'as' => 'biller.quotes.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\quote',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'templates/{template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'templates/{template}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'templates/{template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'templates/{template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.templates.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.templates.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'templates/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\template\\TemplatesTableController',
        'as' => 'biller.templates.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\template',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms/{term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms/{term}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'terms/{term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'terms/{term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.terms.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.terms.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'terms/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\term\\TermsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\term\\TermsTableController',
        'as' => 'biller.terms.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\term',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactioncategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactioncategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transactioncategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactioncategories/{transactioncategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactioncategories/{transactioncategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transactioncategories/{transactioncategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transactioncategories/{transactioncategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactioncategories.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactioncategories.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transactioncategories/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\transactioncategory\\TransactioncategoriesTableController',
        'as' => 'biller.transactioncategories.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transactioncategory',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'usergatewayentries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'usergatewayentries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'usergatewayentries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'usergatewayentries/{usergatewayentry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'usergatewayentries/{usergatewayentry}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'usergatewayentries/{usergatewayentry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'usergatewayentries/{usergatewayentry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.usergatewayentries.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.usergatewayentries.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'usergatewayentries/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\gateway\\UsergatewayentriesTableController',
        'as' => 'biller.usergatewayentries.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\gateway',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'warehouses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouses/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouses/{warehouse}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'warehouses/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'warehouses/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.warehouses.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.warehouses.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'warehouses/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\warehouse\\WarehousesTableController',
        'as' => 'biller.warehouses.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\warehouse',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customer_send_email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@send_bill',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@send_bill',
        'as' => 'biller.customer_send_email',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.selected_action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/selected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@selected_action',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@selected_action',
        'as' => 'biller.customers.selected_action',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@wallet',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@wallet',
        'as' => 'biller.customers.wallet',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.wallet_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@wallet',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@wallet',
        'as' => 'biller.customers.wallet_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.wallet_load' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/wallet_load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@wallet_transactions',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@wallet_transactions',
        'as' => 'biller.customers.wallet_load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@search',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@search',
        'as' => 'biller.customers.search',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.select' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/select',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@select',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@select',
        'as' => 'biller.customers.select',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.active' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@active',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@active',
        'as' => 'biller.customers.active',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/{customer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.customers.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.customers.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\customer\\CustomersTableController',
        'as' => 'biller.customers.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\customer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.set_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/set_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@set_permission',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@set_permission',
        'as' => 'biller.hrms.set_permission',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.payroll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/payroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@payroll',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@payroll',
        'as' => 'biller.hrms.payroll',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/attendance_new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance',
        'as' => 'biller.hrms.attendance',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.attendance_destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/attendance_destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_destroy',
        'as' => 'biller.hrms.attendance_destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.attendance_destroy_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/attendance_destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_destroy',
        'as' => 'biller.hrms.attendance_destroy_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.attendance_load' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/attendance_load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_load',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_load',
        'as' => 'biller.hrms.attendance_load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.attendance_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_list',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_list',
        'as' => 'biller.hrms.attendance_list',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.attendance_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_store',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@attendance_store',
        'as' => 'biller.hrms.attendance_store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.related_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/related_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@related_permission',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@related_permission',
        'as' => 'biller.hrms.related_permission',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.role_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/role_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@role_permission',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@role_permission',
        'as' => 'biller.hrms.role_permission',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.active' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@active',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@active',
        'as' => 'biller.hrms.active',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.admin_role_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/admin_permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@admin_permissions',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@admin_permissions',
        'as' => 'biller.hrms.admin_role_permission',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/{hrm}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hrms/{hrm}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'hrms/{hrm}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hrms/{hrm}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.hrms.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.hrms.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hrms/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\hrm\\HrmsTableController',
        'as' => 'biller.hrms.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\hrm',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.role.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.role.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.role.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.role.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.role.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.role.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.role.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'role/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\role\\RoleTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\role\\RoleTableController',
        'as' => 'biller.role.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\role',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.import.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'import/{type?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@index',
        'as' => 'biller.import.general',
        'namespace' => 'App\\Http\\Controllers\\Focus\\import',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.import.general_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import/{type?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@index',
        'as' => 'biller.import.general_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\import',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.import.import_process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import_process/{type?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@import_process',
        'controller' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@import_process',
        'as' => 'biller.import.import_process',
        'namespace' => 'App\\Http\\Controllers\\Focus\\import',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.import.sample' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sample/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@samples',
        'controller' => 'App\\Http\\Controllers\\Focus\\import\\ImportController@samples',
        'as' => 'biller.import.sample',
        'namespace' => 'App\\Http\\Controllers\\Focus\\import',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.bill_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bill_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@update_status',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@update_status',
        'as' => 'biller.bill_status',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.pos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@pos',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@pos',
        'as' => 'biller.invoices.pos',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.pos_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pos_create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@pos_store',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@pos_store',
        'as' => 'biller.invoices.pos_store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.draft_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'draft_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@draft_store',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@draft_store',
        'as' => 'biller.invoices.draft_store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.drafts_load' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'drafts_load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@drafts_load',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@drafts_load',
        'as' => 'biller.invoices.drafts_load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.draft_view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'draft_view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@draft_view',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@draft_view',
        'as' => 'biller.invoices.draft_view',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.pos_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pos_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@pos_update',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@pos_update',
        'as' => 'biller.invoices.pos_update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/{invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoices/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesTableController',
        'as' => 'biller.invoices.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.print_document' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/print_document/{id}/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@print_document',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@print_document',
        'as' => 'biller.invoices.print_document',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.duplicate_invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'duplicate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@duplicate_invoice',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@duplicate_invoice',
        'as' => 'biller.invoices.duplicate_invoice',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.invoices.backgroundPrint' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backgroundPrint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@backgroundPrint',
        'controller' => 'App\\Http\\Controllers\\Focus\\invoice\\InvoicesController@backgroundPrint',
        'as' => 'biller.invoices.backgroundPrint',
        'namespace' => 'App\\Http\\Controllers\\Focus\\invoice',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.pos.browser_print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'browser_print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\printer\\PrinterController@browser_print',
        'controller' => 'App\\Http\\Controllers\\Focus\\printer\\PrinterController@browser_print',
        'as' => 'biller.pos.browser_print',
        'namespace' => 'App\\Http\\Controllers\\Focus\\printer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.register.open' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register/open',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\printer\\RegistersController@open',
        'controller' => 'App\\Http\\Controllers\\Focus\\printer\\RegistersController@open',
        'as' => 'biller.register.open',
        'namespace' => 'App\\Http\\Controllers\\Focus\\printer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.register.close' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/close',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\printer\\RegistersController@close',
        'controller' => 'App\\Http\\Controllers\\Focus\\printer\\RegistersController@close',
        'as' => 'biller.register.close',
        'namespace' => 'App\\Http\\Controllers\\Focus\\printer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.register.load' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\printer\\RegistersController@load',
        'controller' => 'App\\Http\\Controllers\\Focus\\printer\\RegistersController@load',
        'as' => 'biller.register.load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\printer',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.product_label' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/label',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_label',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_label',
        'as' => 'biller.products.product_label',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.standard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/standard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@standard',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@standard',
        'as' => 'biller.products.standard',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.standard_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/standard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@standard',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@standard',
        'as' => 'biller.products.standard_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.product_label_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/label',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_label',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_label',
        'as' => 'biller.products.product_label_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.stock_transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/stock_transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@stock_transfer',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@stock_transfer',
        'as' => 'biller.products.stock_transfer',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.stock_transfer_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/stock_transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@stock_transfer',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@stock_transfer',
        'as' => 'biller.products.stock_transfer_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsTableController',
        'as' => 'biller.products.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.product_search_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/search/{bill_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_search',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_search',
        'as' => 'biller.products.product_search_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.product_sub_load' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/product_sub_load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_sub_load',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@product_sub_load',
        'as' => 'biller.products.product_sub_load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.product_search_pos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/pos/{bill_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@pos',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@pos',
        'as' => 'biller.products.product_search_pos',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.products.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\product\\ProductsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.load' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@load',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@load',
        'as' => 'biller.projects.load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.update_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/update_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@update_status',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@update_status',
        'as' => 'biller.projects.update_status',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.store_meta' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/store_meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@store_meta',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@store_meta',
        'as' => 'biller.projects.store_meta',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.delete_meta' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/delete_meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@delete_meta',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@delete_meta',
        'as' => 'biller.projects.delete_meta',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.log_history' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/log_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@log_history',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@log_history',
        'as' => 'biller.projects.log_history',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.notes' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@notes',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@notes',
        'as' => 'biller.projects.notes',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.invoices' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
          2 => 'project',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@invoices',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@invoices',
        'as' => 'biller.projects.invoices',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/{project}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.projects.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.projects.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\ProjectsTableController',
        'as' => 'biller.projects.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.statements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/statement/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@statement',
        'as' => 'biller.reports.statements',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.generate_statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/statement/generate/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_statement',
        'as' => 'biller.reports.generate_statement',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.generate_tax_statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/statement/tax/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_tax_statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_tax_statement',
        'as' => 'biller.reports.generate_tax_statement',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.generate_stock_statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/statement/stock/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_stock_statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_stock_statement',
        'as' => 'biller.reports.generate_stock_statement',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.charts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/chart/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\ChartController@chart',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\ChartController@chart',
        'as' => 'biller.reports.charts',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.charts_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/chart/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\ChartController@chart',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\ChartController@chart',
        'as' => 'biller.reports.charts_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.summary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/summary/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\SummaryController@summary',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\SummaryController@summary',
        'as' => 'biller.reports.summary',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.summary_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/summary/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\SummaryController@summary',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\SummaryController@summary',
        'as' => 'biller.reports.summary_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.pos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/pos/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@pos_statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@pos_statement',
        'as' => 'biller.reports.pos',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.generate_market_statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/statement/generate_market/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_market_statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@generate_market_statement',
        'as' => 'biller.reports.generate_market_statement',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.reports.profit_statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/profit_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@profit_statement',
        'controller' => 'App\\Http\\Controllers\\Focus\\report\\StatementController@profit_statement',
        'as' => 'biller.reports.profit_statement',
        'namespace' => 'App\\Http\\Controllers\\Focus\\report',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliers/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@search',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@search',
        'as' => 'biller.suppliers.search',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.select' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliers/select',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@select',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@select',
        'as' => 'biller.suppliers.select',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.active' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliers/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@active',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@active',
        'as' => 'biller.suppliers.active',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'suppliers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'suppliers/{supplier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.suppliers.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.suppliers.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliers/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\supplier\\SuppliersTableController',
        'as' => 'biller.suppliers.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\supplier',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.load' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tasks/load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@load',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@load',
        'as' => 'biller.tasks.load',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.update_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tasks/update_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@update_status',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@update_status',
        'as' => 'biller.tasks.update_status',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/{task}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.tasks.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.tasks.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tasks/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\project\\TasksTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\project\\TasksTableController',
        'as' => 'biller.tasks.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\project',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.payer_search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transactions/payer_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@payer_search',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@payer_search',
        'as' => 'biller.transactions.payer_search',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.index',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactions/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactions/{transaction}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.edit',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@edit',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transactions/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transactions/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.transactions.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.transactions.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transactions/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Focus\\transaction\\TransactionsTableController',
        'as' => 'biller.transactions.get',
        'namespace' => 'App\\Http\\Controllers\\Focus\\transaction',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@about',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@about',
        'as' => 'biller.about',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.update_db' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_db',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@update_db',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@update_db',
        'as' => 'biller.update_db',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.server_info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'server_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@server_info',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@server_info',
        'as' => 'biller.server_info',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.optimize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@optimize',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UpdateController@optimize',
        'as' => 'biller.optimize',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => '\\App\\Http\\Controllers\\Focus\\general\\CoreController@showLoginForm',
        'controller' => '\\App\\Http\\Controllers\\Focus\\general\\CoreController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CoreController@login',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CoreController@login',
        'as' => 'biller.login',
        'namespace' => 'App\\Http\\Controllers\\Focus',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CoreController@logout',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CoreController@logout',
        'as' => 'biller.logout',
        'namespace' => 'App\\Http\\Controllers\\Focus',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.stripe_api_request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe_token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@stripe_api_request',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@stripe_api_request',
        'as' => 'biller.stripe_api_request',
        'namespace' => 'App\\Http\\Controllers\\Focus',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.cron.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/{method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\JobController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\JobController@index',
        'as' => 'biller.cron.jobs',
        'namespace' => 'App\\Http\\Controllers\\Focus',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal_process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_process',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_process',
        'as' => 'biller.',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.paypal_process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal_process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_process',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_process',
        'as' => 'biller.paypal_process',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.paypal_response' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal_response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_response',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_response',
        'as' => 'biller.paypal_response',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.paypal_error' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal_error',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_error',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@paypal_error',
        'as' => 'biller.paypal_error',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.paypal_capture' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal_capture/{orderId?}/capture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@capturePaymentWithpaypal',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@capturePaymentWithpaypal',
        'as' => 'biller.paypal_capture',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.view_bill' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view_bill/{id}/{type}/{token}/{pdf}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'valid_token',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@index',
        'as' => 'biller.view_bill',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.print_bill' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'print_bill/{id}/{type}/{token}/{pdf}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'valid_token',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@print_pdf',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@print_pdf',
        'as' => 'biller.print_bill',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.print_compact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'print_compact/{id}/{type}/{token}/{pdf}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'valid_token',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@print_compact',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@print_compact',
        'as' => 'biller.print_compact',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.view_bank' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view_bank/{id}/{type}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'valid_token',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@view_bank',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@view_bank',
        'as' => 'biller.view_bank',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.pay_card' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pay_card/{id}/{type}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'valid_token',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@pay_card',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@pay_card',
        'as' => 'biller.pay_card',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.process_card' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'process_card/{id}/{type}/{token}/{gateway}/{cid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'valid_token',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@process_payment',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\BillsController@process_payment',
        'as' => 'biller.process_card',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.load_template' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'load_template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@load',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@load',
        'as' => 'biller.load_template',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.send_bill' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_bill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@send_bill',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@send_bill',
        'as' => 'biller.send_bill',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.group_send_email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'group_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@group_send_email',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@group_send_email',
        'as' => 'biller.group_send_email',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.send_bill_sms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_bill_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@send_bill_sms',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\CommunicationsController@send_bill_sms',
        'as' => 'biller.send_bill_sms',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.messages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.messages',
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.messages.create',
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@create',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@create',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.messages.store',
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@store',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@store',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.messages.show',
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@show',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@show',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'message/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.messages.update',
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'message/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'as' => 'biller.messages.destroy',
        'uses' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Focus\\communication\\MessagesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Focus\\communication',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.bill_payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bill_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\payment\\PaymentsController@payment',
        'controller' => 'App\\Http\\Controllers\\Focus\\payment\\PaymentsController@payment',
        'as' => 'biller.bill_payment',
        'namespace' => 'App\\Http\\Controllers\\Focus\\payment',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.bill_bulk_payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bulk_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\payment\\PaymentsController@bill_bulk_payment',
        'controller' => 'App\\Http\\Controllers\\Focus\\payment\\PaymentsController@bill_bulk_payment',
        'as' => 'biller.bill_bulk_payment',
        'namespace' => 'App\\Http\\Controllers\\Focus\\payment',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CoreDashboard@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CoreDashboard@index',
        'as' => 'biller.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.mini_dash' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CoreDashboard@mini_dash',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CoreDashboard@mini_dash',
        'as' => 'biller.mini_dash',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.bill_attachment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bill_attachment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\FileController@bill_attachment',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\FileController@bill_attachment',
        'as' => 'biller.bill_attachment',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.print_payslip' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'print_payslip/{id}/{type}/{pdf}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\GeneralController@print_receipt',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\GeneralController@print_receipt',
        'as' => 'biller.print_payslip',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.project_attachment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'project_attachment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\FileController@project_attachment',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\FileController@project_attachment',
        'as' => 'biller.project_attachment',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.bill_cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bill_cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\GeneralController@bill_cancel',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\GeneralController@bill_cancel',
        'as' => 'biller.bill_cancel',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@manage',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@manage',
        'as' => 'biller.business.settings',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.update_settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/update_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@update',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@update',
        'as' => 'biller.business.update_settings',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.billing_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/billing_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_settings',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_settings',
        'as' => 'biller.business.billing_settings',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.billing_settings_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/billing_settings_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_settings_update',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_settings_update',
        'as' => 'biller.business.billing_settings_update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.activate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@activate',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@activate',
        'as' => 'biller.activate',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.activate_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@activate',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@activate',
        'as' => 'biller.activate_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.email_sms_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/email_sms_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@email_sms_settings',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@email_sms_settings',
        'as' => 'biller.business.email_sms_settings',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.email_settings_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/email_settings_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@email_settings_update',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@email_settings_update',
        'as' => 'biller.business.email_settings_update',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.cron' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CronController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CronController@index',
        'as' => 'biller.cron',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.cron_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CronController@index',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CronController@index',
        'as' => 'biller.cron_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.billing_preference' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/billing_preference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_preference',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_preference',
        'as' => 'biller.settings.billing_preference',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.billing_preference_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/billing_preference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_preference',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@billing_preference',
        'as' => 'biller.settings.billing_preference_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.payment_preference' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/payment_preference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@payment_preference',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@payment_preference',
        'as' => 'biller.settings.payment_preference',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.payment_preference_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/payment_preference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@payment_preference',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@payment_preference',
        'as' => 'biller.settings.payment_preference_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.accounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@accounts',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@accounts',
        'as' => 'biller.settings.accounts',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.accounts_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@accounts',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@accounts',
        'as' => 'biller.settings.accounts_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.notification_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/notification_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@notification_email',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@notification_email',
        'as' => 'biller.settings.notification_email',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.notification_email_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/notification_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@notification_email',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@notification_email',
        'as' => 'biller.settings.notification_email_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.localization' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/localization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@localization',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@localization',
        'as' => 'biller.settings.localization',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.localization_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/localization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@localization',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@localization',
        'as' => 'biller.settings.localization_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.theme' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@theme',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@theme',
        'as' => 'biller.settings.theme',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.theme_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@theme',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@theme',
        'as' => 'biller.settings.theme_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@status',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@status',
        'as' => 'biller.settings.status',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.status_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@status',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@status',
        'as' => 'biller.settings.status_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.crm_hrm_section' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/crm_hrm_section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@crm_hrm_section',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@crm_hrm_section',
        'as' => 'biller.settings.crm_hrm_section',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.crm_hrm_section_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/crm_hrm_section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@crm_hrm_section',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@crm_hrm_section',
        'as' => 'biller.settings.crm_hrm_section_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.pos_preference' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/pos_preference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@pos_preference',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@pos_preference',
        'as' => 'biller.settings.pos_preference',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.pos_preference_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/pos_preference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@pos_preference',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@pos_preference',
        'as' => 'biller.settings.pos_preference_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.currency_exchange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/currency_exchange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@currency_exchange',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@currency_exchange',
        'as' => 'biller.settings.currency_exchange',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.currency_exchange_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/currency_exchange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@currency_exchange',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@currency_exchange',
        'as' => 'biller.settings.currency_exchange_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.business_goals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/business_goals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@business_goals',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@business_goals',
        'as' => 'biller.settings.business_goals',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.business_goals_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/business_goals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@business_goals',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@business_goals',
        'as' => 'biller.settings.business_goals_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.manage_api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@manage_api',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@manage_api',
        'as' => 'biller.settings.manage_api',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.security_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@security_settings',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@security_settings',
        'as' => 'biller.settings.security_settings',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.security_settings_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/settings/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@security_settings',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@security_settings',
        'as' => 'biller.settings.security_settings_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.settings.activities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@activities',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@activities',
        'as' => 'biller.settings.activities',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.todo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/todo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@todo',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@todo',
        'as' => 'biller.todo',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@profile',
        'as' => 'biller.profile',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.edit_profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/edit_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@edit_profile',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@edit_profile',
        'as' => 'biller.edit_profile',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.edit_profile_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'u/edit_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@edit_profile',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@edit_profile',
        'as' => 'biller.edit_profile_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.change_profile_password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/change_profile_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@change_profile_password',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@change_profile_password',
        'as' => 'biller.change_profile_password',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.change_profile_password_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'u/change_profile_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@change_profile_password',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@change_profile_password',
        'as' => 'biller.change_profile_password_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@attendance',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@attendance',
        'as' => 'biller.attendance',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.clock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@clock',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@clock',
        'as' => 'biller.clock',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.load_attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/load_attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@load_attendance',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@load_attendance',
        'as' => 'biller.load_attendance',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@notifications',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@notifications',
        'as' => 'biller.notification',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.read_notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'u/read_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\UserController@read_notifications',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\UserController@read_notifications',
        'as' => 'biller.read_notification',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.clear_cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@clear_cache',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@clear_cache',
        'as' => 'biller.clear_cache',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.dev_manager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/dev',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@dev_manager',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@dev_manager',
        'as' => 'biller.business.dev_manager',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.business.dev_manager_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/dev',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'biller',
        ),
        'uses' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@dev_manager',
        'controller' => 'App\\Http\\Controllers\\Focus\\general\\CompanyController@dev_manager',
        'as' => 'biller.business.dev_manager_post',
        'namespace' => 'App\\Http\\Controllers\\Focus\\general',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.auth.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Multi\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Multi\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'frontend.auth.password.email',
        'namespace' => 'App\\Http\\Controllers\\Multi\\Auth',
        'prefix' => '/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.auth.password.email_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Multi\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Multi\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'frontend.auth.password.email_post',
        'namespace' => 'App\\Http\\Controllers\\Multi\\Auth',
        'prefix' => '/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.auth.password.reset.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Multi\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Multi\\Auth\\ResetPasswordController@showResetForm',
        'as' => 'frontend.auth.password.reset.form',
        'namespace' => 'App\\Http\\Controllers\\Multi\\Auth',
        'prefix' => '/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.auth.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Multi\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Multi\\Auth\\ResetPasswordController@reset',
        'as' => 'frontend.auth.password.reset',
        'namespace' => 'App\\Http\\Controllers\\Multi\\Auth',
        'prefix' => '/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@showLoginForm',
        'as' => 'crm.login',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@login',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@login',
        'as' => 'crm.login.post',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@logout',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@logout',
        'as' => 'crm.logout',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.password.enter_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Crm\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'crm.password.enter_email',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Crm\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'crm.password.email',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.password.reset.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Crm\\ResetPasswordController@showResetForm',
        'as' => 'crm.password.reset.form',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Crm\\ResetPasswordController@reset',
        'as' => 'crm.password.reset',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@register',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@register',
        'as' => 'crm.register',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.register_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@register',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@register',
        'as' => 'crm.register_post',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.accountVerify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/account/verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@accountVerify',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerLogin@accountVerify',
        'as' => 'crm.accountVerify',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/invoices/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesTableController',
        'as' => 'crm.invoices.get',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.index',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@index',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@index',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.create',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@create',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@create',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.store',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@store',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@store',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.show',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@show',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@show',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/invoices/{invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.edit',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@edit',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'crm/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.update',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@update',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@update',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'crm/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\Crm\\InvoicesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Crm\\InvoicesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/quotes/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesTableController',
        'as' => 'crm.quotes.get',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.approve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/quotes/approve/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@approve',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@approve',
        'as' => 'crm.quotes.approve',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.index',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@index',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@index',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.create',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@create',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@create',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.store',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@store',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@store',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.show',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@show',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@show',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/quotes/{quote}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.edit',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@edit',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'crm/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.update',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@update',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@update',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.quotes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'crm/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'as' => 'crm.quotes.destroy',
        'uses' => 'App\\Http\\Controllers\\Crm\\QuotesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Crm\\QuotesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.projects.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/projects/explore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ProjectsController@show',
        'controller' => 'App\\Http\\Controllers\\Crm\\ProjectsController@show',
        'as' => 'crm.projects.show',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.projects.tasks' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ProjectsController@tasks',
        'controller' => 'App\\Http\\Controllers\\Crm\\ProjectsController@tasks',
        'as' => 'crm.projects.tasks',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.projects.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ProjectsController@index',
        'controller' => 'App\\Http\\Controllers\\Crm\\ProjectsController@index',
        'as' => 'crm.projects.index',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.projects.get' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/projects/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\ProjectsTableController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Crm\\ProjectsTableController',
        'as' => 'crm.projects.get',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerHome@profile',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerHome@profile',
        'as' => 'crm.user.update',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.user.update+post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'crm/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerHome@update_profile',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerHome@update_profile',
        'as' => 'crm.user.update+post',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crm.user.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crm/user/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm',
        ),
        'uses' => 'App\\Http\\Controllers\\Crm\\CustomerHome@wallet',
        'controller' => 'App\\Http\\Controllers\\Crm\\CustomerHome@wallet',
        'as' => 'crm.user.wallet',
        'namespace' => 'App\\Http\\Controllers\\Crm',
        'prefix' => '/crm',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
