<?php return array (
  'facade/ignition' => 
  array (
    'providers' => 
    array (
      0 => 'Facade\\Ignition\\IgnitionServiceProvider',
    ),
    'aliases' => 
    array (
      'Flare' => 'Facade\\Ignition\\Facades\\Flare',
    ),
  ),
  'fruitcake/laravel-cors' => 
  array (
    'providers' => 
    array (
      0 => 'Fruitcake\\Cors\\CorsServiceProvider',
    ),
  ),
  'joselfonseca/lighthouse-graphql-passport-auth' => 
  array (
    'providers' => 
    array (
      0 => 'Joselfonseca\\LighthouseGraphQLPassport\\Providers\\LighthouseGraphQLPassportServiceProvider',
    ),
  ),
  'laravel/passport' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Passport\\PassportServiceProvider',
    ),
  ),
  'laravel/sail' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sail\\SailServiceProvider',
    ),
  ),
  'laravel/sanctum' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'mll-lab/laravel-graphql-playground' => 
  array (
    'providers' => 
    array (
      0 => 'MLL\\GraphQLPlayground\\GraphQLPlaygroundServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'nuwave/lighthouse' => 
  array (
    'aliases' => 
    array (
      'graphql' => 'Nuwave\\Lighthouse\\GraphQL',
    ),
    'providers' => 
    array (
      0 => 'Nuwave\\Lighthouse\\LighthouseServiceProvider',
      1 => 'Nuwave\\Lighthouse\\Auth\\AuthServiceProvider',
      2 => 'Nuwave\\Lighthouse\\GlobalId\\GlobalIdServiceProvider',
      3 => 'Nuwave\\Lighthouse\\OrderBy\\OrderByServiceProvider',
      4 => 'Nuwave\\Lighthouse\\Pagination\\PaginationServiceProvider',
      5 => 'Nuwave\\Lighthouse\\Scout\\ScoutServiceProvider',
      6 => 'Nuwave\\Lighthouse\\SoftDeletes\\SoftDeletesServiceProvider',
      7 => 'Nuwave\\Lighthouse\\Validation\\ValidationServiceProvider',
    ),
  ),
);