<?php

declare(strict_types=1);

namespace isDayOff\Filters\Ru;

use isDayOff\Filters\CountryFilter;

/**
 * @class   PenzaRegionFilter
 * @package isDayOff\Filters
 * @author  Aleksey Yudov <tcloud.ax@gmail.com>
 * @since   v1.1.0
 */
class PenzaRegionFilter extends CountryFilter
{
    public const PARAM_VALUE = 'ru-pnz';
}