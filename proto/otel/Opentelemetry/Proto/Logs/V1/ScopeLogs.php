<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/logs/v1/logs.proto

namespace Opentelemetry\Proto\Logs\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of Logs produced by a Scope.
 *
 * Generated from protobuf message <code>opentelemetry.proto.logs.v1.ScopeLogs</code>
 */
class ScopeLogs extends \Google\Protobuf\Internal\Message
{
    /**
     * The instrumentation scope information for the logs in this message.
     * Semantically when InstrumentationScope isn't set, it is equivalent with
     * an empty instrumentation scope name (unknown).
     *
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.InstrumentationScope scope = 1;</code>
     */
    protected $scope = null;
    /**
     * A list of log records.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.LogRecord log_records = 2;</code>
     */
    private $log_records;
    /**
     * The Schema URL, if known. This is the identifier of the Schema that the log data
     * is recorded in. Notably, the last part of the URL path is the version number of the
     * schema: http[s]://server[:port]/path/<version>. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to all logs in the "logs" field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     */
    protected $schema_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Common\V1\InstrumentationScope $scope
     *           The instrumentation scope information for the logs in this message.
     *           Semantically when InstrumentationScope isn't set, it is equivalent with
     *           an empty instrumentation scope name (unknown).
     *     @type \Opentelemetry\Proto\Logs\V1\LogRecord[]|\Google\Protobuf\Internal\RepeatedField $log_records
     *           A list of log records.
     *     @type string $schema_url
     *           The Schema URL, if known. This is the identifier of the Schema that the log data
     *           is recorded in. Notably, the last part of the URL path is the version number of the
     *           schema: http[s]://server[:port]/path/<version>. To learn more about Schema URL see
     *           https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     *           This schema_url applies to all logs in the "logs" field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Logs\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The instrumentation scope information for the logs in this message.
     * Semantically when InstrumentationScope isn't set, it is equivalent with
     * an empty instrumentation scope name (unknown).
     *
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.InstrumentationScope scope = 1;</code>
     * @return \Opentelemetry\Proto\Common\V1\InstrumentationScope|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    public function hasScope()
    {
        return isset($this->scope);
    }

    public function clearScope()
    {
        unset($this->scope);
    }

    /**
     * The instrumentation scope information for the logs in this message.
     * Semantically when InstrumentationScope isn't set, it is equivalent with
     * an empty instrumentation scope name (unknown).
     *
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.InstrumentationScope scope = 1;</code>
     * @param \Opentelemetry\Proto\Common\V1\InstrumentationScope $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Common\V1\InstrumentationScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * A list of log records.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.LogRecord log_records = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogRecords()
    {
        return $this->log_records;
    }

    /**
     * A list of log records.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.LogRecord log_records = 2;</code>
     * @param \Opentelemetry\Proto\Logs\V1\LogRecord[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Logs\V1\LogRecord::class);
        $this->log_records = $arr;

        return $this;
    }

    /**
     * The Schema URL, if known. This is the identifier of the Schema that the log data
     * is recorded in. Notably, the last part of the URL path is the version number of the
     * schema: http[s]://server[:port]/path/<version>. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to all logs in the "logs" field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @return string
     */
    public function getSchemaUrl()
    {
        return $this->schema_url;
    }

    /**
     * The Schema URL, if known. This is the identifier of the Schema that the log data
     * is recorded in. Notably, the last part of the URL path is the version number of the
     * schema: http[s]://server[:port]/path/<version>. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to all logs in the "logs" field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_url = $var;

        return $this;
    }

}

