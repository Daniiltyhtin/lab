<?php

namespace interfaces;

interface ISpecialProduct{
    function getSale($promo);
    function getHit();
    function getInfo();
}