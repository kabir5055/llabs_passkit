<?php

use Luminouslabs\PassesKit\Google\Components\Common\Barcode;
use Luminouslabs\PassesKit\Google\Components\Common\DateTime;
use Luminouslabs\PassesKit\Google\Components\Common\GroupingInfo;
use Luminouslabs\PassesKit\Google\Components\Common\Image;
use Luminouslabs\PassesKit\Google\Components\Common\ImageModuleData;
use Luminouslabs\PassesKit\Google\Components\Common\LinksModuleData;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Components\Common\TextModuleData;
use Luminouslabs\PassesKit\Google\Components\Common\TimeInterval;
use Luminouslabs\PassesKit\Google\Components\Common\Uri;
use Luminouslabs\PassesKit\Google\Components\Generic\Notifications;
use Luminouslabs\PassesKit\Google\Components\Generic\UpcomingNotification;
use Luminouslabs\PassesKit\Google\Enumerators\BarcodeRenderEncoding;
use Luminouslabs\PassesKit\Google\Enumerators\BarcodeType;
use Luminouslabs\PassesKit\Google\Enumerators\MultipleDevicesAndHoldersAllowedStatus;
use Luminouslabs\PassesKit\Google\Enumerators\State;
use Luminouslabs\PassesKit\Google\Http\GoogleClient;
use Luminouslabs\PassesKit\Google\JWT;
use Luminouslabs\PassesKit\Google\Passes\GenericClass;
use Luminouslabs\PassesKit\Google\Passes\GenericObject;
use Luminouslabs\PassesKit\Google\Repositories\GenericClassRepository;
use Luminouslabs\PassesKit\Google\ServiceCredentials;

$credentials = ServiceCredentials::parse('service_credentials.json');
$client = GoogleClient::createAuthenticatedClient($credentials);
$repository = new GenericClassRepository($client);

$class = new GenericClass(
    id: '1234567890123456789.generic-object',
    multipleDevicesAndHoldersAllowedStatus: MultipleDevicesAndHoldersAllowedStatus::MULTIPLE_HOLDERS,
    linksModuleData: new LinksModuleData(
        uris: [
            new Uri(uri: 'https://example.org/app', description: 'App'),
            new Uri(uri: 'https://example.org', description: 'Homepage'),
        ]
    ),
    imageModulesData: [
        new ImageModuleData(
            mainImage: Image::make('https://example.org/image.png')
        )
    ],
    textModulesData: [
        new TextModuleData(
            header: 'Lorem ipsum',
            body: 'Dolor sit amet'
        )
    ]
);
$repository->create($class);

$object = new GenericObject(
    classId: '1234567890123456789.generic-object',
    id: '1234567890123456789.'.Str::uuid()->toString(),
    cardTitle: LocalizedString::make('en', '::cardTitle::'),
    subheader: LocalizedString::make('en', '::subheader::'),
    header: LocalizedString::make('en', '::header::'),
    logo: Image::make('https://example.org/logo.png'),
    heroImage: Image::make('https://example.org/hero-image.png'),
    hexBackgroundColor: '#333',
    state: State::ACTIVE,
    barcode: new Barcode(
        type: BarcodeType::QR_CODE,
        renderEncoding: BarcodeRenderEncoding::UTF_8,
        value: '1464194291627',
    ),
    validTimeInterval: new TimeInterval(
        start: new DateTime(date: now()),
        end: new DateTime(now()->addMonth())
    ),
    notifications: new Notifications(
        upcomingNotification: new UpcomingNotification(
            enableNotification: true
        ),
    ),
    textModulesData: [
        new TextModuleData(
            id: 'key-1',
            header: 'label-1',
            body: 'value-1',
        ),
        new TextModuleData(
            id: 'key-2',
            header: 'label-2',
            body: 'value-2',
        )
    ],
    groupingInfo: new GroupingInfo(
        groupingId: 'group1'
    )
);

$jwt = (new JWT([
    'iss' => $credentials->client_email,
    'key' => $credentials->private_key,
    'origins' => ['https://example.org'],
]))->addOfferObject($object)->sign();
