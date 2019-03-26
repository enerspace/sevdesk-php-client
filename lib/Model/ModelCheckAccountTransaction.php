<?php
/**
 * ModelCheckAccountTransaction
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
 * ModelCheckAccountTransaction Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelCheckAccountTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model_CheckAccountTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create' => '\DateTime',
        'update' => '\DateTime',
        'sev_client' => 'object',
        'value_date' => '\DateTime',
        'entry_date' => '\DateTime',
        'amount' => 'float',
        'gv_code' => 'string',
        'entry_text' => 'string',
        'prima_nota_no' => 'string',
        'paymt_purpose' => 'string',
        'payee_payer_bank_code' => 'string',
        'payee_payer_acct_no' => 'string',
        'payee_payer_name' => 'string',
        'check_account' => '\Swagger\Client\Model\ModelCheckAccount',
        'status' => 'int',
        'score' => 'string',
        'compare_hash' => 'string',
        'entry_type' => 'object',
        'enshrined' => 'bool',
        'source_transaction' => 'object',
        'target_transaction' => 'object',
        'obono_receipt_uuid' => 'string'
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
        'value_date' => 'date-time',
        'entry_date' => 'date-time',
        'amount' => 'float',
        'gv_code' => null,
        'entry_text' => null,
        'prima_nota_no' => null,
        'paymt_purpose' => null,
        'payee_payer_bank_code' => null,
        'payee_payer_acct_no' => null,
        'payee_payer_name' => null,
        'check_account' => null,
        'status' => null,
        'score' => null,
        'compare_hash' => null,
        'entry_type' => null,
        'enshrined' => null,
        'source_transaction' => null,
        'target_transaction' => null,
        'obono_receipt_uuid' => null
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
        'value_date' => 'valueDate',
        'entry_date' => 'entryDate',
        'amount' => 'amount',
        'gv_code' => 'gvCode',
        'entry_text' => 'entryText',
        'prima_nota_no' => 'primaNotaNo',
        'paymt_purpose' => 'paymtPurpose',
        'payee_payer_bank_code' => 'payeePayerBankCode',
        'payee_payer_acct_no' => 'payeePayerAcctNo',
        'payee_payer_name' => 'payeePayerName',
        'check_account' => 'checkAccount',
        'status' => 'status',
        'score' => 'score',
        'compare_hash' => 'compareHash',
        'entry_type' => 'entryType',
        'enshrined' => 'enshrined',
        'source_transaction' => 'sourceTransaction',
        'target_transaction' => 'targetTransaction',
        'obono_receipt_uuid' => 'obonoReceiptUuid'
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
        'value_date' => 'setValueDate',
        'entry_date' => 'setEntryDate',
        'amount' => 'setAmount',
        'gv_code' => 'setGvCode',
        'entry_text' => 'setEntryText',
        'prima_nota_no' => 'setPrimaNotaNo',
        'paymt_purpose' => 'setPaymtPurpose',
        'payee_payer_bank_code' => 'setPayeePayerBankCode',
        'payee_payer_acct_no' => 'setPayeePayerAcctNo',
        'payee_payer_name' => 'setPayeePayerName',
        'check_account' => 'setCheckAccount',
        'status' => 'setStatus',
        'score' => 'setScore',
        'compare_hash' => 'setCompareHash',
        'entry_type' => 'setEntryType',
        'enshrined' => 'setEnshrined',
        'source_transaction' => 'setSourceTransaction',
        'target_transaction' => 'setTargetTransaction',
        'obono_receipt_uuid' => 'setObonoReceiptUuid'
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
        'value_date' => 'getValueDate',
        'entry_date' => 'getEntryDate',
        'amount' => 'getAmount',
        'gv_code' => 'getGvCode',
        'entry_text' => 'getEntryText',
        'prima_nota_no' => 'getPrimaNotaNo',
        'paymt_purpose' => 'getPaymtPurpose',
        'payee_payer_bank_code' => 'getPayeePayerBankCode',
        'payee_payer_acct_no' => 'getPayeePayerAcctNo',
        'payee_payer_name' => 'getPayeePayerName',
        'check_account' => 'getCheckAccount',
        'status' => 'getStatus',
        'score' => 'getScore',
        'compare_hash' => 'getCompareHash',
        'entry_type' => 'getEntryType',
        'enshrined' => 'getEnshrined',
        'source_transaction' => 'getSourceTransaction',
        'target_transaction' => 'getTargetTransaction',
        'obono_receipt_uuid' => 'getObonoReceiptUuid'
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
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
        $this->container['entry_date'] = isset($data['entry_date']) ? $data['entry_date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['gv_code'] = isset($data['gv_code']) ? $data['gv_code'] : null;
        $this->container['entry_text'] = isset($data['entry_text']) ? $data['entry_text'] : null;
        $this->container['prima_nota_no'] = isset($data['prima_nota_no']) ? $data['prima_nota_no'] : null;
        $this->container['paymt_purpose'] = isset($data['paymt_purpose']) ? $data['paymt_purpose'] : null;
        $this->container['payee_payer_bank_code'] = isset($data['payee_payer_bank_code']) ? $data['payee_payer_bank_code'] : null;
        $this->container['payee_payer_acct_no'] = isset($data['payee_payer_acct_no']) ? $data['payee_payer_acct_no'] : null;
        $this->container['payee_payer_name'] = isset($data['payee_payer_name']) ? $data['payee_payer_name'] : null;
        $this->container['check_account'] = isset($data['check_account']) ? $data['check_account'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['compare_hash'] = isset($data['compare_hash']) ? $data['compare_hash'] : null;
        $this->container['entry_type'] = isset($data['entry_type']) ? $data['entry_type'] : null;
        $this->container['enshrined'] = isset($data['enshrined']) ? $data['enshrined'] : null;
        $this->container['source_transaction'] = isset($data['source_transaction']) ? $data['source_transaction'] : null;
        $this->container['target_transaction'] = isset($data['target_transaction']) ? $data['target_transaction'] : null;
        $this->container['obono_receipt_uuid'] = isset($data['obono_receipt_uuid']) ? $data['obono_receipt_uuid'] : null;
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
     * @param \DateTime $create date the check account transaction was created
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
     * @param \DateTime $update date the check account transaction was last updated
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
     * Gets value_date
     *
     * @return \DateTime
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime $value_date 
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        $this->container['value_date'] = $value_date;

        return $this;
    }

    /**
     * Gets entry_date
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->container['entry_date'];
    }

    /**
     * Sets entry_date
     *
     * @param \DateTime $entry_date 
     *
     * @return $this
     */
    public function setEntryDate($entry_date)
    {
        $this->container['entry_date'] = $entry_date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount of the transaction
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets gv_code
     *
     * @return string
     */
    public function getGvCode()
    {
        return $this->container['gv_code'];
    }

    /**
     * Sets gv_code
     *
     * @param string $gv_code 
     *
     * @return $this
     */
    public function setGvCode($gv_code)
    {
        $this->container['gv_code'] = $gv_code;

        return $this;
    }

    /**
     * Gets entry_text
     *
     * @return string
     */
    public function getEntryText()
    {
        return $this->container['entry_text'];
    }

    /**
     * Sets entry_text
     *
     * @param string $entry_text 
     *
     * @return $this
     */
    public function setEntryText($entry_text)
    {
        $this->container['entry_text'] = $entry_text;

        return $this;
    }

    /**
     * Gets prima_nota_no
     *
     * @return string
     */
    public function getPrimaNotaNo()
    {
        return $this->container['prima_nota_no'];
    }

    /**
     * Sets prima_nota_no
     *
     * @param string $prima_nota_no 
     *
     * @return $this
     */
    public function setPrimaNotaNo($prima_nota_no)
    {
        $this->container['prima_nota_no'] = $prima_nota_no;

        return $this;
    }

    /**
     * Gets paymt_purpose
     *
     * @return string
     */
    public function getPaymtPurpose()
    {
        return $this->container['paymt_purpose'];
    }

    /**
     * Sets paymt_purpose
     *
     * @param string $paymt_purpose 
     *
     * @return $this
     */
    public function setPaymtPurpose($paymt_purpose)
    {
        $this->container['paymt_purpose'] = $paymt_purpose;

        return $this;
    }

    /**
     * Gets payee_payer_bank_code
     *
     * @return string
     */
    public function getPayeePayerBankCode()
    {
        return $this->container['payee_payer_bank_code'];
    }

    /**
     * Sets payee_payer_bank_code
     *
     * @param string $payee_payer_bank_code payer bank code
     *
     * @return $this
     */
    public function setPayeePayerBankCode($payee_payer_bank_code)
    {
        $this->container['payee_payer_bank_code'] = $payee_payer_bank_code;

        return $this;
    }

    /**
     * Gets payee_payer_acct_no
     *
     * @return string
     */
    public function getPayeePayerAcctNo()
    {
        return $this->container['payee_payer_acct_no'];
    }

    /**
     * Sets payee_payer_acct_no
     *
     * @param string $payee_payer_acct_no payer account number
     *
     * @return $this
     */
    public function setPayeePayerAcctNo($payee_payer_acct_no)
    {
        $this->container['payee_payer_acct_no'] = $payee_payer_acct_no;

        return $this;
    }

    /**
     * Gets payee_payer_name
     *
     * @return string
     */
    public function getPayeePayerName()
    {
        return $this->container['payee_payer_name'];
    }

    /**
     * Sets payee_payer_name
     *
     * @param string $payee_payer_name payer name
     *
     * @return $this
     */
    public function setPayeePayerName($payee_payer_name)
    {
        $this->container['payee_payer_name'] = $payee_payer_name;

        return $this;
    }

    /**
     * Gets check_account
     *
     * @return \Swagger\Client\Model\ModelCheckAccount
     */
    public function getCheckAccount()
    {
        return $this->container['check_account'];
    }

    /**
     * Sets check_account
     *
     * @param \Swagger\Client\Model\ModelCheckAccount $check_account id of the check account
     *
     * @return $this
     */
    public function setCheckAccount($check_account)
    {
        $this->container['check_account'] = $check_account;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param string $score 
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets compare_hash
     *
     * @return string
     */
    public function getCompareHash()
    {
        return $this->container['compare_hash'];
    }

    /**
     * Sets compare_hash
     *
     * @param string $compare_hash hash to be compared
     *
     * @return $this
     */
    public function setCompareHash($compare_hash)
    {
        $this->container['compare_hash'] = $compare_hash;

        return $this;
    }

    /**
     * Gets entry_type
     *
     * @return object
     */
    public function getEntryType()
    {
        return $this->container['entry_type'];
    }

    /**
     * Sets entry_type
     *
     * @param object $entry_type 
     *
     * @return $this
     */
    public function setEntryType($entry_type)
    {
        $this->container['entry_type'] = $entry_type;

        return $this;
    }

    /**
     * Gets enshrined
     *
     * @return bool
     */
    public function getEnshrined()
    {
        return $this->container['enshrined'];
    }

    /**
     * Sets enshrined
     *
     * @param bool $enshrined 
     *
     * @return $this
     */
    public function setEnshrined($enshrined)
    {
        $this->container['enshrined'] = $enshrined;

        return $this;
    }

    /**
     * Gets source_transaction
     *
     * @return object
     */
    public function getSourceTransaction()
    {
        return $this->container['source_transaction'];
    }

    /**
     * Sets source_transaction
     *
     * @param object $source_transaction source check account transaction used for transfers
     *
     * @return $this
     */
    public function setSourceTransaction($source_transaction)
    {
        $this->container['source_transaction'] = $source_transaction;

        return $this;
    }

    /**
     * Gets target_transaction
     *
     * @return object
     */
    public function getTargetTransaction()
    {
        return $this->container['target_transaction'];
    }

    /**
     * Sets target_transaction
     *
     * @param object $target_transaction destination check account transaction used for transfers
     *
     * @return $this
     */
    public function setTargetTransaction($target_transaction)
    {
        $this->container['target_transaction'] = $target_transaction;

        return $this;
    }

    /**
     * Gets obono_receipt_uuid
     *
     * @return string
     */
    public function getObonoReceiptUuid()
    {
        return $this->container['obono_receipt_uuid'];
    }

    /**
     * Sets obono_receipt_uuid
     *
     * @param string $obono_receipt_uuid 
     *
     * @return $this
     */
    public function setObonoReceiptUuid($obono_receipt_uuid)
    {
        $this->container['obono_receipt_uuid'] = $obono_receipt_uuid;

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


