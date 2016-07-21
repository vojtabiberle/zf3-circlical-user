<?php

return [
    'circlical' => [
        'user' => [


            /*
             * If you are using Doctrine, you simply to specify the Entity you plan to use. It'll get substituted into
             * the CirclicalUser relationships during Bootstrap.  If you are using Doctrine and want to use
             * the default entities and relationships (recommended) -- this is the only config you need!
             */
            'doctrine' => [
                'entity' => \Application\Entity\User::class,
            ],


            /*
             * These parameters are used whether you use Doctrine or no.  They tell the authentication service
             * how to behave.
             */
            'auth' => [

                /*
                 * A Base64-encoded key, as generated by Halite's key factory
                 * base64_encode( KeyFactory::generateEncryptionKey()->getRawKeyMaterial() );
                 */
                'crypto_key' => 'sfZGFm1rCc7TgPr9aly3WOtAfbEOb/VafB8L3velkd0=',

                /*
                 * Destroy auth cookies when the session ends? (cookie lifespan of 0)
                 */
                'transient' => false,
            ],


            /*
             * Advanced Config:
             *
             * If you aren't using Doctrine, you have to uncomment and specify your providers below.
             *
             * If conversely, you are using Doctrine you can override default providers by tweaking what lies
             * below.
             *
             */
            'providers' => [

                //
                // Authentication mapper
                // Implements
                //

                'auth' => \CirclicalUser\Mapper\AuthenticationMapper::class,


                //
                // User mapper
                // Implements CirclicalUser\Provider\UserProviderInterface
                //

                'user' => \CirclicalUser\Mapper\UserMapper::class,

                //
                // Role mapper
                // Implements CirclicalUser\Provider\RoleProvider
                //

                'role' => \CirclicalUser\Mapper\RoleMapper::class,


                // Authentication mapper
                // Implements CirclicalUser\Provider\AuthenticationProviderInterface
                //

                'rules' => [

                    //
                    // Group permission mapper
                    // Implements \CirclicalUser\Provider\GroupPermissionProviderInterface
                    //

                    'group' => \CirclicalUser\Mapper\GroupPermissionMapper::class,

                    //
                    // User permission mapper
                    // Implements \CirclicalUser\Provider\UserPermissionProviderInterface

                    'user' => \CirclicalUser\Mapper\UserPermissionMapper::class,

                ],
            ],
        ],
    ],
];