<?php

/**
 * @author: Nilesh Dubey
 * This file is to register the theme
 * Please refer vendor/magento/theme-frontend-luma/registration.php
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::THEME, 'frontend/Magento/luma_child', __DIR__);
