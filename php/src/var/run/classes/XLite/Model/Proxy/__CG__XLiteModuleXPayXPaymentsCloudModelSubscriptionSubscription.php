<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\XPay\XPaymentsCloud\Model\Subscription;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Subscription extends \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'initialOrderItem', 'calculateShipping', 'shippingAddress', 'shippingId', 'xpaymentsSubscriptionPublicId', 'status', 'failedAttempts', 'successfulAttempts', 'startDate', 'plannedDate', 'actualDate', 'cardId', 'oldStatus', 'daysOfWeek', 'fee', 'type', 'number', 'period', 'reverse', 'periods', '_previous_state'];
        }

        return ['__isInitialized__', 'id', 'initialOrderItem', 'calculateShipping', 'shippingAddress', 'shippingId', 'xpaymentsSubscriptionPublicId', 'status', 'failedAttempts', 'successfulAttempts', 'startDate', 'plannedDate', 'actualDate', 'cardId', 'oldStatus', 'daysOfWeek', 'fee', 'type', 'number', 'period', 'reverse', 'periods', '_previous_state'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Subscription $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getXpaymentsSubscriptionPublicId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXpaymentsSubscriptionPublicId', []);

        return parent::getXpaymentsSubscriptionPublicId();
    }

    /**
     * {@inheritDoc}
     */
    public function setXpaymentsSubscriptionPublicId($xpaymentsSubscriptionPublicId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setXpaymentsSubscriptionPublicId', [$xpaymentsSubscriptionPublicId]);

        return parent::setXpaymentsSubscriptionPublicId($xpaymentsSubscriptionPublicId);
    }

    /**
     * {@inheritDoc}
     */
    public function setInitialOrderItem(\XLite\Model\OrderItem $initialOrderItem = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitialOrderItem', [$initialOrderItem]);

        return parent::setInitialOrderItem($initialOrderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitialOrderItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitialOrderItem', []);

        return parent::getInitialOrderItem();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingId', []);

        return parent::getShippingId();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingId($shippingId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingId', [$shippingId]);

        return parent::setShippingId($shippingId);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingAddress', []);

        return parent::getShippingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingAddress($shippingAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingAddress', [$shippingAddress]);

        return parent::setShippingAddress($shippingAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function isCalculateShipping()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCalculateShipping', []);

        return parent::isCalculateShipping();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalculateShipping($calculateShipping)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalculateShipping', [$calculateShipping]);

        return parent::setCalculateShipping($calculateShipping);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductName', []);

        return parent::getProductName();
    }

    /**
     * {@inheritDoc}
     */
    public function getInitialOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitialOrder', []);

        return parent::getInitialOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(string $status = 'N')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getFailedAttempts(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFailedAttempts', []);

        return parent::getFailedAttempts();
    }

    /**
     * {@inheritDoc}
     */
    public function setFailedAttempts(int $failedAttempts): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFailedAttempts', [$failedAttempts]);

        return parent::setFailedAttempts($failedAttempts);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuccessfulAttempts(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuccessfulAttempts', []);

        return parent::getSuccessfulAttempts();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuccessfulAttempts(int $successfulAttempts): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuccessfulAttempts', [$successfulAttempts]);

        return parent::setSuccessfulAttempts($successfulAttempts);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', []);

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', [$startDate]);

        return parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlannedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlannedDate', []);

        return parent::getPlannedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlannedDate($plannedDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlannedDate', [$plannedDate]);

        return parent::setPlannedDate($plannedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getActualDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActualDate', []);

        return parent::getActualDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setActualDate($actualDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActualDate', [$actualDate]);

        return parent::setActualDate($actualDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber(int $number): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriod(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriod', []);

        return parent::getPeriod();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriod(string $period): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriod', [$period]);

        return parent::setPeriod($period);
    }

    /**
     * {@inheritDoc}
     */
    public function isReverse(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isReverse', []);

        return parent::isReverse();
    }

    /**
     * {@inheritDoc}
     */
    public function setReverse(bool $reverse): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReverse', [$reverse]);

        return parent::setReverse($reverse);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriods(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriods', []);

        return parent::getPeriods();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriods(int $periods): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriods', [$periods]);

        return parent::setPeriods($periods);
    }

    /**
     * {@inheritDoc}
     */
    public function getCardId(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCardId', []);

        return parent::getCardId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCardData(string $cardId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCardData', [$cardId]);

        return parent::getCardData($cardId);
    }

    /**
     * {@inheritDoc}
     */
    public function setCardId(string $cardId): \XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Subscription
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCardId', [$cardId]);

        return parent::setCardId($cardId);
    }

    /**
     * {@inheritDoc}
     */
    public function createOrUpdateFromXpaymentsSubscription($xpaymentsSubscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createOrUpdateFromXpaymentsSubscription', [$xpaymentsSubscription]);

        return parent::createOrUpdateFromXpaymentsSubscription($xpaymentsSubscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastOrderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastOrderId', []);

        return parent::getLastOrderId();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrders', []);

        return parent::getOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function stop($order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'stop', [$order]);

        return parent::stop($order);
    }

    /**
     * {@inheritDoc}
     */
    public function createOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createOrder', []);

        return parent::createOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function getProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfile', []);

        return parent::getProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigProfile', []);

        return parent::getOrigProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function getCalculateShipping()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalculateShipping', []);

        return parent::getCalculateShipping();
    }

    /**
     * {@inheritDoc}
     */
    public function getProfileAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfileAddresses', []);

        return parent::getProfileAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function getXpaymentsCards()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXpaymentsCards', []);

        return parent::getXpaymentsCards();
    }

    /**
     * {@inheritDoc}
     */
    public function isFree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFree', []);

        return parent::isFree();
    }

    /**
     * {@inheritDoc}
     */
    public function isActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActive', []);

        return parent::isActive();
    }

    /**
     * {@inheritDoc}
     */
    public function isRestarted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRestarted', []);

        return parent::isRestarted();
    }

    /**
     * {@inheritDoc}
     */
    public function isRestartable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRestartable', []);

        return parent::isRestartable();
    }

    /**
     * {@inheritDoc}
     */
    public function getPendingPaymentNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPendingPaymentNumber', []);

        return parent::getPendingPaymentNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function getRemainingPayments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemainingPayments', []);

        return parent::getRemainingPayments();
    }

    /**
     * {@inheritDoc}
     */
    public function processStatusChangeNotify()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processStatusChangeNotify', []);

        return parent::processStatusChangeNotify();
    }

    /**
     * {@inheritDoc}
     */
    public function setFee($fee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFee', [$fee]);

        return parent::setFee($fee);
    }

    /**
     * {@inheritDoc}
     */
    public function getFee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFee', []);

        return parent::getFee();
    }

    /**
     * {@inheritDoc}
     */
    public function getNextDate($checkDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNextDate', [$checkDate]);

        return parent::getNextDate($checkDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getXpaymentsPlanDescription($type = 'L')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXpaymentsPlanDescription', [$type]);

        return parent::getXpaymentsPlanDescription($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortDescription', []);

        return parent::getShortDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getLongDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongDescription', []);

        return parent::getLongDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getXpaymentsTotalPaymentsDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXpaymentsTotalPaymentsDescription', []);

        return parent::getXpaymentsTotalPaymentsDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlan', []);

        return parent::getPlan();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlan($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlan', [$data]);

        return parent::setPlan($data);
    }

    /**
     * {@inheritDoc}
     */
    public function buildDataForREST($withAssociations = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildDataForREST', [$withAssociations]);

        return parent::buildDataForREST($withAssociations);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelAssociationsForREST()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelAssociationsForREST', []);

        return parent::getModelAssociationsForREST();
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreviousState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreviousState', []);

        return parent::_getPreviousState();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', [$data]);

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', [$name]);

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', []);

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', []);

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', []);

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $args = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $args]);

        return parent::__call($method, $args);
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', [$name]);

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', [$property, $value]);

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', [$property]);

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', []);

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', []);

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function isManaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManaged', []);

        return parent::isManaged();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', []);

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', []);

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', []);

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldMetadata($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldMetadata', [$property]);

        return parent::getFieldMetadata($property);
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', []);

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', []);

        return parent::create();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', []);

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', [$field, $data]);

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', []);

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', [$class]);

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', [$type]);

        return parent::prepareEntityBeforeCommit($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isSerializable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSerializable', []);

        return parent::isSerializable();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
