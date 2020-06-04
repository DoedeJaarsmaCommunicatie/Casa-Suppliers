<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit832010d2d27cfaaba191306a41aeffc4
{
    public static $files = array (
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '5d9c5be1aa1fbc12016e2c5bd16bbc70' => __DIR__ . '/..' . '/dusank/knapsack/src/collection_functions.php',
        'e5fde315a98ded36f9b25eb160f6c9fc' => __DIR__ . '/..' . '/dusank/knapsack/src/utility_functions.php',
        '241d2b5b9c1e680c0770b006b0271156' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p9.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\HttpClient\\' => 29,
            'Symfony\\Component\\HttpClient\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'D' => 
        array (
            'DusanKasan\\Knapsack\\' => 20,
        ),
        'C' => 
        array (
            'CasaLever\\Pub\\' => 14,
            'CasaLever\\Admin\\' => 16,
            'CasaLever\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client-contracts',
        ),
        'Symfony\\Component\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'DusanKasan\\Knapsack\\' => 
        array (
            0 => __DIR__ . '/..' . '/dusank/knapsack/src',
        ),
        'CasaLever\\Pub\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'CasaLever\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
        'CasaLever\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'CasaLever\\Admin\\CasaLever_Admin' => __DIR__ . '/../..' . '/admin/class-casa-lever-admin.php',
        'CasaLever\\Admin\\WooCommerce\\Fields\\Field' => __DIR__ . '/../..' . '/admin/src/WooCommerce/Fields/Field.php',
        'CasaLever\\Admin\\WooCommerce\\Fields\\FieldManager' => __DIR__ . '/../..' . '/admin/src/WooCommerce/Fields/FieldManager.php',
        'CasaLever\\Admin\\WooCommerce\\Fields\\Supplier' => __DIR__ . '/../..' . '/admin/src/WooCommerce/Fields/Supplier.php',
        'CasaLever\\CasaLever' => __DIR__ . '/../..' . '/includes/class-casa-lever.php',
        'CasaLever\\CasaLever_Activator' => __DIR__ . '/../..' . '/includes/class-casa-lever-activator.php',
        'CasaLever\\CasaLever_Deactivator' => __DIR__ . '/../..' . '/includes/class-casa-lever-deactivator.php',
        'CasaLever\\CasaLever_Loader' => __DIR__ . '/../..' . '/includes/class-casa-lever-loader.php',
        'CasaLever\\CasaLever_i18n' => __DIR__ . '/../..' . '/includes/class-casa-lever-i18n.php',
        'CasaLever\\Pub\\CasaLever_Public' => __DIR__ . '/../..' . '/public/class-casa-lever-public.php',
        'DusanKasan\\Knapsack\\Collection' => __DIR__ . '/..' . '/dusank/knapsack/src/Collection.php',
        'DusanKasan\\Knapsack\\CollectionTrait' => __DIR__ . '/..' . '/dusank/knapsack/src/CollectionTrait.php',
        'DusanKasan\\Knapsack\\Exceptions\\InvalidArgument' => __DIR__ . '/..' . '/dusank/knapsack/src/Exceptions/InvalidArgument.php',
        'DusanKasan\\Knapsack\\Exceptions\\InvalidReturnValue' => __DIR__ . '/..' . '/dusank/knapsack/src/Exceptions/InvalidReturnValue.php',
        'DusanKasan\\Knapsack\\Exceptions\\ItemNotFound' => __DIR__ . '/..' . '/dusank/knapsack/src/Exceptions/ItemNotFound.php',
        'DusanKasan\\Knapsack\\Exceptions\\NoMoreItems' => __DIR__ . '/..' . '/dusank/knapsack/src/Exceptions/NoMoreItems.php',
        'DusanKasan\\Knapsack\\Exceptions\\RuntimeException' => __DIR__ . '/..' . '/dusank/knapsack/src/Exceptions/RuntimeException.php',
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\HttpClient\\AmpHttpClient' => __DIR__ . '/..' . '/symfony/http-client/AmpHttpClient.php',
        'Symfony\\Component\\HttpClient\\CachingHttpClient' => __DIR__ . '/..' . '/symfony/http-client/CachingHttpClient.php',
        'Symfony\\Component\\HttpClient\\Chunk\\DataChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/DataChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\ErrorChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/ErrorChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\FirstChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/FirstChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\InformationalChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/InformationalChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\LastChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/LastChunk.php',
        'Symfony\\Component\\HttpClient\\CurlHttpClient' => __DIR__ . '/..' . '/symfony/http-client/CurlHttpClient.php',
        'Symfony\\Component\\HttpClient\\DataCollector\\HttpClientDataCollector' => __DIR__ . '/..' . '/symfony/http-client/DataCollector/HttpClientDataCollector.php',
        'Symfony\\Component\\HttpClient\\DependencyInjection\\HttpClientPass' => __DIR__ . '/..' . '/symfony/http-client/DependencyInjection/HttpClientPass.php',
        'Symfony\\Component\\HttpClient\\Exception\\ClientException' => __DIR__ . '/..' . '/symfony/http-client/Exception/ClientException.php',
        'Symfony\\Component\\HttpClient\\Exception\\HttpExceptionTrait' => __DIR__ . '/..' . '/symfony/http-client/Exception/HttpExceptionTrait.php',
        'Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/http-client/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\HttpClient\\Exception\\JsonException' => __DIR__ . '/..' . '/symfony/http-client/Exception/JsonException.php',
        'Symfony\\Component\\HttpClient\\Exception\\RedirectionException' => __DIR__ . '/..' . '/symfony/http-client/Exception/RedirectionException.php',
        'Symfony\\Component\\HttpClient\\Exception\\ServerException' => __DIR__ . '/..' . '/symfony/http-client/Exception/ServerException.php',
        'Symfony\\Component\\HttpClient\\Exception\\TimeoutException' => __DIR__ . '/..' . '/symfony/http-client/Exception/TimeoutException.php',
        'Symfony\\Component\\HttpClient\\Exception\\TransportException' => __DIR__ . '/..' . '/symfony/http-client/Exception/TransportException.php',
        'Symfony\\Component\\HttpClient\\HttpClient' => __DIR__ . '/..' . '/symfony/http-client/HttpClient.php',
        'Symfony\\Component\\HttpClient\\HttpClientTrait' => __DIR__ . '/..' . '/symfony/http-client/HttpClientTrait.php',
        'Symfony\\Component\\HttpClient\\HttpOptions' => __DIR__ . '/..' . '/symfony/http-client/HttpOptions.php',
        'Symfony\\Component\\HttpClient\\HttplugClient' => __DIR__ . '/..' . '/symfony/http-client/HttplugClient.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpBody' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpBody.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpListener' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpListener.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpResolver' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpResolver.php',
        'Symfony\\Component\\HttpClient\\Internal\\ClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/ClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\CurlClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/CurlClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\DnsCache' => __DIR__ . '/..' . '/symfony/http-client/Internal/DnsCache.php',
        'Symfony\\Component\\HttpClient\\Internal\\HttplugWaitLoop' => __DIR__ . '/..' . '/symfony/http-client/Internal/HttplugWaitLoop.php',
        'Symfony\\Component\\HttpClient\\Internal\\NativeClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/NativeClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\PushedResponse' => __DIR__ . '/..' . '/symfony/http-client/Internal/PushedResponse.php',
        'Symfony\\Component\\HttpClient\\MockHttpClient' => __DIR__ . '/..' . '/symfony/http-client/MockHttpClient.php',
        'Symfony\\Component\\HttpClient\\NativeHttpClient' => __DIR__ . '/..' . '/symfony/http-client/NativeHttpClient.php',
        'Symfony\\Component\\HttpClient\\NoPrivateNetworkHttpClient' => __DIR__ . '/..' . '/symfony/http-client/NoPrivateNetworkHttpClient.php',
        'Symfony\\Component\\HttpClient\\Psr18Client' => __DIR__ . '/..' . '/symfony/http-client/Psr18Client.php',
        'Symfony\\Component\\HttpClient\\Psr18NetworkException' => __DIR__ . '/..' . '/symfony/http-client/Psr18Client.php',
        'Symfony\\Component\\HttpClient\\Psr18RequestException' => __DIR__ . '/..' . '/symfony/http-client/Psr18Client.php',
        'Symfony\\Component\\HttpClient\\Response\\AmpResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/AmpResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\CurlResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/CurlResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\HttplugPromise' => __DIR__ . '/..' . '/symfony/http-client/Response/HttplugPromise.php',
        'Symfony\\Component\\HttpClient\\Response\\MockResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/MockResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\NativeResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/NativeResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\ResponseStream' => __DIR__ . '/..' . '/symfony/http-client/Response/ResponseStream.php',
        'Symfony\\Component\\HttpClient\\Response\\ResponseTrait' => __DIR__ . '/..' . '/symfony/http-client/Response/ResponseTrait.php',
        'Symfony\\Component\\HttpClient\\Response\\StreamWrapper' => __DIR__ . '/..' . '/symfony/http-client/Response/StreamWrapper.php',
        'Symfony\\Component\\HttpClient\\Response\\TraceableResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/TraceableResponse.php',
        'Symfony\\Component\\HttpClient\\ScopingHttpClient' => __DIR__ . '/..' . '/symfony/http-client/ScopingHttpClient.php',
        'Symfony\\Component\\HttpClient\\TraceableHttpClient' => __DIR__ . '/..' . '/symfony/http-client/TraceableHttpClient.php',
        'Symfony\\Contracts\\HttpClient\\ChunkInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/ChunkInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\ClientExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/ClientExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\DecodingExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/DecodingExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/ExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\HttpExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/HttpExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\RedirectionExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/RedirectionExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\ServerExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/ServerExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\TimeoutExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/TimeoutExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/TransportExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/HttpClientInterface.php',
        'Symfony\\Contracts\\HttpClient\\ResponseInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/ResponseInterface.php',
        'Symfony\\Contracts\\HttpClient\\ResponseStreamInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/ResponseStreamInterface.php',
        'Symfony\\Contracts\\HttpClient\\Test\\HttpClientTestCase' => __DIR__ . '/..' . '/symfony/http-client-contracts/Test/HttpClientTestCase.php',
        'Symfony\\Contracts\\HttpClient\\Test\\TestHttpServer' => __DIR__ . '/..' . '/symfony/http-client-contracts/Test/TestHttpServer.php',
        'Symfony\\Contracts\\Service\\ResetInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ResetInterface.php',
        'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceLocatorTrait.php',
        'Symfony\\Contracts\\Service\\ServiceProviderInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceProviderInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberTrait.php',
        'Symfony\\Contracts\\Service\\Test\\ServiceLocatorTest' => __DIR__ . '/..' . '/symfony/service-contracts/Test/ServiceLocatorTest.php',
        'Symfony\\Polyfill\\Php73\\Php73' => __DIR__ . '/..' . '/symfony/polyfill-php73/Php73.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit832010d2d27cfaaba191306a41aeffc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit832010d2d27cfaaba191306a41aeffc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit832010d2d27cfaaba191306a41aeffc4::$classMap;

        }, null, ClassLoader::class);
    }
}