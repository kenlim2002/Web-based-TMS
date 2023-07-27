<?php
if (!function_exists('isRouteActive')) {
    function isRouteActive($routeName)
    {
        return request()->routeIs($routeName);
    }
}
