<?php
/*
 * PepipostLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Settings implements JsonSerializable
{
    /**
     * enable or disable footer
     * @var bool|null $footer public property
     */
    public $footer;

    /**
     * enable or disable click tracking
     * @maps click_track
     * @var bool|null $clickTrack public property
     */
    public $clickTrack;

    /**
     * enable or disable open tracking
     * @maps open_track
     * @var bool|null $openTrack public property
     */
    public $openTrack;

    /**
     * enable or disable unsubscribe tracking
     * @maps unsubscribe_track
     * @var bool|null $unsubscribeTrack public property
     */
    public $unsubscribeTrack;

    /**
     * @todo Write general description for this property
     * @var bool|null $hepf public property
     */
    public $hepf;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool $footer           Initialization value for $this->footer
     * @param bool $clickTrack       Initialization value for $this->clickTrack
     * @param bool $openTrack        Initialization value for $this->openTrack
     * @param bool $unsubscribeTrack Initialization value for $this->unsubscribeTrack
     * @param bool $hepf             Initialization value for $this->hepf
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->footer           = func_get_arg(0);
            $this->clickTrack       = func_get_arg(1);
            $this->openTrack        = func_get_arg(2);
            $this->unsubscribeTrack = func_get_arg(3);
            $this->hepf             = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['footer']            = $this->footer;
        $json['click_track']       = $this->clickTrack;
        $json['open_track']        = $this->openTrack;
        $json['unsubscribe_track'] = $this->unsubscribeTrack;
        $json['hepf']              = $this->hepf;

        return $json;
    }
}
