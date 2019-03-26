<?php
/**
 * ModelTaxSet
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.4
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ModelTaxSet Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelTaxSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model_TaxSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create' => '\DateTime',
        'update' => '\DateTime',
        'sev_client' => 'object',
        'text' => 'string',
        'tax_rate' => 'float',
        'code' => 'float',
        'display_text' => 'string',
        'vat_report_field_net' => 'string',
        'vat_report_field_tax' => 'string',
        'accounting_export_vat_field' => 'string',
        'show_invoice' => 'bool',
        'show_debit_voucher' => 'bool',
        'show_credit_voucher' => 'bool',
        'only_for_vat_dec' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create' => 'date-time',
        'update' => 'date-time',
        'sev_client' => null,
        'text' => null,
        'tax_rate' => 'float',
        'code' => 'float',
        'display_text' => null,
        'vat_report_field_net' => null,
        'vat_report_field_tax' => null,
        'accounting_export_vat_field' => null,
        'show_invoice' => null,
        'show_debit_voucher' => null,
        'show_credit_voucher' => null,
        'only_for_vat_dec' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'create' => 'create',
        'update' => 'update',
        'sev_client' => 'sevClient',
        'text' => 'text',
        'tax_rate' => 'taxRate',
        'code' => 'code',
        'display_text' => 'displayText',
        'vat_report_field_net' => 'vatReportFieldNet',
        'vat_report_field_tax' => 'vatReportFieldTax',
        'accounting_export_vat_field' => 'accountingExportVatField',
        'show_invoice' => 'showInvoice',
        'show_debit_voucher' => 'showDebitVoucher',
        'show_credit_voucher' => 'showCreditVoucher',
        'only_for_vat_dec' => 'onlyForVatDec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create' => 'setCreate',
        'update' => 'setUpdate',
        'sev_client' => 'setSevClient',
        'text' => 'setText',
        'tax_rate' => 'setTaxRate',
        'code' => 'setCode',
        'display_text' => 'setDisplayText',
        'vat_report_field_net' => 'setVatReportFieldNet',
        'vat_report_field_tax' => 'setVatReportFieldTax',
        'accounting_export_vat_field' => 'setAccountingExportVatField',
        'show_invoice' => 'setShowInvoice',
        'show_debit_voucher' => 'setShowDebitVoucher',
        'show_credit_voucher' => 'setShowCreditVoucher',
        'only_for_vat_dec' => 'setOnlyForVatDec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create' => 'getCreate',
        'update' => 'getUpdate',
        'sev_client' => 'getSevClient',
        'text' => 'getText',
        'tax_rate' => 'getTaxRate',
        'code' => 'getCode',
        'display_text' => 'getDisplayText',
        'vat_report_field_net' => 'getVatReportFieldNet',
        'vat_report_field_tax' => 'getVatReportFieldTax',
        'accounting_export_vat_field' => 'getAccountingExportVatField',
        'show_invoice' => 'getShowInvoice',
        'show_debit_voucher' => 'getShowDebitVoucher',
        'show_credit_voucher' => 'getShowCreditVoucher',
        'only_for_vat_dec' => 'getOnlyForVatDec'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['create'] = isset($data['create']) ? $data['create'] : null;
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['sev_client'] = isset($data['sev_client']) ? $data['sev_client'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['display_text'] = isset($data['display_text']) ? $data['display_text'] : null;
        $this->container['vat_report_field_net'] = isset($data['vat_report_field_net']) ? $data['vat_report_field_net'] : null;
        $this->container['vat_report_field_tax'] = isset($data['vat_report_field_tax']) ? $data['vat_report_field_tax'] : null;
        $this->container['accounting_export_vat_field'] = isset($data['accounting_export_vat_field']) ? $data['accounting_export_vat_field'] : null;
        $this->container['show_invoice'] = isset($data['show_invoice']) ? $data['show_invoice'] : null;
        $this->container['show_debit_voucher'] = isset($data['show_debit_voucher']) ? $data['show_debit_voucher'] : null;
        $this->container['show_credit_voucher'] = isset($data['show_credit_voucher']) ? $data['show_credit_voucher'] : null;
        $this->container['only_for_vat_dec'] = isset($data['only_for_vat_dec']) ? $data['only_for_vat_dec'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets create
     *
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param \DateTime $create date the tax set was created
     *
     * @return $this
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

        return $this;
    }

    /**
     * Gets update
     *
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     *
     * @param \DateTime $update date the tax set was last updated
     *
     * @return $this
     */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets sev_client
     *
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['sev_client'];
    }

    /**
     * Sets sev_client
     *
     * @param object $sev_client sevClient is the unique id every customer has and is used in nearly all operations
     *
     * @return $this
     */
    public function setSevClient($sev_client)
    {
        $this->container['sev_client'] = $sev_client;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text 
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate 
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets code
     *
     * @return float
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param float $code 
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets display_text
     *
     * @return string
     */
    public function getDisplayText()
    {
        return $this->container['display_text'];
    }

    /**
     * Sets display_text
     *
     * @param string $display_text 
     *
     * @return $this
     */
    public function setDisplayText($display_text)
    {
        $this->container['display_text'] = $display_text;

        return $this;
    }

    /**
     * Gets vat_report_field_net
     *
     * @return string
     */
    public function getVatReportFieldNet()
    {
        return $this->container['vat_report_field_net'];
    }

    /**
     * Sets vat_report_field_net
     *
     * @param string $vat_report_field_net 
     *
     * @return $this
     */
    public function setVatReportFieldNet($vat_report_field_net)
    {
        $this->container['vat_report_field_net'] = $vat_report_field_net;

        return $this;
    }

    /**
     * Gets vat_report_field_tax
     *
     * @return string
     */
    public function getVatReportFieldTax()
    {
        return $this->container['vat_report_field_tax'];
    }

    /**
     * Sets vat_report_field_tax
     *
     * @param string $vat_report_field_tax 
     *
     * @return $this
     */
    public function setVatReportFieldTax($vat_report_field_tax)
    {
        $this->container['vat_report_field_tax'] = $vat_report_field_tax;

        return $this;
    }

    /**
     * Gets accounting_export_vat_field
     *
     * @return string
     */
    public function getAccountingExportVatField()
    {
        return $this->container['accounting_export_vat_field'];
    }

    /**
     * Sets accounting_export_vat_field
     *
     * @param string $accounting_export_vat_field 
     *
     * @return $this
     */
    public function setAccountingExportVatField($accounting_export_vat_field)
    {
        $this->container['accounting_export_vat_field'] = $accounting_export_vat_field;

        return $this;
    }

    /**
     * Gets show_invoice
     *
     * @return bool
     */
    public function getShowInvoice()
    {
        return $this->container['show_invoice'];
    }

    /**
     * Sets show_invoice
     *
     * @param bool $show_invoice 
     *
     * @return $this
     */
    public function setShowInvoice($show_invoice)
    {
        $this->container['show_invoice'] = $show_invoice;

        return $this;
    }

    /**
     * Gets show_debit_voucher
     *
     * @return bool
     */
    public function getShowDebitVoucher()
    {
        return $this->container['show_debit_voucher'];
    }

    /**
     * Sets show_debit_voucher
     *
     * @param bool $show_debit_voucher 
     *
     * @return $this
     */
    public function setShowDebitVoucher($show_debit_voucher)
    {
        $this->container['show_debit_voucher'] = $show_debit_voucher;

        return $this;
    }

    /**
     * Gets show_credit_voucher
     *
     * @return bool
     */
    public function getShowCreditVoucher()
    {
        return $this->container['show_credit_voucher'];
    }

    /**
     * Sets show_credit_voucher
     *
     * @param bool $show_credit_voucher 
     *
     * @return $this
     */
    public function setShowCreditVoucher($show_credit_voucher)
    {
        $this->container['show_credit_voucher'] = $show_credit_voucher;

        return $this;
    }

    /**
     * Gets only_for_vat_dec
     *
     * @return bool
     */
    public function getOnlyForVatDec()
    {
        return $this->container['only_for_vat_dec'];
    }

    /**
     * Sets only_for_vat_dec
     *
     * @param bool $only_for_vat_dec 
     *
     * @return $this
     */
    public function setOnlyForVatDec($only_for_vat_dec)
    {
        $this->container['only_for_vat_dec'] = $only_for_vat_dec;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

