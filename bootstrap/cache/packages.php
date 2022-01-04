<?php return array (
  'alexusmai/laravel-file-manager' => 
  array (
    'providers' => 
    array (
      0 => 'Alexusmai\\LaravelFileManager\\FileManagerServiceProvider',
    ),
  ),
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
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'fruitcake/laravel-cors' => 
  array (
    'providers' => 
    array (
      0 => 'Fruitcake\\Cors\\CorsServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
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
      1 => 'Nuwave\\Lighthouse\\GlobalId\\GlobalIdServiceProvider',
      2 => 'Nuwave\\Lighthouse\\OrderBy\\OrderByServiceProvider',
      3 => 'Nuwave\\Lighthouse\\Pagination\\PaginationServiceProvider',
      4 => 'Nuwave\\Lighthouse\\Scout\\ScoutServiceProvider',
      5 => 'Nuwave\\Lighthouse\\SoftDeletes\\SoftDeletesServiceProvider',
      6 => 'Nuwave\\Lighthouse\\Validation\\ValidationServiceProvider',
    ),
  ),
);