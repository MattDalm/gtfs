<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto3

namespace Transit_realtime\TripUpdate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Timing information for a single predicted event (either arrival or
 * departure).
 * Timing consists of delay and/or estimated time, and uncertainty.
 * - delay should be used when the prediction is given relative to some
 *   existing schedule in GTFS.
 * - time should be given whether there is a predicted schedule or not. If
 *   both time and delay are specified, time will take precedence
 *   (although normally, time, if given for a scheduled trip, should be
 *   equal to scheduled time in GTFS + delay).
 * Uncertainty applies equally to both time and delay.
 * The uncertainty roughly specifies the expected error in true delay (but
 * note, we don't yet define its precise statistical meaning). It's possible
 * for the uncertainty to be 0, for example for trains that are driven under
 * computer timing control.
 *
 * Generated from protobuf message <code>transit_realtime.TripUpdate.StopTimeEvent</code>
 */
class StopTimeEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Delay (in seconds) can be positive (meaning that the vehicle is late) or
     * negative (meaning that the vehicle is ahead of schedule). Delay of 0
     * means that the vehicle is exactly on time.
     * optional int32 delay = 1;
     *
     * Generated from protobuf field <code>int32 delay = 1;</code>
     */
    protected $delay = 0;
    /**
     * Event as absolute time.
     * In Unix time (i.e., number of seconds since January 1st 1970 00:00:00
     * UTC).
     * optional int64 time = 2;
     *
     * Generated from protobuf field <code>int64 time = 2;</code>
     */
    protected $time = 0;
    /**
     * If uncertainty is omitted, it is interpreted as unknown.
     * If the prediction is unknown or too uncertain, the delay (or time) field
     * should be empty. In such case, the uncertainty field is ignored.
     * To specify a completely certain prediction, set its uncertainty to 0.
     * optional int32 uncertainty = 3;
     *
     * Generated from protobuf field <code>int32 uncertainty = 3;</code>
     */
    protected $uncertainty = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $delay
     *           Delay (in seconds) can be positive (meaning that the vehicle is late) or
     *           negative (meaning that the vehicle is ahead of schedule). Delay of 0
     *           means that the vehicle is exactly on time.
     *           optional int32 delay = 1;
     *     @type int|string $time
     *           Event as absolute time.
     *           In Unix time (i.e., number of seconds since January 1st 1970 00:00:00
     *           UTC).
     *           optional int64 time = 2;
     *     @type int $uncertainty
     *           If uncertainty is omitted, it is interpreted as unknown.
     *           If the prediction is unknown or too uncertain, the delay (or time) field
     *           should be empty. In such case, the uncertainty field is ignored.
     *           To specify a completely certain prediction, set its uncertainty to 0.
     *           optional int32 uncertainty = 3;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Delay (in seconds) can be positive (meaning that the vehicle is late) or
     * negative (meaning that the vehicle is ahead of schedule). Delay of 0
     * means that the vehicle is exactly on time.
     * optional int32 delay = 1;
     *
     * Generated from protobuf field <code>int32 delay = 1;</code>
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Delay (in seconds) can be positive (meaning that the vehicle is late) or
     * negative (meaning that the vehicle is ahead of schedule). Delay of 0
     * means that the vehicle is exactly on time.
     * optional int32 delay = 1;
     *
     * Generated from protobuf field <code>int32 delay = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDelay($var)
    {
        GPBUtil::checkInt32($var);
        $this->delay = $var;

        return $this;
    }

    /**
     * Event as absolute time.
     * In Unix time (i.e., number of seconds since January 1st 1970 00:00:00
     * UTC).
     * optional int64 time = 2;
     *
     * Generated from protobuf field <code>int64 time = 2;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Event as absolute time.
     * In Unix time (i.e., number of seconds since January 1st 1970 00:00:00
     * UTC).
     * optional int64 time = 2;
     *
     * Generated from protobuf field <code>int64 time = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

    /**
     * If uncertainty is omitted, it is interpreted as unknown.
     * If the prediction is unknown or too uncertain, the delay (or time) field
     * should be empty. In such case, the uncertainty field is ignored.
     * To specify a completely certain prediction, set its uncertainty to 0.
     * optional int32 uncertainty = 3;
     *
     * Generated from protobuf field <code>int32 uncertainty = 3;</code>
     * @return int
     */
    public function getUncertainty()
    {
        return $this->uncertainty;
    }

    /**
     * If uncertainty is omitted, it is interpreted as unknown.
     * If the prediction is unknown or too uncertain, the delay (or time) field
     * should be empty. In such case, the uncertainty field is ignored.
     * To specify a completely certain prediction, set its uncertainty to 0.
     * optional int32 uncertainty = 3;
     *
     * Generated from protobuf field <code>int32 uncertainty = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUncertainty($var)
    {
        GPBUtil::checkInt32($var);
        $this->uncertainty = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StopTimeEvent::class, \Transit_realtime\TripUpdate_StopTimeEvent::class);

