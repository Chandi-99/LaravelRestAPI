<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter{
    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt','gt','lte','gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt','gt','lte','gte'],
        'paidDate' => ['eq', 'lt','gt','lte','gte']
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];

}