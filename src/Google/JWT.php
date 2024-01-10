<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\MinItems;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Passes\EventTicketClass;
use Luminouslabs\PassesKit\Google\Passes\EventTicketObject;
use Luminouslabs\PassesKit\Google\Passes\FlightClass;
use Luminouslabs\PassesKit\Google\Passes\FlightObject;
use Luminouslabs\PassesKit\Google\Passes\GenericClass;
use Luminouslabs\PassesKit\Google\Passes\GenericObject;
use Luminouslabs\PassesKit\Google\Passes\GiftCardClass;
use Luminouslabs\PassesKit\Google\Passes\GiftCardObject;
use Luminouslabs\PassesKit\Google\Passes\LoyaltyClass;
use Luminouslabs\PassesKit\Google\Passes\LoyaltyObject;
use Luminouslabs\PassesKit\Google\Passes\OfferClass;
use Luminouslabs\PassesKit\Google\Passes\OfferObject;
use Luminouslabs\PassesKit\Google\Passes\TransitClass;
use Luminouslabs\PassesKit\Google\Passes\TransitObject;
use Firebase\JWT\JWT as Encoder;

class JWT extends Component
{
    /** @var string */
    final public const AUDIENCE = 'google';

    /** @var string */
    final public const TYPE = 'savetoandroidpay';

    /**
     * Required.
     * Your OAuth 2.0 service account generated email address.
     */
    #[Required]
    public string $iss;

    /**
     * Required.
     * Audience. The audience for Google Pay API for Passes Objects will always be google.
     */
    public string $aud = self::AUDIENCE;

    /**
     * Required.
     * Type of JWT. The audience for Google Pay API for Passes Objects will always be savetoandroidpay.
     */
    public string $typ = self::TYPE;

    /**
     * Required.
     * Payload object. Refer to Generating the JWT Guide for an example of creating the payload.
     * Only one object or class should be included in the payload arrays.
     */
    public array $payload = [];

    /**
     * Required.
     * Signing key. Should be the service account private key.
     */
    #[Required]
    public string $key;

    /**
     * Required.
     * Array of domains to whitelist JWT saving functionality. The Google Pay API for Passes button will
     * not render when the origins field is not defined. You could potentially get a "Load denied by X-Frame-Options"
     * or "Refused to display" messages in the browser console when the origins field is not defined.
     */
    #[Required]
    #[MinItems(1)]
    public array $origins = [];

    public function addOfferClass(OfferClass $class): static
    {
        return $this->addComponent($class, 'offerClasses');
    }

    public function addOfferObject(OfferObject $object): static
    {
        return $this->addComponent($object, 'offerObjects');
    }

    public function addSkinnyOfferObject(OfferObject $object): static
    {
        return $this->addComponent($object->only('id'), 'offerObjects');
    }

    public function addLoyaltyClass(LoyaltyClass $class): static
    {
        return $this->addComponent($class, 'loyaltyClasses');
    }

    public function addLoyaltyObject(LoyaltyObject $object): static
    {
        return $this->addComponent($object, 'loyaltyObjects');
    }

    public function addSkinnyLoyaltyObject(LoyaltyObject $object): static
    {
        return $this->addComponent($object->only('id'), 'loyaltyObjects');
    }

    public function addGiftCardClass(GiftCardClass $class): static
    {
        return $this->addComponent($class, 'giftCardClasses');
    }

    public function addGiftCardObject(GiftCardObject $object): static
    {
        return $this->addComponent($object, 'giftCardObjects');
    }

    public function addSkinnyGiftCardObject(GiftCardObject $object): static
    {
        return $this->addComponent($object->only('id'), 'giftCardObjects');
    }

    public function addEventTicketClass(EventTicketClass $class): static
    {
        return $this->addComponent($class, 'eventTicketClasses');
    }

    public function addEventTicketObject(EventTicketObject $object): static
    {
        return $this->addComponent($object, 'eventTicketObjects');
    }

    public function addSkinnyEventTicketObject(EventTicketObject $object): static
    {
        return $this->addComponent($object->only('id'), 'eventTicketObjects');
    }

    public function addFlightClass(FlightClass $class): static
    {
        return $this->addComponent($class, 'flightClasses');
    }

    public function addFlightObject(FlightObject $object): static
    {
        return $this->addComponent($object, 'flightObjects');
    }

    public function addSkinnyFlightObject(FlightObject $object): static
    {
        return $this->addComponent($object->only('id'), 'flightObjects');
    }

    public function addTransitClass(TransitClass $class): static
    {
        return $this->addComponent($class, 'transitClasses');
    }

    public function addTransitObject(TransitObject $object): static
    {
        return $this->addComponent($object, 'transitObjects');
    }

    public function addSkinnyTransitObject(TransitObject $object): static
    {
        return $this->addComponent($object->only('id'), 'transitObjects');
    }

    public function addGenericClass(GenericClass $class): static
    {
        return $this->addComponent($class, 'genericClasses');
    }

    public function addGenericObject(GenericObject $object): static
    {
        return $this->addComponent($object, 'genericObjects');
    }

    /**
     * Sign the JWT.
     */
    public function sign(): string
    {
        $payload = array_merge($this->except('key')->toArray(), [
            'iat' => time(),
        ]);

        return Encoder::encode($payload, $this->key, 'RS256');
    }

    protected function addComponent(Component $component, string $type): static
    {
        if (! array_key_exists($type, $this->payload)) {
            $this->payload[$type] = [];
        }

        $this->payload[$type][] = $component->except('classReference');

        return $this;
    }
}
