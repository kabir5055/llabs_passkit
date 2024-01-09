<?php

use Luminouslabs\PassesKit\Google\Components\Common\Barcode;
use Luminouslabs\PassesKit\Google\Components\Common\DateTime;
use Luminouslabs\PassesKit\Google\Components\Common\Image;
use Luminouslabs\PassesKit\Google\Components\Common\ImageModuleData;
use Luminouslabs\PassesKit\Google\Components\Common\LinksModuleData;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Components\Common\TimeInterval;
use Luminouslabs\PassesKit\Google\Components\Common\Uri;
use Luminouslabs\PassesKit\Google\Enumerators\BarcodeType;
use Luminouslabs\PassesKit\Google\Enumerators\Offer\RedemptionChannel;
use Luminouslabs\PassesKit\Google\Enumerators\ReviewStatus;
use Luminouslabs\PassesKit\Google\Enumerators\State;
use Luminouslabs\PassesKit\Google\Http\GoogleClient;
use Luminouslabs\PassesKit\Google\JWT;
use Luminouslabs\PassesKit\Google\Passes\OfferClass;
use Luminouslabs\PassesKit\Google\Passes\OfferObject;
use Luminouslabs\PassesKit\Google\Repositories\OfferClassRepository;
use Luminouslabs\PassesKit\Google\ServiceCredentials;

$credentials = ServiceCredentials::parse('service_credentials.json');
$client = GoogleClient::createAuthenticatedClient($credentials);
$repository = new OfferClassRepository($client);

$class = new OfferClass(
    id: '1234567890123456789.coupon-15',
    issuerName: 'ACME',
    reviewStatus: ReviewStatus::UNDER_REVIEW,
    title: '15% off purchases',
    redemptionChannel: RedemptionChannel::INSTORE,
    provider: 'ACME',
    titleImage: Image::make('https://example.org/title.png'),
    helpUri: Uri::make('https://example.org/help'),
    localizedDetails: LocalizedString::make('en', '::value::'),
    imageModulesData: [
        new ImageModuleData(mainImage: Image::make('https://example.org/wallet.png')),
    ],
    linksModuleData: new LinksModuleData(
        uris: [
            new Uri(uri: 'https://example.org/app', description: 'App'),
            new Uri(uri: 'https://example.org', description: 'Homepage'),
        ]
    ),
    hexBackgroundColor: '#ffffff',
);
$repository->create($class);

$object = new OfferObject(
    classId: '1234567890123456789.coupon-15',
    id: '1234567890123456789.'.Str::uuid()->toString(),
    state: State::ACTIVE,
    barcode: new Barcode(
        type: BarcodeType::EAN_13,
        value: '1464194291627',
    ),
    validTimeInterval: new TimeInterval(
        start: new DateTime(date: now()),
        end: new DateTime(now()->addMonth())
    ),
);

$jwt = (new JWT([
    'iss' => $credentials->client_email,
    'key' => $credentials->private_key,
    'origins' => ['https://example.org'],
]))->addOfferObject($object)->sign();
